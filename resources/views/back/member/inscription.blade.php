@extends('back.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-fw ti-move"></i> General Elements
                    </h3>
                    <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
                </div>

                <div class="panel-body">
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Il y'a quelques problemes avec les informations saisis
                            <br/>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(['url' => '/inscription', 'class'=>'form-horizontal', 'role'=>'form']) !!}
                    <div class="form-body">
                        <div class="form-group {{ $errors->first('prenom')? 'has-error' : ''   }}"  >
                            {!! Form::label('prenom','Prenom', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('prenom', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Prenom')) !!}
                                <small class="text-danger help-block">{{ $errors->first('prenom') }}</small>
                            </div>

                        </div>
                        <div class="form-group {{ $errors->first('nom')? 'has-error' : ''   }}">
                            {!! Form::label('nom','Nom', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('nom', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Nom')) !!}
                                <small class="text-danger help-block">{{ $errors->first('nom') }}</small>
                            </div>

                        </div>
                        <div class="form-group {{ $errors->first('email')? 'has-error' : ''   }}">
                            {!! Form::label('email','Email', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::email('email', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Email')) !!}
                                <small class="text-danger help-block">{{ $errors->first('email') }}</small>
                            </div>

                        </div>
                        <div class="form-group {{ $errors->first('telephone')? 'has-error' : ''   }}">
                            {!! Form::label('telephone','Numéro de téléphone', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::tel('telephone', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Numéro de téléphone')) !!}
                                <small class="text-danger help-block">{{ $errors->first('telephone') }}</small>
                            </div>

                        </div>
                        <div class="form-group {{ $errors->first('password')? 'has-error' : ''   }}">
                            {!! Form::label('password','Mot de Passe', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::password('password',
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Mot de Passe')) !!}
                                <small class="text-danger help-block">{{ $errors->first('password') }}</small>
                            </div>

                        </div>
                        <div class="form-group {{ $errors->first('password_confirmation')? 'has-error' : ''   }}">
                            {!! Form::label('password_confirmation','Confirmer mot de passe', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::password('password_confirmation',
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Confirmer mot de passe')) !!}
                                <small class="text-danger help-block">{{ $errors->first('password_confirmation') }}</small>
                            </div>

                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                {!! Form::submit('S\'inscrire', ['class' => 'btn btn-primary'] ) !!}
                                &nbsp;
                                <button type="button" class="btn btn-danger">Annuler
                                </button>
                                &nbsp;
                                <button type="reset" class="btn btn-default bttn_reset">
                                    Vider
                                </button>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
@endsection