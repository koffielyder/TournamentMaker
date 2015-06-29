<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deleted_teams extends Model
{
    protected $fillable = ['id', 'captain_id', 'name'];
}
