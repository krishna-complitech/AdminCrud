@extends('admin.layout')

@section('content')    
    
    {!! Form::open(['url'=>'sendmsg/store']) !!}
    @include('flash::message')
    
        <div class="form-group">
            {!! Form::label('to','To :' ) !!}
            {!! Form::text('to_phoneno','',['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('message','Message :' ) !!}
            {!! Form::textarea('message','',['class' => 'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::submit('Send Message',['class'=>'form-control btn btn-primary']) !!}
        </div>    
    {!! Form::close() !!}
@stop