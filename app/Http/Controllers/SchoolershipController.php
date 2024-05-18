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

    public function edit($receiver_id){
        $receiver = ScholershipReciever::findOrFail($receiver_id);
        return view('pages.edit',compact('receiver'));
    }

    public function update(Request $request){
        $reciver_id = $request->id;

        ScholershipReciever::findOrFail($reciver_id)->update([
            'reciever_name' => $request->reciever_name,
            'donor_name' => $request->donor_name,
            'monthly_payment' => $request->monthly_payment,
            'still_recieving' => $request->still_recieving,
        ]);

        return redirect(route('scholarshipRecieverList'));
    }
}
