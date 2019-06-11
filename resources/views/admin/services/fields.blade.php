
    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Service Name</label>
        <div class="col-lg-5">
            {!! Form::text('service_name', null, ['placeholder' => "Enter Service Name", 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Speaker</label>
        <div class="col-lg-5">
            {!! Form::text('speaker', null, ['placeholder' => "Enter Speaker", 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Attendance</label>
        <div class="col-lg-5">
            {!! Form::number('attendance', null, ['placeholder' => "Enter Attendance", 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group row d-flex align-items-center">
        <label for="check-1" class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ongoing</label>

        <div class="styled-checkbox mt-1">
            {!! Form::checkbox('is_ongoing', true,null,['id'=>'check-1']) !!}
            <label for="check-1"></label>

        </div>
    </div>

    <div class="text-center">
        {!! Form::submit('Save', ['class' => 'finish btn btn-gradient-04']) !!}
        {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
        <button class="btn btn-shadow" type="reset">Reset</button>
    </div>
