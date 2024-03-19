<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoostInformationPageController extends Controller
{
    public function boostinformationpage() {
        return view ('/boostinformation');
    }
}
