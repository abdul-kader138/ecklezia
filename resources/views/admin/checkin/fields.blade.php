<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">First Name</label>
    <div class="col-lg-5">
        {!! Form::text('first_name', null, ['placeholder' => "Enter your first name", 'class' => 'form-control', 'tabindex' => "1"]) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Last Name</label>
    <div class="col-lg-5">
        {!! Form::text('last_name', null, ['placeholder' => "Enter your last name", 'class' => 'form-control', 'tabindex' => "2"]) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Parent/Guardian</label>
    <div class="col-lg-5">
        {!! Form::text('parent_guardian', null, ['placeholder' => "Enter your Parent/Guardian name", 'class' => 'form-control', 'tabindex' => "3"]) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Room Category</label>
    <div class="col-lg-5">
        {!! Form::select('room_category',$room_category, null, ['placeholder' => "Select Room Category", 'class' => 'form-control', 'tabindex' => "4",'id'=>'room_category']) !!}
    </div>
</div>
<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Select Room</label>
    <div class="col-lg-5">
        {!! Form::select('room_id',[], null, ['placeholder' => "Select Room", 'class' => 'form-control', 'tabindex' => "4" ,'id'=>'room_id']) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Phone Number</label>
    <div class="col-lg-5">
        <div class="input-group">
            <span class="input-group-addon addon-primary">
                <i class="la la-phone"></i>
            </span>
            {!! Form::text('phone', null, ['placeholder' => "Phone number", 'class' => 'form-control', 'tabindex' => "5"]) !!}
        </div>
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Shepard</label>
    <div class="col-lg-5">
        {!! Form::select('shepard_id',$shepard, null, ['placeholder' => "Select Shepard", 'class' => 'form-control', 'tabindex' => "6"]) !!}
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Assistant</label>
    <div class="col-lg-5">
        {!! Form::text('assistant', null, ['placeholder' => "Assistant", 'class' => 'form-control', 'tabindex' => "7"]) !!}
    </div>
</div>
<div class="text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-gradient-04']) !!}
    {{--<button class="btn btn-gradient-04" type="submit">Submit Form</button>--}}
    <button class="btn btn-shadow" type="reset">Reset</button>
</div>