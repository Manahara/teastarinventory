@extends('master')
@section ('content')
<div class="row">
    <div class="span4 offset1">
        <div class="well">
            <legend>Please Login</legend>
            {{Form::open(array('url'=>'login'))}}
            @if($errors->any())
            <div class="alert alert-error">
                <a href="#" class="close" data dismiss="alert">&times;</a>
                {{implode('',$error->all('<li class="error">:message</li>'))}}
            </div>
            @endif
            {{Form::text('email','',array(placeholder=>'Email'))}}<br>
            {{Form::password('password',array(placeholder=>'password'))}}<br>
            {{Form::submit('login',array('class'=>'btn btn-success'))}}<br>
            {{HTML::link('register','Register',array('class'=>'btn btn-primary'))}}<br>
            {{Form::close()}}


        </div>
    </div>
</div>
@stop