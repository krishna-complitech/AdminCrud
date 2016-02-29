@extends('admin/layout')

@section('content')
{!! Form::open(['url'=>'post/add']) !!}

    <div class="form-group">
        {!! Form::label('name','Name :') !!}
        {!! Form::text('name','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">    
        {!! Form::label('description','Description :') !!}
        {!! Form::textarea('message','',['class'=>'form-control']) !!}
    </div>
        
    <div class="form-group">
        {!! Form::submit('ADD POST',['class'=>'form-control btn btn-primary']) !!}
    </div>

    
{!! Form::close() !!}
@stop