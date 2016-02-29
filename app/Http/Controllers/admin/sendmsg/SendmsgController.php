<?php

namespace App\Http\Controllers\admin\sendmsg;

use Illuminate\Http\Request;
use Flash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sendmsg;

class SendmsgController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index() {
        //$twilio->message('+918866134401', 'Pink Elephants and Happy Rainbows');
        return view('admin.sendmsg.index',compact('twilio'));
    }
    
    public function store(Request $request) {
        $account_id = "ACf83931075e897ac7bcf266639f0309a9";
        $token_id = "44881477a1d46187b32a7d2c55d79e63";
        $from = "+16572014282";
        $sendmsg = new Sendmsg();
        $sendmsg->message = $request->message;
        $sendmsg->to_phoneno = $request->to_phoneno;
        $sendmsg->from_phoneno = $from;
        $twilio = new \Aloha\Twilio\Twilio( $account_id,$token_id, $from );
        $twilio->message( $sendmsg->to_phoneno, $sendmsg->message );
        $sendmsg->save();
        Flash::success('Message Send Successfully !!!');
        return view('admin.sendmsg.index',compact('twilio'));
    }
}
