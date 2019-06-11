


    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Name</label>
        <div class="col-lg-5">
            {!! Form::select('ministry_id',$ministry->pluck('ministry_name','id'), $id, ['placeholder' => "Enter Ministry", 'class' => 'form-control']) !!}

        </div>
    </div>
    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Event Date</label>
        <div class="col-lg-5">
            {!! Form::text('date', null, ['placeholder' => "Enter Date", 'class' => 'form-control']) !!}

        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Event Description</label>
        <div class="col-lg-5">
            {!! Form::textarea('description', null, ['placeholder' => "Event Description", 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="text-center">
        {!! Form::submit('Save', ['class' => 'btn btn-gradient-01']) !!}
        {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
        <button class="btn btn-shadow" type="reset">Reset</button>
    </div>
