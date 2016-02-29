@extends('admin/layout')

@section('content')
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Images</th>
            <th>Title</th>
            <th>Message</th>            
            <th>Date</th>
            <th>Author</th>
        </tr>
            @foreach($events as $event)
         <tr>
            <td>{{ $event->id }}</td>
            <td><div class="event-image-view"><img src="{{ URL::asset('images')}}/{{ $event->images }}"></div></td>
            <td>{{ $event->title }}</td>
            <td>{{ $event->message }}</td>            
            <td>{{ $event->e_date }}</td>    
            <td>{{  Auth::user()->name }}</td>
            <td>
                <button type="button" class="event_model btn btn-info btn-lg" data-id="{{ $event->id }}" data-toggle="modal" data-target="#myModal">Edit</button>
            </td>            
        </tr>
            
        @endforeach
    </table>        
    <div class="modal fade" id="myModal" role="dialog">
    </div>
    <div style="text-align:center;">{!! $events->render() !!}</div>
    
@stop