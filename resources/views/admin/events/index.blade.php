@extends('admin/layout')

@section('content')
{!! Form::open(['url'=>'event/add','files' => true]) !!}
 @include('flash::message')

    <div class="form-group">
        {!! Form::label('name','Name :') !!}
        {!! Form::text('title','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">    
        {!! Form::label('description','Description :') !!}
        {!! Form::textarea('message','',['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('file','Image Upload :') !!}
        {!! Form::file('images','',['class'=>'form-control']) !!}
    </div>
        
    <div class="form-group">
        {!! Form::label('date','Date :') !!}
        {!! Form::date('e_date',null,['class'=>'form-control','id'=>'datepicker']) !!}
    </div>
        
    <div class="form-group">
        {!! Form::submit('ADD POST',['class'=>'form-control btn btn-primary']) !!}
    </div>    
{!! Form::close() !!}
<pre>
{{ print_r($errors) }}
@stop