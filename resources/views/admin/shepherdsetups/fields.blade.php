<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Shepherd Name</label>
    <div class="col-lg-5">
        {!! Form::text('name', null, ['placeholder' => "Enter Shepherd Name", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Room Category</label>
    <div class="col-lg-5">
        {!! Form::text('room_category', null, ['placeholder' => "Enter Room Category", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Class Guide</label>
    <div class="col-lg-5">
        {!! Form::text('class_guide', null, ['placeholder' => "Enter Class Guide", 'class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Service Assignment</label>
    <div class="col-lg-5">
        {!! Form::text('service_assignment', null, ['placeholder' => "Enter Service Assignment", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="text-center">
    {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
    {!! Form::submit('Save', ['class' => 'btn btn-gradient-04']) !!}
    <button class="btn btn-shadow" type="reset">Reset</button>
</div>