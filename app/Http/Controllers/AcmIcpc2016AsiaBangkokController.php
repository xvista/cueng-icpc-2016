<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AcmIcpc2016AsiaBangkokController extends Controller
{
    public function index()
    {
        return view('2016.asia-bangkok.index');
    }

    public function scoreboard()
    {
        return view('2016.asia-bangkok.scoreboard');
    }
}
