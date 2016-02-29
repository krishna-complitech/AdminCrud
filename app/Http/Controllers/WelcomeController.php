<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Pagination\Paginator;

class WelcomeController extends Controller
{
     public function index(){          
          if(Auth::check()){
               if ( Auth::user()->isAdmin() ){        
                   return redirect('admin');
               }
               if ( Auth::user()->isUser() ){        
                   return redirect('user');
               }
          } 
        
        //if ( Auth::check()){
        //$user = Auth::user().'->';
        //    switch ($user) {
        //        case isAdmin():
        //            return redirect('admin');
        //            break;
        //        case isUser():
        //            return redirect('user');
        //            break;               
        //    }        
        //}
          $events = Event::latest()->paginate(6);
          return view('menus.home',compact('events'));
    }
    
     public function home(Request $request){          
     $events = Event::latest()->paginate(6);
        if ($request->ajax()) {
            return $request::json(view('menus.home',compact('events'))->render());
            echo "Ajax";
        } else {
          echo "No Ajax";
        }
          
          return view('menus.home',compact('events'));
     }
}