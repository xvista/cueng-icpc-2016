<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['type', 'title_th', 'name_th', 'surname_th', 'title_en', 'name_en', 'surname_en', 'email', 'tel', 'shirt_size', 'food_limitation', 'prep_course'];
}
