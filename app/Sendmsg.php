<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendmsg extends Model
{
    protected $table = "sendmsgs";
    protected $fillable = ['to_phoneno', 'from_phoneno', 'message'];
}
