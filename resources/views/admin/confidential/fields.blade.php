<div class="row">
    <div class="col-md-6">
        <fieldset>
            <div class="form-group">
                <label class="col-md-3 control-label" for="first_name">First Name:</label>
                <div class="col-md-12">
                    {!! Form::text('first_name', null, ['placeholder' => "First Name", 'class' => 'form-control', 'tabindex' => "1"]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="purpose">Purpose:</label>
                <div class="col-md-12">
                    {!! Form::text('purpose', null, ['placeholder' => "Purpose", 'class' => 'form-control', 'tabindex' => "3"]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="category">Category</label>
                <div class="col-md-12">
                    {!! Form::text('category', null, ['placeholder' => "hoose Category", 'class' => 'form-control', 'tabindex' => "5"]) !!}
                    {{--<select name="category" class="custom-select form-control" tabindex="5">--}}
                        {{--<option>Choose Category</option>--}}
                        {{--<option value="church_member">Church Member</option>--}}
                        {{--<option value="visitor">Visitor</option>--}}
                        {{--<option value="volunteer">Volunteer</option>--}}
                    {{--</select>--}}
                </div>
            </div>
        </fieldset>
    </div>

    <div class="col-md-6">
        <fieldset>
            <div class="form-group">
                <label class="col-md-3 control-label" for="last_name">Last Name:</label>
                <div class="col-md-12">
                    {!! Form::text('last_name', null, ['placeholder' => "Last Name", 'class' => 'form-control', 'tabindex' => "2"]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="date">Date:</label>
                <div class="col-md-12">
                    {!! Form::text('date', null, ['placeholder' => "Date", 'class' => 'form-control', 'id' => "start_date", 'tabindex' => "4"]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="phone">Phone Number:</label>
                <div class="col-md-12">
                    {!! Form::text('phone', null, ['placeholder' => "Phone Number", 'class' => 'form-control', 'tabindex' => "6"]) !!}
                </div>
            </div>
        </fieldset>
    </div>

    <div class="col-md-12">
        <fieldset style="width: 100%;">
            <div class="form-group">
                <label class="col-md-3 control-label" for="parties_involve">Parties Involve</label>
                <div class="col-md-12">
                    {!! Form::text('parties_involve', null, ['placeholder' => "Parties Involve", 'class' => 'form-control', 'tabindex' => "7"]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="notes">Notes:</label>
                <div class="col-md-12">
                
                    {!! Form::textarea('notes', null, ['placeholder' => "Notes", 'rows' => "5", 'class' => 'form-control', 'tabindex' => "8",'id'=>'basic-example']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="conclusion">Conclusion:</label>
                <div class="col-md-12">
                    {!! Form::textarea('conclusion', null, ['placeholder' => "Conclusion", 'rows' => "3", 'class' => 'form-control', 'tabindex' => "8",'id'=>'basic-example2']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="color">&nbsp;</label>
                <div class="col-md-12">
                    {{--<input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2 pull-right" style="padding: 10px 5%;">--}}
                    {!! Form::submit('Save', ['class' => 'btn btn-gradient-04 mr-1 mb-2 pull-right']) !!}
                </div>
            </div>
        </fieldset>
    </div>
</div>