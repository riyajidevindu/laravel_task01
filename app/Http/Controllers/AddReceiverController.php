<?php

namespace App\Http\Controllers;

use App\Models\ScholershipReciever;
use App\Models\Donor;
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
        $donors = Donor::all();

        return view('pages.addReceiver', compact('donors'));
    }

    public function store(Request $request)
    {
        $this->reciver->create($request->all());

        return redirect(route('scholarshipRecieverList'));
    }
}
