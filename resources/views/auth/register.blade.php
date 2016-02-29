@extends('auth/layout')

<a href="{{ url('/') }}"><button>HOME</button></a>
@section('content')
    <h1>Login</h1>
<form method="POST" action="">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
    <ul>
        @if(count($errors)>0) 
           @foreach($errors->all() as $error)
                <li>{{ $error }}</li>   
           @endforeach
       @endif
    </ul>
<ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>        
</ul>
    
@stop
