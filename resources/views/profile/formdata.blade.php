@extends('layouts.app')
<!-- this form is using purecss-->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<style type="text/css">

	.button-success,
    .button-error,
    .button-warning,
    .button-secondary{
    	color: white;
        border-radius: 4px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
	}

	.button-success {
        /*background: rgb(28, 184, 65);  this is a green */
        background: rgb(165, 40, 150);
    }

</style>
@section('content')

<div class="container">
    		
    {!! Form::open(['url' => 'resume/keep', 'class'=>'pure-form pure-form-aligned']) !!}

    	<div class="pure-control-group">
            {{ Form::label('Name','name') }}
            {{ Form::text('firstname', null, array('class'=>'pure-u-8-24', 'id'=>'haha')) }}
            {{ Form::text('lastname', null, array('class'=>'pure-u-8-24', 'id'=>'haha')) }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('Name','name') }}
            {{ Form::text('firstname', null, array('class'=>'pure-u-16-24', 'id'=>'haha')) }}
        </div>
    <!--{!! Form::model($user, ['route' => ['user.update']]) !!}-->
	{{  Form::button('<i class="glyphicon glyphicon-delete"></i>Click Me!!', array('type' => 'submit', 'class' => 'button-success pure-button')) }}
    {!! Form::close() !!}
    	

</div>
@endsection