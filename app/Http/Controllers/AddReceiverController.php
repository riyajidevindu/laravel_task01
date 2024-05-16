<?php

namespace App\Http\Controllers;

use App\Models\ScholershipReciever;
use Illuminate\Http\Request;

class AddReceiverController extends Controller
{
    protected $reciver;

    public function __construct()
    {
        $this->reciver = new ScholershipReciever();
    }

    public function addScholarshipReceiver()
    {
        return view("pages.addReceiver");
    }

    public function store(Request $request)
    {
        $this->reciver->create($request->all());

        return redirect(route('scholarshipRecieverList'));
    }
}
