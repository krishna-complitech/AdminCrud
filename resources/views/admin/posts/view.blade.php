@extends('admin/layout')

@section('content')
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Message</th>
            <th>Author</th>                
            <th></th>
        </tr>
            @foreach($posts as $post)
         <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->message }}</td>
            <td>{{  Auth::user()->name }}</td>
            <td>
                <button type="button" class="btn btn-info btn-lg" data-id="{{ $post->id }}" data-toggle="modal" data-target="#myModal{{ $post->id }}">Edit</button>
            </td>            
        </tr>
            
            <!-- Modal -->
            <div class="modal fade" id="myModal{{ $post->id }}" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1>Edit Post</h1>
                    </div>
                    
                    <div class="modal-body">
                        <h5>{{ $post->id }}</h5>
                     
                        {!! Form::model($post,(['action'=>['post\PostController@update',$post->id],"method"=>"PATCH"])) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name :') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>
                    
                            <div class="form-group">    
                                {!! Form::label('description','Description :') !!}
                                {!! Form::textarea('message',null,['class'=>'form-control']) !!}
                            </div>
                            
                            <div class="form-group">
                                {!! Form::submit('UPDATE POST',['class'=>'form-control btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>  
        @endforeach
    </table>
    <div style="text-align:center;">{!! $posts->render() !!}</div>
    
    
@stop