<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Upload</label>
    <div class="col-lg-5">
        {!! Form::file('file', null, ['placeholder' => "Enter Your Name", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">First Name</label>
    <div class="col-lg-5">
        {!! Form::text('first_name', null, ['placeholder' => "Enter Your First Name", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Middle Name</label>
    <div class="col-lg-5">
        {!! Form::text('middle_name', null, ['placeholder' => "Enter Your Middle Name", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Last Name</label>
    <div class="col-lg-5">
        {!! Form::text('last_name', null, ['placeholder' => "Enter Your Last Name", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email</label>
    <div class="col-lg-5">
        {!! Form::email('email', null, ['placeholder' => "Enter Your Email", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number</label>
    <div class="col-lg-5">
        {!! Form::text('phone', null, ['placeholder' => "Enter Your Phone Number", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Mobile Number</label>
    <div class="col-lg-5">
        {!! Form::text('mobile', null, ['placeholder' => "Enter Your Mobile Number", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Website</label>
    <div class="col-lg-5">
        {!! Form::text('web', null, ['placeholder' => "Enter Your Web Address", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Education</label>
    <div class="col-lg-5">
        {!! Form::text('education', null, ['placeholder' => "Enter Your Education", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label>
    <div class="col-lg-5">
        <h4>Ministerial Leader Responsibility</h4>
        <hr>

    </div>
</div>
    
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Position</label>
    <div class="col-lg-5">
        {!! Form::text('position', null, ['placeholder' => "Enter Position", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Group</label>
    <div class="col-lg-5">
        {!! Form::text('group', null, ['placeholder' => "Enter Group", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Education</label>
    <div class="col-lg-5">
        {!! Form::text('leader_education', null, ['placeholder' => "Enter Education", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"></label>
    <div class="col-lg-5">
       {!! Form::submit('Save', ['class' => 'btn btn-gradient-04 mr-1 mb-2']) !!}
    </div>
</div>



