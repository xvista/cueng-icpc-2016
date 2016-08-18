<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Participant;

class Team extends Model
{
    protected $fillable = ['name', 'institute', 'contestant_1_id', 'contestant_2_id', 'contestant_3_id', 'coach_id'];
    protected $appends = ['contestants', 'coach'];

    public function getContestantsAttribute() {
        return [
            Participant::find($this->contestant_1_id),
            Participant::find($this->contestant_2_id),
            Participant::find($this->contestant_3_id),
        ];
    }

    public function getCoachAttribute() {
        return Participant::find($this->coach_id);
    }
}
