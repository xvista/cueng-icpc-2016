<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Participant;
use App\Team;
use DB;

class AcmIcpc2016ThailandCentralAController extends Controller
{
    public function index()
    {
        return view('2016.central-a');
    }

    public function register(Request $request)
    {
        $input = $request->all();
        $contestants[] = [
            'type' => 'contestant',
            'title_th' => $input['member1-title-th'],
            'name_th' => $input['member1-name-th'],
            'surname_th' => $input['member1-surname-th'],
            'title_en' => $input['member1-title-en'],
            'name_en' => $input['member1-name-en'],
            'surname_en' => $input['member1-surname-en'],
            'email' => $input['member1-email'],
            'tel' => $input['member1-tel'],
            'shirt_size' => $input['member1-shirt'],
            'food_limitation' => $input['member1-food'],
            'prep_course' => (isset($input['member1-attend-prep-course']) && $input['member1-attend-prep-course'] === 'attend'),
        ];
        $contestants[] = [
            'type' => 'contestant',
            'title_th' => $input['member2-title-th'],
            'name_th' => $input['member2-name-th'],
            'surname_th' => $input['member2-surname-th'],
            'title_en' => $input['member2-title-en'],
            'name_en' => $input['member2-name-en'],
            'surname_en' => $input['member2-surname-en'],
            'email' => $input['member2-email'],
            'tel' => $input['member2-tel'],
            'shirt_size' => $input['member2-shirt'],
            'food_limitation' => $input['member2-food'],
            'prep_course' => (isset($input['member2-attend-prep-course']) && $input['member2-attend-prep-course'] === 'attend'),
        ];
        $contestants[] = [
            'type' => 'contestant',
            'title_th' => $input['member3-title-th'],
            'name_th' => $input['member3-name-th'],
            'surname_th' => $input['member3-surname-th'],
            'title_en' => $input['member3-title-en'],
            'name_en' => $input['member3-name-en'],
            'surname_en' => $input['member3-surname-en'],
            'email' => $input['member3-email'],
            'tel' => $input['member3-tel'],
            'shirt_size' => $input['member3-shirt'],
            'food_limitation' => $input['member3-food'],
            'prep_course' => (isset($input['member3-attend-prep-course']) && $input['member3-attend-prep-course'] === 'attend'),
        ];
        $coach_id = null;
        $coach = null;
        if (isset($input['coach-registered']) && $input['coach-registered'] === 'registered') {
            try {
                $coach_id = Participant::where('email', $input['coach-email'])->firstOrFail();
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                $coach_id = null;
                return redirect('2016/thailand/central-a#registration')->with('register-error', 'อีเมลของอาจารย์ผู้ควบคุมทีมยังไม่มีในระบบ');
            }
        } else {
            $coach = [
                'type' => 'coach',
                'title_th' => $input['coach-title-th'],
                'name_th' => $input['coach-name-th'],
                'surname_th' => $input['coach-surname-th'],
                'title_en' => $input['coach-title-en'],
                'name_en' => $input['coach-name-en'],
                'surname_en' => $input['coach-surname-en'],
                'email' => $input['coach-email'],
                'tel' => $input['coach-tel'],
                'shirt_size' => $input['coach-shirt'],
                'food_limitation' => $input['coach-food'],
                'prep_course' => false,
            ];
        }

        DB::transaction(function() use ($contestants, $coach, $input, $coach_id) {
            foreach ($contestants as $contestant) {
                $contestant_ids[] = (Participant::create($contestant))->id;
            }
            if (!(isset($input['coach-registered']) && $input['coach-registered'] === 'registered')) {
                $coach_id = (Participant::create($coach))->id;
            }
            $team = [
                'name' => $input['team-name'],
                'institute' => $input['institute'],
                'contestant_1_id' => $contestant_ids[0],
                'contestant_2_id' => $contestant_ids[1],
                'contestant_3_id' => $contestant_ids[2],
                'coach_id' => $coach_id,
            ];
            Team::create($team);
        });

        return redirect('2016/thailand/central-a#registration')->with('register-success', 'การลงทะเบียนเสร็จสมบูรณ์');
    }
}
