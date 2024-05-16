<?php

namespace App\Http\Controllers;

use App\Models\ScholershipReciever;
use Illuminate\Http\Request;

class SchoolershipController extends Controller
{

    protected $reciver;

    public function __construct()
    {
        $this->reciver = new ScholershipReciever();
    }

    public function scholarshipReceivers()
    {
        $response['recivers'] = $this->reciver->all();

        return view("pages.scholarshipReceivers")->with($response);
    }

    public function delete($reciver_id)
    {
        $receiver = $this->reciver->find($reciver_id);
        $receiver->delete();

        return redirect(route('scholarshipRecieverList'));
    }
}
