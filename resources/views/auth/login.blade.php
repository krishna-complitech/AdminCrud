@extends('auth/layout')

<a href="{{ url('/') }}"><button>HOME</button></a>
@section('content')
    <h1>Login</h1>
<form method="POST" action="">
{!! csrf_field() !!}
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <div>
        Password
        <input type="password" name="password" id="password">
    </div>
   <!-- <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>-->
    <div>
        <button type="submit">Login</button>
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
