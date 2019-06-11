<div class="row">
    <div class="col-md-6">
        <fieldset>
            <div class="form-group">
                <label class="col-md-5 control-label" for="title">Sermon Title</label>
                <div class="col-md-12">
                    {!! Form::text('title', null, ['placeholder' => "Title", 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="lname">Sermon Purpose</label>
                <div class="col-md-12">
                    {!! Form::text('purpose', null, ['placeholder' => "Sermon Purpose", 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="lname">Opening Scripture</label>
                <div class="col-md-12">
                    {!! Form::text('opening_scripture', null, ['placeholder' => "Opening Scripture", 'class' => 'form-control']) !!}
                </div>
            </div>


        </fieldset>
    </div>

    <div class="col-md-6">
        <fieldset>
                        <div class="form-group">
                <label class="col-md-5 control-label" for="start_date">Created Date</label>
                <div class="col-md-12">
                    {!! Form::text('created_date', null, ['placeholder' => "Created Date", 'class' => 'form-control', 'id' => "start_date"]) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="end">Preaching Date</label>
                <div class="col-md-12">
                    {!! Form::text('preaching_date', null, ['placeholder' => "Preaching Date", 'class' => 'form-control', 'id' => "end_date"]) !!}
                </div>
            </div>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-5 control-label" for="color">Main Scripture</label>
                <div class="col-md-12">
                    {!! Form::text('main_scripture', null, ['placeholder' => "Main Scripture", 'class' => 'form-control']) !!}
                </div>
            </div>
        </fieldset>
    </div>
        <div class="col-md-12">
        <fieldset>

            <div class="form-group">
                <label class="col-md-5 control-label" for="sermon">Sermon</label>
                <div class="col-md-12">
                    {!! Form::textarea('sermon', null, ['rows' => "4", 'placeholder' => "Sermon", 'class' => 'form-control','id'=>'basic-example']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="sermon">Conclusion</label>
                <div class="col-md-12">
                    {!! Form::textarea('conclusion', null, ['rows' => "4", 'placeholder' => "Conclusion", 'class' => 'form-control','id'=>'basic-example2']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-5 control-label" for="color">&nbsp;</label>
                <div class="col-md-12">
                    {{--<input type="submit" value="Add" class="btn btn-gradient-04 mr-1 mb-2 pull-right" style="padding: 10px 5%;">--}}
                    {!! Form::submit('Save', ['class' => 'btn btn-gradient-04 mr-1 mb-2 pull-right']) !!}
                </div>
            </div>
        </fieldset>
    </div>
</div>
