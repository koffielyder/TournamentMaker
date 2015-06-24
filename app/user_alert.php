<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_alert extends Model
{
    protected $fillable = ['alert_id', 'user_id'];
}
