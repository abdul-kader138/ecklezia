<div class="tab-content">
    <div class="tab-pane" id="tab1">
        <div class="section-title mt-5 mb-5">
            <h4>Client Informations</h4>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Name<span class="text-danger ml-2">*</span></label>
                {!! Form::text('name', null, ['placeholder' => "Enter Your Name", 'class' => 'form-control']) !!}
            </div>
            <div class="col-xl-6">
                <label class="form-control-label">Email<span class="text-danger ml-2">*</span></label>
                {!! Form::text('email', null, ['placeholder' => "Enter Your Email", 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row mb-5">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Phone</label>
                <div class="input-group">
                    <span class="input-group-addon addon-secondary">
                        <i class="la la-phone"></i>
                    </span>
                    {!! Form::text('phone', null, ['placeholder' => "Enter Your Phone", 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xl-6">
                <label class="form-control-label">Occupation</label>
                {!! Form::text('occupation', null, ['placeholder' => "Occupation", 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="section-title mt-5 mb-5">
            <h4>Address</h4>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                {!! Form::text('address', null, ['placeholder' => "Address", 'class' => 'form-control']) !!}
            </div>
            <div class="col-xl-6">
                <label class="form-control-label">Country<span class="text-danger ml-2">*</span></label>
                {!! Form::text('country', null, ['placeholder' => "Country", 'class' => 'form-control']) !!}
                {{--<select name="country" class="custom-select form-control">--}}
                    {{--<option value="">Select Country</option>--}}
                    {{--<option value="AF">Afghanistan</option>--}}
                    {{--<option value="AX">Åland Islands</option>--}}
                    {{--<option value="AL">Albania</option>--}}
                    {{--<option value="DZ">Algeria</option>--}}
                    {{--<option value="AS">American Samoa</option>--}}
                {{--</select>--}}

            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-4 mb-3">
                <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                {!! Form::text('city', null, ['placeholder' => "City", 'class' => 'form-control']) !!}
            </div>
            <div class="col-xl-4 mb-5">
                <label class="form-control-label">State<span class="text-danger ml-2">*</span></label>
                {!! Form::text('state', null, ['placeholder' => "State", 'class' => 'form-control']) !!}
            </div>
            <div class="col-xl-4">
                <label class="form-control-label">Zip<span class="text-danger ml-2">*</span></label>
                {!! Form::text('zip', null, ['placeholder' => "Zip", 'class' => 'form-control']) !!}
            </div>
        </div>
        <ul class="pager wizard text-right">
            <li class="previous d-inline-block">
                <a href="javascript:;" class="btn btn-secondary ripple">Previous</a>
            </li>
            <li class="next d-inline-block">
                <a href="javascript:;" class="btn btn-gradient-01">Next</a>
            </li>
        </ul>
    </div>
    <div class="tab-pane" id="tab2">
        <div class="section-title mt-5 mb-5">
            <h4>Financial Officer</h4>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">First Name<span class="text-danger ml-2">*</span></label>
                {!! Form::text('first_name', null, ['placeholder' => "First Name", 'class' => 'form-control']) !!}
            </div>
            <div class="col-xl-6">
                <label class="form-control-label">Last Name<span class="text-danger ml-2">*</span></label>
                {!! Form::text('last_name', null, ['placeholder' => "Last Name", 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-12">
                <label class="form-control-label">Description</label>
                {{--<textarea id="basic-example"></textarea>--}}
                {!! Form::textarea('description', null, ['id' => 'basic-example']) !!}
            </div>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-12">
                <label class="form-control-label">Estimated Amount</label>
                {!! Form::text('estimated_amount', null, ['placeholder' => "Estimated Amount", 'class' => 'form-control']) !!}
            </div>
        </div>

        <ul class="pager wizard text-right">
            <li class="previous d-inline-block">
                <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
            </li>
            <li class="next d-inline-block">
                {{--<a href="javascript:void(0)" class="finish btn btn-gradient-01" data-toggle="modal">Finish</a>--}}
                {!! Form::submit('Save', ['class' => 'finish btn btn-gradient-01', 'data-toggle' => "modal"]) !!}
            </li>
        </ul>
    </div>
</div>