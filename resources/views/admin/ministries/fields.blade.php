

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry</label>
        <div class="col-lg-5">
            {!! Form::text('ministry', null, ['placeholder' => "Enter Ministry", 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Image</label>
        <div class="col-lg-5">
            {!! Form::file('image', ['placeholder' => "Enter Ministry", 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Name</label>
        <div class="col-lg-5">
            {!! Form::text('ministry_name', null, ['placeholder' => "Enter Ministry Name", 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Ministry Status</label>
        <div class="col-lg-5">
            {!! Form::select('ministry_status',[
            'leader'=>'Leader',
            'member'=>'Member',
            'other'=>'Others'
            ], null, ['placeholder' => "Select Ministry Leader", 'class' => 'form-control','id'=>'ministries_status']) !!}
        </div>
    </div>

    <div class="form-group row align-items-center d-none" id="others_text">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Others Note</label>
        <div class="col-lg-5">
            {!! Form::textarea('others_text', null, ['placeholder' => "Others note", 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number</label>
        <div class="col-lg-5">
            <div class="input-group">
                <span class="input-group-addon addon-primary">
                    <i class="la la-phone"></i>
                </span>
                {!! Form::text('phone', null, ['placeholder' => "Phone Number", 'class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Meeting Time</label>
        <div class="col-lg-5">
            {!! Form::text('meeting_time', null, ['placeholder' => "Meeting Time", 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row d-flex align-items-center">
        <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Events</label>
        <div class="col-lg-5">
            {!! Form::text('events', null, ['placeholder' => "Events", 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="text-center">
        {!! Form::submit('Save', ['class' => 'btn btn-gradient-01']) !!}
        {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
        <button class="btn btn-shadow" type="reset">Reset</button>
    </div>
