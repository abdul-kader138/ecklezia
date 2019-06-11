<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">First Name</label>
    <div class="col-lg-5">
        {!! Form::text('first_name', null, ['placeholder' => "Enter Your First Name", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Last Name</label>
    <div class="col-lg-5">
        {!! Form::text('last_name', null, ['placeholder' => "Enter Your Last Name", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Purpose</label>
    <div class="col-lg-5">
        {!! Form::text('purpose', null, ['placeholder' => "Enter Your Purpose", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Phone</label>
    <div class="col-lg-5">
        {!! Form::text('phone', null, ['placeholder' => "Enter Phone Number", 'class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Date</label>
    <div class="col-lg-5">
        {!! Form::text('date', null, ['placeholder' => "Select value", 'class' => 'form-control', 'id' => "start_date"]) !!}
    </div>
</div>


<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Pledge Id</label>
    <div class="col-lg-5">
        {!! Form::text('pledge_id', null, ['placeholder' => "Enter Pledge Id", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Estimated Amount</label>
    <div class="col-lg-5">
        {!! Form::text('estimated_amount', null, ['placeholder' => "Enter Estimated Amount", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Payment Status</label>
    <div class="col-lg-5">
        {!! Form::select('payment_status',[
        'unpaid'=>'Unpaid',
        'partial'=>'Partial',
        'paid'=>'Paid',
        ], null, ['placeholder' => "Enter Payment Status", 'class' => 'form-control']) !!}
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
    <button class="btn btn-shadow" type="reset">Reset</button>
</div>