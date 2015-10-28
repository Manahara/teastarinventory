@extends('master')
@section ('content')
<div class="row">
    <div class="span4 offset1">
        <div class="well">
            <legend>Please Register</legend>
            {{Form::open(array('url'=>'login'))}}
            @if($errors->any())
            <div class="alert alert-error">
                <a href="#" class="close" data dismiss="alert">&times;</a>
                {{implode('',$error->all('<li class="error">:message</li>'))}}
            </div>
            @endif
            {{Form::text('username','',array(placeholder=>'Username'))}}<br>
            {{Form::text('email','',array(placeholder=>'Email'))}}<br>
            {{Form::password('password',array(placeholder=>'password'))}}<br>
            {{Form::submit('Register',array('class'=>'btn btn-success'))}}<br>
            {{HTML::link('/','Cancel',array('class'=>'btn btn-danger'))}}<br>
            {{Form::close()}}


        </div>
    </div>
</div>
@stop