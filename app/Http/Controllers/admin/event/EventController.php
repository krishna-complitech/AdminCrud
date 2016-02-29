<?php

namespace App\Http\Controllers\admin\Event;

use Illuminate\Http\Request;

use Session;
use Flash;
use App\Http\Requests;
use App\Fileentry;
use App\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Pagination\Paginator;

class EventController extends Controller
{
    public function __construct() {		
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.events.index');
    }
    
	public function view()
    {
        $events = Event::latest()->paginate(6);
        return view('admin.events.view',compact('events'));
    }
	
    public function store(EventRequest $request)
    {
        //$imageName = $request->file('images')->getClientOriginalExtension();
		//$imageName = $request->file('images')->getClientOriginalName();
		//$request->file('images')->move( base_path() . '/public/images/', $imageName);
		//echo $request['images'] = $request->file('images')->getClientOriginalName();
		//echo "<pre>";
		//print_r($request->all());
		//exit;
		//$event = Event::create($request->all());
		//Flash::success($request['title'].' is save !!!');
		//return redirect('event');
		
		$events = new Event();
		$events->images = $request->file('images')->getClientOriginalName();
		$imageName = $request->file('images')->getClientOriginalName();
		$request->file('images')->move( base_path() . '/public/images/', $imageName);
		$events->title = $request->title;
		$events->message = $request->message;
		$events->e_date = $request->e_date;
		$events->save();
		Flash::success($request['title'].' is save !!!');
		return redirect('event');
    }
	
	public function update(Request $request, $id) {
        $event = Event::find($id);
		if( $request->hasFile('images') ){
			$imageName = $request->file('images')->getClientOriginalName();
			$request->file('images')->move( base_path() . '/public/images/', $imageName);
			$event->images = $request->file('images')->getClientOriginalName();
		} 
		$event->title = $request->title;
		$event->message = $request->message;
		$event->e_date = $request->e_date;
        $event->save();
        return redirect('event/view');		
    }
    
    public function edit($id) {		
		$events = Event::find($id);		
		return view('admin.events.edit',compact('events'));	
    }

   
}
