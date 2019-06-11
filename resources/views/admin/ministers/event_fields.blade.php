                                        <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Event Name</label>
                                                <div class="col-lg-8">
                                                    {!! Form::text('title', null, ['placeholder' => "Title", 'class' => 'form-control','id'=>'title']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Starts On</label>
                                                <div class="col-lg-4">
                                                    {!! Form::text('start_date', null, ['placeholder' => "Start On", 'class' => 'form-control','id'=>'start_time']) !!}

                                                </div>
                                                  <div  class="col-lg-4">
   <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                    {{--<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>--}}

       {!! Form::text('start_time', null, ['placeholder' => "Start Time", 'class' => 'form-control datetimepicker-input','data-target'=>'#datetimepicker3','data-toggle'=>'datetimepicker','id'=>'start_clock']) !!}

       <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>

  </div>
                                            </div>       
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Ends On</label>
                                                <div class="col-lg-4">
                                                    {!! Form::text('end_date', null, ['placeholder' => "Start Time", 'class' => 'form-control','id'=>'end_time']) !!}

                                                </div>
                                                <div class="col-lg-4">
                                                       <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                    {{--<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>--}}
                                                           {!! Form::text('end_time', null, ['placeholder' => "End Time", 'class' => 'form-control datetimepicker-input','data-target'=>'#datetimepicker2','data-toggle'=>'datetimepicker']) !!}

                                                           <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>
                                                 
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="all_day"  id="check-1">
                                                            <label for="check-1">All Day</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="recurring" id="check-12">
                                                            <label for="check-12">Recurring</label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Calender</label>
                                                <div class="col-lg-8">
                                                       <select class="selectpicker show-menu-arrow" name="calender" data-live-search="true">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Location</label>
                                                <div class="col-lg-8">
                                                       <select class="selectpicker show-menu-arrow" name="location" data-live-search="true">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Featured Image</label>
                                                <div class="col-lg-8">
                                               <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                                 <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Latitude</label>
                                                <div class="col-lg-8">
                                               <input type="text" class="form-control" name="lat">
                                                </div>
                                            </div>
                                                <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Longitude</label>
                                                <div class="col-lg-8">
                                               <input type="text" class="form-control" name="lon">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label text-right">Notes</label>
                                                <div class="col-lg-8">
                                                    {!! Form::textarea('description', null, ['placeholder' => "Description", 'class' => 'form-control','id'=>"basic-example"]) !!}
                                                </div>

                                      
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>