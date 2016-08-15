<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'institute', 'contestant_1_id', 'contestant_2_id', 'contestant_3_id', 'coach_id'];
}
