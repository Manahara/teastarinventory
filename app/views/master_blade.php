<!doctype html>

< html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

    </title>
<link href="style.css" type="text/css"rel="stylesheet"/>
    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.js')}}
    {{HTML::script('css/bootstrap.css')}}
</head>
<body>
<div class="row-fluid">
    <div class="span12 well">
        <h1>Some Website</h1>
    </div>
</div>
<div class="raw fluid">
    <div class="span3">
        <ul class="nav nav-list">
            @if(Auth::user())
            <li class="nav-header">{{ucwords(Auth::user()->username)}}</li>
            <li>{{HTML::link('post','Add Post')}}</li>
            <li>{{HTML::link('users','View Users')}}</li>
            <li>{{HTML::link('logout','Logout')}}</li>
            @else
            <li>{{HTML::link('login','Login')}}</li>
            @endif
        </ul>
    </div>
    <div class="span9">
        @yield('content')
    </div>
</div>
</body>

