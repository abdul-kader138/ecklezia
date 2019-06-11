<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Http\Helper\MimeCheckRules;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
class CalenderController extends Controller
{
    public function index(){
        $events = CalendarEvent::get()->map(function ($item,$key){
           return [
               'id'=>$item->id,
                'title'=>$item->title,
                'lat'=>$item->lat,
                'lon'=>$item->lon,
                'all_day'=>$item->all_day,
                'recurring'=>$item->recurring,
               'image'=>$item->image?asset('uploads/images/calender_event/'.$item->image):null,
                'description'=>$item->description,
                'start'=>$item->start_time,//Y-m-d
                'end'=>$item->end_time,
               'start_date'=>$item->start_time->format('d/m/Y'),
               'start_time'=>$item->start_time->format('h:i A'),
               'end_time'=>$item->end_time->format('h:i A'),
               'end_date'=>$item->end_time->format('d/m/Y'),
                'className'=>'fc-bg-default',
                'color'=>'#e5e5e5',
               'delete_url'=>route('admin.calendar.delete_event',$item->id),
               'update_url'=>route('admin.calendar.update_event',$item->id)
//                'icon'=>'scissors'
            ];
        });
//        dd($events->first());
          return view('admin.calendar.index',compact('events'));
    }
    public function external(){
        $events = CalendarEvent::get()->map(function ($item,$key){
            return [
                'id'=>$item->id,
                'title'=>$item->title,
                'lat'=>$item->lat,
                'lon'=>$item->lon,
                'all_day'=>$item->all_day,
                'recurring'=>$item->recurring,
                'image'=>$item->image?asset('uploads/images/calender_event/'.$item->image):null,
                'description'=>$item->description,
                'start'=>$item->start_time,//Y-m-d
                'end'=>$item->end_time,
                'start_date'=>$item->start_time->format('d/m/Y'),
                'start_time'=>$item->start_time->format('h:i A'),
                'end_time'=>$item->end_time->format('h:i A'),
                'end_date'=>$item->end_time->format('d/m/Y'),
                'className'=>'fc-bg-default',
                'color'=>'#e5e5e5',
                'delete_url'=>route('admin.calendar.delete_event',$item->id),
                'update_url'=>route('admin.calendar.update_event',$item->id)
//                'icon'=>'scissors'
            ];
        })->toJson();
        return view('admin.calendar.external_event',compact('events'));
    }
    public function addEvent(){
        return view('admin.calendar.add');
    }
    public function storeEvent(Request $request){
        $rules =[
            'title'=>'required|string|max:191',
            'color'=>'nullable|string|max:191',
            'start_date'=>'required',
            'end_date'=>'required',
            'description'=>'nullable',
            'image'=>['nullable',new MimeCheckRules(['jpg','png'])]
        ];
        if(!$request->all_day){
            $rules['start_time']='required';
            $rules['end_time']='required';
        }
        $this->validate($request,$rules);
//dd(Carbon::now()->format('d/m/Y h:i A'));
        if($request->all_day){
            $request['start_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->start_date.' 12:00 AM');
            $request['end_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->end_date.' 12:00 AM');
        }else{

            $request['start_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->start_date.' '.$request->start_time);
            $request['end_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->end_date.' '.$request->end_time);

        }
//dd($request->all());
        $event = new CalendarEvent();
        $event->title = $request->title;
        $event->color = $request->color;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->all_day = $request->all_day?1:0;
        $event->recurring = $request->recurring?1:0;
        $event->lat = $request->lat;
        $event->lon = $request->lon;
        $event->description = $request->description;
        if($request->hasFile('image')){
            $path = 'uploads/images/calender_event/';
            $event->image = 'event_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$event->image);
        }
        $event->save();
        return redirect()->route('admin.calendar.index')->with('success','Event create successful');
    }
    public function updateEvent(Request $request,$id){
//        dd($request->all());

        $rules =[
            'title'=>'required|string|max:191',
            'color'=>'nullable|string|max:191',
            'start_date'=>'required',
            'end_date'=>'required',
            'description'=>'nullable',
            'image'=>['nullable',new MimeCheckRules(['jpg','png'])]
        ];
        if(!$request->all_day){
            $rules['start_time']='required';
            $rules['end_time']='required';
        }
        $this->validate($request,$rules);
//dd(Carbon::now()->format('d/m/Y h:i A'));

        if($request->all_day){
            $request['start_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->start_date.' 12:00 AM');
            $request['end_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->end_date.' 12:00 AM');
        }else{

            $request['start_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->start_date.' '.$request->start_time);
            $request['end_time'] = Carbon::createFromFormat('d/m/Y h:i A',$request->end_date.' '.$request->end_time);

        }
//        dd($request->all());
        $event =  CalendarEvent::findOrFail($id);
        $event->title = $request->title;
        $event->color = $request->color;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->all_day = $request->all_day?1:0;
        $event->recurring = $request->recurring?1:0;
        $event->lat = $request->lat;
        $event->lon = $request->lon;
        $event->description = $request->description;
        if($request->hasFile('image')){
            $path = 'uploads/images/calender_event/';
            @unlink($path.$event->image);
            $event->image = 'event_'.time().'.'.$request->image->getClientOriginalExtension();
            Image::make($request->image)->save($path.$event->image);
        }
        $event->save();
        return redirect()->route('admin.calendar.index')->with('success','Event update successful');
    }
    public function deleteEvent($id){
        $event =  CalendarEvent::findOrFail($id);
        $path = 'uploads/images/calender_event/';
        @unlink($path.$event->image);
        $event->delete();
        return redirect()->route('admin.calendar.index')->with('success','Event delete successful');

    }
}
