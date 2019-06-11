<div class="tab-content">

    <div class="tab-pane" id="tab1">
        <div class="section-title mt-5 mb-5">
            <h4>Client Information</h4>
        </div>
        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">First Name<span class="text-danger ml-2">*</span></label>
                {!! Form::text('first_name', null, ['placeholder' => "Enter First Name", 'class' => 'form-control']) !!}
            </div>
            <div class="col-xl-6">
                <label class="form-control-label">Last Name<span class="text-danger ml-2">*</span></label>


                {!! Form::text('last_name', null, ['placeholder' => "Enter Last Name", 'class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">E-mail</label>
                {!! Form::email('email', null, ['placeholder' => "Enter Your Email", 'class' => 'form-control']) !!}
            </div>

            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Member  Category<span class="text-danger ml-2">*</span></label>
             @if(request()->member_category && in_array(request()->member_category,['church_member','visitor','volunteer']))
                        {!! Form::select('member_category',['church_member'=>'Member','visitor'=>'Visitor','volunteer'=>'Volunteer'],request()->member_category, ['placeholder' => "Select Member Category", 'class' => 'form-control']) !!}

                    @else
                    {!! Form::select('member_category',['church_member'=>'Member','visitor'=>'Visitor','volunteer'=>'Volunteer'],null, ['placeholder' => "Select Member Category", 'class' => 'form-control']) !!}
                @endif

            </div>
        </div>

        <div class="form-group row mb-3">
            <div class="col-xl-6">
                <label class="form-control-label">Cell Number<span class="text-danger ml-2">*</span></label>
                <div class="input-group">
                <span class="input-group-addon addon-secondary">
                    <i class="la la-mobile-phone"></i>
                </span>
                    {!! Form::text('cell_number', null, ['placeholder' => "Cell Number", 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Home Phone Number</label>
                <div class="input-group">
                <span class="input-group-addon addon-secondary">
                    <i class="la la-phone"></i>
                </span>
                    {!! Form::text('home_phone_number', null, ['placeholder' => "Home Phone Number", 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xl-6 mb-3 ">
                <label class="form-control-label">Image</label>
                @if(isset($people) )
                <div class="mb-2">
                    @if($people->file)
                        <img src="{{ asset('uploads/images/people/'.$people->file) }}" alt="..." style="width: 120px;" class="avatar  d-block mx-auto">
                    @else
                        <img src="{{ asset('church/img/avatar/avatar-02.jpg') }}" alt="..." style="width: 120px;" class="avatar  d-block mx-auto">

                    @endif </div>
                @endif
                {!! Form::file('file', [ 'class' => 'form-control']) !!}
            </div>
            @if(request()->family_member )
            <div class="col-xl-6 mb-3 ">
                <label class="form-control-label">Family Status</label>
                {!! Form::select('family_status',['household_head'=>'Household Head','spouse'=>'Spouse','child'=>'Child'],null, ['placeholder' => "Select Family Staus", 'class' => 'form-control']) !!}
            </div>
                @elseif(isset($people) )
                    @if($people->family_member_id !== null)
                <div class="col-xl-6 mb-3 ">
                    <label class="form-control-label">Family Status</label>
                    {!! Form::select('family_status',['household_head'=>'Household Head','spouse'=>'Spouse','child'=>'Child'],null, ['placeholder' => "Select Family Staus", 'class' => 'form-control']) !!}
                </div>
                        @endif
                @endif
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
    </div><!-- /#tab1 -->

    <div class="tab-pane" id="tab2">
        <div class="section-title mt-5 mb-5">
            <h4>Account Details</h4>
        </div>
        @if(isset($people) )
        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">User Name<span class="text-danger ml-2">*</span></label>
                {!! Form::text('user_name', null, ['placeholder' => "User Name", 'class' => 'form-control','readonly'=>true]) !!}
            </div>
            <div class="col-xl-6">
                <label class="form-control-label">Password<span class="text-danger ml-2">*</span></label>

                {!! Form::password('password', ['placeholder' => "******", 'class' => 'form-control','readonly'=>false]) !!}

            </div>
        </div>
        @endif
        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Gender<span class="text-danger ml-2">*</span></label>
                {!! Form::select('gender', ['M'=>'Male','F'=>'Female'],null, ['placeholder' => "Select", 'class' => 'form-control']) !!}
            </div>

            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Household Status<span class="text-danger ml-2">*</span></label>
                {!! Form::select('household_status',['married'=>'Married','single'=>'Single','engaged'=>'Engaged','divorced'=>'Divorced'], null, ['placeholder' => "Household Status", 'class' => 'form-control']) !!}

            </div>
        </div>

        <div class="section-title mt-3 mb-3">
            <h4>Mailing Address</h4>
            <div class="styled-checkbox mt-1">
                {!! Form::checkbox('same_as_address', 1,null,['id'=>'check-1']) !!}
                <label for="check-1">Same as Address</label>
            </div>
        </div>
        <div class="form-row d-none" id="m_ad_1">
            <div class="form-group col">
                <div class="form-row mb-3">
                    <div class="form-group col-md-6 mb-3">
                        <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                        {!! Form::text('mailing_address', null, ['placeholder' => "Address", 'class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label class="form-control-label">Country<span class="text-danger ml-2">*</span></label>
                        {!! Form::text('mailing_country', null, ['placeholder' => "Country", 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-row mb-3 " >
                    <div class="form-group col-md-4 mb-3">
                        <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                        {!! Form::text('mailing_city', null, ['placeholder' => "City", 'class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label class="form-control-label">State<span class="text-danger ml-2">*</span></label>
                        {!! Form::text('mailing_state', null, ['placeholder' => "State", 'class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label class="form-control-label">Zip<span class="text-danger ml-2">*</span></label>
                        {!! Form::text('mailing_zip', null, ['placeholder' => "Zip", 'class' => 'form-control']) !!}
                    </div>
                </div>
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
    </div><!-- /#tab2 -->

    <div class="tab-pane" id="tab3">
        <div class="section-title mt-5 mb-5">
            <h4>Client Information</h4>
        </div>

        <div class="form-group row mb-3">
            <div class="col-xl-6 mb-3">
                <label class="form-control-label">People Category<span class="text-danger ml-2">*</span></label>
                     {!! Form::select('people_category',[
                     1=>'Babies',
                     2=>'Toddler  2-4 years older',
                     3=>'5-7—Children',
                     4=>'8-12 Pre-Teens',
                     5=>'13-17- Teenager',
                     6=>'18-21 Young Adults',
                     7=>'21+adults',
                     ], null, ['placeholder' => "Select People Category", 'class' => 'form-control']) !!}
            </div>

            <div class="col-xl-6">
                <label class="form-control-label">Date of Birth<span class="text-danger ml-2">*</span></label>
                   <div class="input-group">
                       {!! Form::selectRange('dob[days]',1,31, null, ['placeholder' => "days", 'class' => 'form-control', 'autocomplete'=>'off']) !!}
                       {!! Form::selectRange('dob[month]', 1, 12,null, ['placeholder' => "month", 'class' => 'form-control', 'autocomplete'=>'off']) !!}
                       {!! Form::selectRange('dob[year]', 1900, 2080,null, ['placeholder' => "Year", 'class' => 'form-control', 'autocomplete'=>'off']) !!}

                   </div>
            </div>
        </div>

        <div class="form-group row mb-3">


            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Baptism<span class="text-danger ml-2">*</span></label>
               {!! Form::select('baptized',[
                       'no_baptized'=>'No baptized',
                       'sprinkling'=>'Sprinkling',
                       'immersion'=>'Immersion',
                       ], null, ['class' => 'form-control','id'=>'baptized']) !!}

            </div>
            <div class="col-xl-6 mb-3 " id="baptized_com">
                <label class="form-control-label">Baptism date</label>
                {!! Form::text('baptized_date', null, ['placeholder' => "Baptized Date", 'class' => 'form-control','id' => 'baptized_date','autocomplete'=>'off']) !!}

            </div>
        </div>
                <div class="section-title mt-5 mb-5">
            <h4>Administrative Privileges</h4>
        </div>

        <div class="form-group row mb-3">
            <div class="col-xl-6">
                <label class="form-control-label">Admin Access<span class="text-danger ml-2">*</span></label>
                 {!! Form::select('admin_access',[
                     1=>'Admin',
                     2=>'Master Admin',
                     3=>'Miniterial Admin',
                     4=>'Pastorial Admin',
                     5=>'Church Member',
                     6=>'Volunteer',
                     ], null, ['placeholder' => "Select Admin Access", 'class' => 'form-control']) !!}
            </div>

            <div class="col-xl-6 mb-3">
                <label class="form-control-label">Membership Unique ID<span class="text-danger ml-2">*</span></label>
                {!! Form::text('membership_unique_id', null, ['placeholder' => "Membership Unique ID", 'class' => 'form-control','readonly'=>true]) !!}
            </div>
        </div>

        <ul class="pager wizard text-right">
            <li class="previous d-inline-block">
                <a href="javascript:void(0)" class="btn btn-secondary ripple">Previous</a>
            </li>
            <li class="next d-inline-block">
                {!! Form::submit('Save', ['class' => 'finish btn btn-gradient-04']) !!}
                {{--<input type="submit" value="Submit" class="finish btn btn-gradient-04">--}}
            </li>
        </ul>
    </div><!-- /#tab3 -->

</div>