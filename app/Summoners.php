<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summoners extends Model
{
    protected $fillable = ['user_id', 'name', 'summoner_id', 'lane'];
}
