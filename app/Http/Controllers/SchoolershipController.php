<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolershipController extends Controller
{
    public function scholarshipReceivers()
    {
        return view("pages.scholarshipReceivers");
    }
}
