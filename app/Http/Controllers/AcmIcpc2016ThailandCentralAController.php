<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PrepCourseParticipant;
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
        array_walk_recursive($input, function(&$in) {
            $in = trim($in);
        });
        $request->merge($input);

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
                $coach_id = (Participant::where('email', $input['coach-email'])->firstOrFail())->id;
            } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
                $coach_id = null;
                return redirect('2016/thailand/central-a#registration')->with('register-error', 'อีเมลของอาจารย์ผู้ควบคุมทีมยังไม่มีในระบบ')->withInput();
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

        $error = null;
        DB::beginTransaction();
        try {
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
            DB::commit();
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            $errorCode = $e->errorInfo[1];
            $errorDescription = $e->errorInfo[2];
            // 1062 is MySQL error code for unique key duplication
            if ($errorCode == 1062) {
                if (strpos($errorDescription, 'teams_name_unique') !== false) {
                    $error = 'ชื่อทีมซ้ำ กรุณาเลือกชื่อทีมใหม่';
                } elseif (strpos($errorDescription, 'participants_email_unique') !== false) {
                    $error = 'สำหรับผู้ที่สมัครเป็นครั้งแรก โปรดกรอกอีเมลที่ยังไม่เคยลงทะเบียนเท่านั้น';
                } else {
                    $error = 'ข้อมูลบางอย่างผิดพลาด';
                }
            } else {
                $error = 'โปรดตรวจสอบข้อมูลอีกครั้งว่ากรอกครบถ้วนสมบูรณ์และถูกต้องทุกประการ';
            }
        }

        if (is_null($error) === false) {
            return redirect('2016/thailand/central-a#registration')->with('register-error', $error)->withInput();
        } else {
            return redirect('2016/thailand/central-a#registration')->with('register-success', 'การลงทะเบียนเสร็จสมบูรณ์');
        }
    }

    public function prepCourseRegister(Request $request)
    {
        $input = $request->all();
        array_walk_recursive($input, function(&$in) {
            $in = trim($in);
        });
        $request->merge($input);

        $error = null;
        DB::beginTransaction();
        try {
            PrepCourseParticipant::create($input);
            DB::commit();
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            $errorCode = $e->errorInfo[1];
            $errorDescription = $e->errorInfo[2];
            // 1062 is MySQL error code for unique key duplication
            if ($errorCode == 1062) {
                $error = 'ข้อมูลบางอย่างผิดพลาด';
            } else {
                $error = 'โปรดตรวจสอบข้อมูลอีกครั้งว่ากรอกครบถ้วนสมบูรณ์และถูกต้องทุกประการ';
            }
        }

        if (is_null($error) === false) {
            return redirect('2016/thailand/central-a#prep-course')->with('register-error', $error)->withInput();
        } else {
            return redirect('2016/thailand/central-a#prep-course')->with('register-success', 'การลงทะเบียนเสร็จสมบูรณ์');
        }
    }

    public function adminLogin()
    {
        return view('2016.login');
    }

    public function adminShow(Request $request)
    {
        $input = $request->all();
        if ($input['password'] !== env('THAILAND_CENTRAL_A_PASSWORD')) {
            return redirect('2016/thailand/central-a/admin')->with('login-error', 'YOU LIAR!');
        }

        $teams = Team::all();
        return view('2016.admin', compact('teams'));
    }
}
