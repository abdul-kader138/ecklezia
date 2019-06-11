<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Event Name</label>
    <div class="col-lg-8">
        {!! Form::text('title', null, ['placeholder' => "Title", 'class' => 'form-control','id'=>'title_edit']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Starts On</label>
    <div class="col-lg-4">
        {!! Form::text('start_date', null, ['placeholder' => "Start On", 'class' => 'form-control','id'=>'start_date_edit']) !!}

    </div>
    <div  class="col-lg-4">
        <div class="input-group date datetimepicker" id="datetimepicker4" data-target-input="nearest">
            {{--<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>--}}

            {!! Form::text('start_time', null, ['placeholder' => "Start Time", 'class' => 'form-control datetimepicker-input','data-target'=>'#datetimepicker4','data-toggle'=>'datetimepicker','id'=>'start_time_edit']) !!}

            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
            </div>
        </div>

    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Ends On</label>
    <div class="col-lg-4">
        {!! Form::text('end_date', null, ['placeholder' => "End Date", 'class' => 'form-control','id'=>'end_date_edit']) !!}

    </div>
    <div class="col-lg-4">
        <div class="input-group date datetimepicker" id="datetimepicker5" data-target-input="nearest">
            {{--<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>--}}
            {!! Form::text('end_time', null, ['placeholder' => "End Time", 'class' => 'form-control datetimepicker-input','data-target'=>'#datetimepicker5','data-toggle'=>'datetimepicker','id'=>'end_time_edit']) !!}

            <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
            </div>
        </div>

    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label"></label>
    <div class="col-lg-9">
        <div class="mb-3">
            <div class="styled-checkbox">
                <input type="checkbox" name="all_day"  id="all_day">
                <label for="all_day">All Day</label>
            </div>
        </div>
        <div class="mb-3">
            <div class="styled-checkbox">
                <input type="checkbox" name="recurring" id="recurring">
                <label for="recurring">Recurring</label>
            </div>
        </div>


    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Calender</label>
    <div class="col-lg-8">
        <select class="selectpicker show-menu-arrow" name="calender" data-live-search="true" id="calender">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Location</label>
    <div class="col-lg-8">
        <select class="selectpicker show-menu-arrow" name="location" data-live-search="true" id="location">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Featured Image</label>

    <div class="col-lg-8 ">
        <div class="form-control d-flex">

            <input type="file" class="" name="image">
            <div class="text-right">
                <img src="" id="img_edit" style="max-height: 100px;max-width: 100px">
            </div>
        </div>

    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Latitude</label>
    <div class="col-lg-8">
        <input type="text" class="form-control" name="lat" id="lat">
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Longitude</label>
    <div class="col-lg-8">
        <input type="text" class="form-control" name="lon" id="lon">
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-3 form-control-label text-right">Notes</label>
    <div class="col-lg-8">
        {!! Form::textarea('description', null, ['placeholder' => "Description", 'class' => 'form-control','id'=>"basic-example-edit"]) !!}
    </div>


</div>
<div class="modal-footer">

    <button type="submit" class="btn btn-primary">Save</button>
</div>