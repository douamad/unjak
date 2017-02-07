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
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    {!! Form::open(['url' => '/inscription', 'class'=>'form-horizontal', 'role'=>'form']) !!}
                    <div class="form-group">
                        {!! Form::label('name','Your Name', array('class'=>'col-sm-2 control-label')) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Your name')) !!}
                        </div>

                    </div>
                    {{--<form class="form-horizontal" role="form">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="input-text" class="col-sm-2 control-label">Input text</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input type="text" class="form-control" id="input-text"--}}
                                       {{--placeholder="Input text">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="inputPassword" class="col-sm-2 control-label">Password</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input type="password" class="form-control" id="inputPassword"--}}
                                       {{--placeholder="Password">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</form>--}}

                </div>

            </div>
        </div>
    </div>
@endsection