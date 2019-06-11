<?php

namespace App\Http\Controllers;

use App\Http\Helper\MimeCheckRules;
use Illuminate\Http\Request;
use App\AssociateMinister;
use Image;
class AssociateMinistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $associateministers = AssociateMinister::orderBy('id','desc')->get();
        return view('admin.ministers.index',compact('associateministers'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ministers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email',
            'mobile'=>'required',
            'file'=>['image',new MimeCheckRules(['jpg','png'])]
        ]);

        $associateminister= new AssociateMinister;
        $associateminister->first_name = $request->first_name;
        $associateminister->middle_name = $request->middle_name;
        $associateminister->last_name = $request->last_name;
        $associateminister->email = $request->email;
        $associateminister->phone = $request->phone;
        $associateminister->mobile = $request->mobile;
        $associateminister->web = $request->web;
        $associateminister->education = $request->education;
        $associateminister->position = $request->position;
        $associateminister->leader_education = $request->leader_education;
        $associateminister->group = $request->group;
        if($request->hasFile('file')){
            $path = 'uploads/images/associate_minister/';
            $associateminister->file = 'associate_minister_'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$associateminister->file);
        }

        $associateminister->save();
        return redirect()->route('admin.associate-ministers.index')->withSuccess('Save Success');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $associateminister = AssociateMinister::find($id);
        return view('admin.ministers.view',compact('associateminister'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $associateminister = AssociateMinister::find($id);
        return view('admin.ministers.edit',compact('associateminister'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email',
            'mobile'=>'required',
            'file'=>['image',new MimeCheckRules(['jpg','png'])]
        ]);
//        dd($request->hasFile('file'));
        $associateminister = AssociateMinister::find($id);
        
        $associateminister->first_name = $request->first_name;
        $associateminister->middle_name = $request->middle_name;
        $associateminister->last_name = $request->last_name;
        $associateminister->email = $request->email;
        $associateminister->phone = $request->phone;
        $associateminister->mobile = $request->mobile;
        $associateminister->web = $request->web;
        $associateminister->education = $request->education;
        $associateminister->position = $request->position;
        $associateminister->leader_education = $request->leader_education;
        $associateminister->group = $request->group;

        if($request->has('file')){
            $path = 'uploads/images/associate_minister/';
            @unlink($path.$associateminister->file);
            $associateminister->file = 'associate_minister_'.time().'.'.$request->file->getClientOriginalExtension();
            Image::make($request->file)->save($path.$associateminister->file);
        }
        $associateminister->save();

        return redirect()->route('admin.associate-ministers.index')->with('success','Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $associateminister = AssociateMinister::findOrFail($id);
        $associateminister->delete();
        return redirect()->route('admin.associate-ministers.index')->with('success','Delete successful');
    }
}
