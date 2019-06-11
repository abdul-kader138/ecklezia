

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Name</label>
        <div class="col-lg-5">
            {!! Form::text('name', null, ['placeholder' => "Enter Name", 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Date</label>
        <div class="col-lg-5">
            {!! Form::text('date', null, ['placeholder' => "Enter Date", 'class' => 'form-control', 'id' => 'date']) !!}
        </div>
    </div>
    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Service</label>
        <div class="col-lg-5">

            {!! Form::select('service_id',$service, null, ['placeholder' => "Enter Service", 'class' => 'form-control','id'=>'service_id']) !!}

        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Speaker</label>
        <div class="col-lg-5">
            {!! Form::text('speaker', null, ['placeholder' => "Enter Speaker", 'class' => 'form-control','id'=>'speaker' ,'readonly'=>true]) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Attendance</label>
        <div class="col-lg-5">
            {!! Form::text('attendance', null, ['placeholder' => "Enter Attendance", 'class' => 'form-control','id'=>'attendance','readonly'=>true]) !!}
        </div>
    </div>

    <div class="text-center">
        {!! Form::submit('Save', ['class' => 'finish btn btn-gradient-04']) !!}
        {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
        <button class="btn btn-shadow" type="reset">Reset</button>
    </div>