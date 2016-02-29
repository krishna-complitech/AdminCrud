<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h1>Edit Post</h1>
        </div>
    
        <div class="modal-body">
            <h5>{{ Id }}</h5>         
            {!! Form::model($event,(['action'=>['admin\event\EventController@update',$event->id],"method"=>"PATCH","files" => true])) !!}
                <div class="form-group">
                    {!! Form::label('title','Title :') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>
                    
                <div class="form-group">    
                    {!! Form::label('message','Description :') !!}
                    {!! Form::textarea('message',null,['class'=>'form-control']) !!}
                </div>
                {!! Form::label('images','Title :') !!}
                    @if(empty($event->images))
                    <div class="form-group">                                    
                        {!! Form::file('images',null,['class'=>'form-control']) !!}
                    </div>                            
                    @else
                        <div class="event-image">
                            <img src="{{ URL::asset('images/'.$event->images) }}"  />
                        </div>
                        {!! Form::file('images',null,['class'=>'form-control']) !!}
                        </div>                            
                    @endif                                
                <div class="form-group">
                    {!! Form::label('date','Date :') !!}
                    {!! Form::date('e_date',null,['class'=>'form-control','id'=>'datepicker']) !!}
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
    </div>
</div>