<?php

namespace App\Http\Controllers\officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function dashboard() {

        return view('officer.dashboard');

    }
}
