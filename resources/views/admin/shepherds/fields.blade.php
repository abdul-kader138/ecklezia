<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">First Name</label>
    <div class="col-lg-5">
        {!! Form::text('first_name', null, ['placeholder' => "Enter your first name", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Last Name</label>
    <div class="col-lg-5">
        {!! Form::text('last_name', null, ['placeholder' => "Enter your last name", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email</label>
    <div class="col-lg-5">
        {!! Form::text('email', null, ['placeholder' => "Enter your email", 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Username</label>
    <div class="col-lg-5">
        {!! Form::text('username', null, ['placeholder' => "Enter your username", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Password</label>
    <div class="col-lg-5">
        {!! Form::text('password', null, ['placeholder' => "Enter your password", 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number</label>
    <div class="col-lg-5">
        <div class="input-group">
            <span class="input-group-addon addon-primary">
                <i class="la la-phone"></i>
            </span>
            {!! Form::text('phone', null, ['placeholder' => "Enter your phone number", 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="text-center">
    {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
    {!! Form::submit('Save', ['class' => 'btn btn-gradient-04']) !!}
    <button class="btn btn-shadow" type="reset">Reset</button>
</div>