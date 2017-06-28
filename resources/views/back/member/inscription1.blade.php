@extends('back.layouts.master')
@section('page_css')
    <link type="text/css" href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('vendors/iCheck/css/all.css') }}" rel="stylesheet"/>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff"
                       data-loop="true"></i> Add New User
                </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <!-- errors -->
                <!--main content-->
                {!! Form::open(['url' => url('/inscription'), 'class'=>'form-horizontal', 'role'=>'form', 'id'=>'adduser_form']) !!}
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token"/>
                    <div id="pager_wizard">
                        <ul>
                            <li>
                                <a href="#indentification" data-toggle="tab">Identification</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">Bio</a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">Address</a>
                            </li>
                            <li>
                                <a href="#tab4" data-toggle="tab">User Group</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="indentification">
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group">
                                   {!! Form::label('prenom','Prenom *', array('class'=>'col-sm-3 control-label')) !!}
                                    <div class="col-sm-9">
                                        {!! Form::text('prenom', null,
                                        array('required',
                                              'class'=>'form-control',
                                              'placeholder'=>'Prenom')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('nom','Nom *', array('class'=>'col-sm-3 control-label')) !!}
                                    <div class="col-sm-9">
                                        {!! Form::text('nom', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Nom')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email','Email *', array('class'=>'col-sm-3 control-label')) !!}
                                    <div class="col-sm-9">
                                        {!! Form::email('email', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Email')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('telephone','Numéro de téléphone *', array('class'=>'col-sm-3 control-label')) !!}
                                    <div class="col-sm-9">
                                        {!! Form::tel('telephone', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Numéro de téléphone')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password','Mot de Passe *', array('class'=>'col-sm-3 control-label')) !!}
                                    <div class="col-sm-9">
                                        {!! Form::password('password',
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Mot de Passe')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('password_confirmation','Confirmer mot de passe', array('class'=>'col-sm-3 control-label')) !!}
                                    <div class="col-sm-9">
                                        {!! Form::password('password_confirmation',
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Confirmer mot de passe')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group required">
                                    <label for="dob" class="  col-sm-3 control-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input id="dob" name="dob" type="text" class="form-control"
                                               placeholder="dd/mm/yyyy"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pic" class="  col-sm-3 control-label">Profile
                                        picture</label>
                                    <div class="col-sm-9">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail"
                                                 style="width: 200px; height: 200px;">
                                                <img src="img/original.jpg" alt="profile pic holder">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                 style="max-width: 200px; max-height: 200px;"></div>
                                            <div>
                                                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input id="pic" name="pic_file" type="file"
                                                                       class="form-control"/>
                                                                </span>
                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="bio" class="  col-sm-3 control-label">Bio
                                        <small>(brief intro) *</small>
                                    </label>
                                    <div class="col-sm-9">
                                                    <textarea name="bio" id="bio" class="form-control resize_vertical"
                                                              rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="form-group">
                                    <label for="gender" class="  col-sm-3 control-label">Gender *</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select21" id="gender"
                                                title="Select Gender..." name="gender">
                                            <option disabled selected>Select Gender</option>
                                            <option value="male">MALE</option>
                                            <option value="female">FEMALE</option>
                                            <option value="other">OTHER</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="  col-sm-3 control-label">Country</label>
                                    <div class="col-sm-9">
                                        <select class="select21 form-control" name="country" id="country">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option>Select Country</option>
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="state" class="  col-sm-3 control-label">State </label>
                                    <div class="col-sm-9">
                                        <input id="state" name="state" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="city" class="  col-sm-3 control-label">City </label>
                                    <div class="col-sm-9">
                                        <input id="city" name="city" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="address" class="  col-sm-3 control-label">Address </label>
                                    <div class="col-sm-9">
                                        <input id="address" name="address" type="text"
                                               class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label for="postal" class="  col-sm-3 control-label">Postal/zip</label>
                                    <div class="col-sm-9">
                                        <input id="postal" name="postal" type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <p class="text-danger"><strong>Be careful with group selection, if you give
                                        admin access.. they can access admin section</strong></p>
                                <div class="form-group required">
                                    <label for="group" class="  col-sm-3 control-label">Group *</label>
                                    <div class="col-sm-9">
                                        <select class="form-control required select21"
                                                title="Select group..." name="group" id="group">
                                            <option disabled selected>Select Group</option>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="activate" class="  col-sm-3 control-label"> Activate User
                                    </label>
                                    <div class="col-sm-9">
                                        <label for="activate">
                                            <input id="activate" name="activate" type="checkbox"
                                                   class="pos-rel p-l-30 custom-checkbox" value="1"> &nbsp;Activate
                                            the user otherwise the user won't be able to access their
                                            account.</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="pager wizard">
                                <li class="previous">
                                    <a href="#">Previous</a>
                                </li>
                                <li class="next">
                                    <a href="#">Next</a>
                                </li>
                                <li class="next finish" style="display:none;">
                                    <a href="javascript:;">Finish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">User Register</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Account Registered Successfully.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page_script')
    <script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom_js/adduser.js') }}" type="text/javascript"></script>
@endsection