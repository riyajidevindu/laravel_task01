<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddReceiverController extends Controller
{
    public function addScholarshipReceiver()
    {
        return view("pages.addReceiver");
    }
}
