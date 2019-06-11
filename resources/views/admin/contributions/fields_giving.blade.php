<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Full Name</label>
    <div class="col-lg-8">
        {!! Form::select('contributor_id',$people->pluck('full_name','id'), null, ['placeholder' => "Enter Your Name", 'class' => 'form-control select2']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Contribution Id</label>
    <div class="col-lg-8">
        {!! Form::select('contribution_id',$contributions->pluck('contribution_id','id'), null, ['placeholder' => "Please Select", 'class' => 'form-control select2']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Method</label>
    <div class="col-lg-8">
        {!! Form::select('giving_method',[
            'cash'=>'Cash',
            'cheque'=>'Cheque',
            'credit'=>'Credit',
            ], null, ['placeholder' => "Please Select", 'class' => 'form-control']) !!}

    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Amount</label>
    <div class="col-lg-8">
        {!! Form::text('amount', null, ['placeholder' => "Enter Amount", 'class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Contribution Account</label>
    <div class="col-lg-8">
 {!! Form::select('account',[
            'saving'=>'Saving',
            'checking'=>'Checking',
            'church_building_fund'=>'Church Building Fund',
            'other'=>'Other',
            ], null, ['placeholder' => "Please Select", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label>
    <div class="col-lg-8">
  {!! Form::text('other', null, ['placeholder' => "Enter Other Contribution Account", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="text-center">
    <button class="btn btn-gradient-04" type="submit">Save</button>
  <!--   <button class="btn btn-shadow" type="reset">Reset</button> -->
  <a href="javascript:viod(0)" data-dismiss="modal" data-toggle="modal" data-target="#modal-centered2" class="btn btn-gradient-04">Save & Continue</a>
</div>