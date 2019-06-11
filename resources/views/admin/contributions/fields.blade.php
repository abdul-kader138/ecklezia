<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Name</label>
    <div class="col-lg-5">
        {!! Form::text('name', null, ['placeholder' => "Enter Your Name", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Posted/Unposted</label>
    <div class="col-lg-5">
        {!! Form::select('post_type',['posted'=>'Posted','un_posted'=>'Un-posted'], null, [ 'class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Date</label>
    <div class="col-lg-5">
        {!! Form::text('date', null, ['placeholder' => "Select value", 'class' => 'form-control', 'id' => "date"]) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Giving Type</label>
    <div class="col-lg-5">
        {!! Form::select('giving_type',[
        ''=>'Select an Giving Type',
        'tithes'=>'Tithes',
        'offerings'=>'Offerings',
        'tithes_&_offerings'=>'Tithes & Offerings',
        'pledge'=>'Pledge',
        ], null, ['placeholder' => "Select Giving Type", 'class' => 'form-control']) !!}

    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Contribution Id</label>
    <div class="col-lg-5">
        {!! Form::text('contribution_id', null, ['placeholder' => "Enter Contribution Id", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Financial Officer</label>
    <div class="col-lg-5">
        {!! Form::text('financial_officer', null, ['placeholder' => "Enter Financial Officer", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-gradient-04']) !!}
    {{--<button class="btn btn-gradient-04" type="submit">Save</button>--}}
    <button class="btn btn-shadow" type="reset">Reset</button>
</div>