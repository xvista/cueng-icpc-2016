<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrepCourseParticipant extends Model
{
    protected $fillable = ['name', 'surname', 'institute', 'email', 'tel'];
}
