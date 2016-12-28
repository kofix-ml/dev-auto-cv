@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                			<div class="row">
	                			<div class="container">
	                				<h4>
	                					NAME :
	                				</h4>
	                			</div>
                			</div>
                			<div class="row">
                                <div class="container">
                                    {{ Form::text('name', $profile->name, array('class'=>'pure-u-16-24', 'id'=>'haha', 'disabled')) }}
                                </div>
                            </div>
                	
                    {!! Form::open(['method'=>'GET','route'=>['profile.edit',$id]]) !!}
					    {{  Form::button('<i class="glyphicon glyphicon-delete"></i>Edit My Resume!!', array('type' => 'submit', 'class' => 'button-success pure-button pure-u-1 center')) }}
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection