<?php

namespace App\Http\Controllers\admin\braintree;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BraintreeController extends Controller
{
    public function index(){
        return view('admin.braintree.index');
    }
    
    public function store(){
      return "Store";
    }
}
