<?php

namespace App\Http\Controllers;

use App\Models\ScholershipReciever;
use App\Models\Donor;
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
        $response['recivers'] = $this->reciver->with('donor')->get();

        return view("pages.scholarshipReceivers")->with($response);
    }



    public function delete($reciver_id)
    {
        $receiver = $this->reciver->find($reciver_id);
        $receiver->delete();

        return redirect(route('scholarshipRecieverList'));
    }

    public function edit($receiver_id)
{
    $receiver = ScholershipReciever::findOrFail($receiver_id);
    $donors = Donor::all();
    return view('pages.edit', compact('receiver', 'donors'));
}

public function update(Request $request)
{
    $receiver_id = $request->id;

    ScholershipReciever::findOrFail($receiver_id)->update([
        'reciever_name' => $request->reciever_name,
        'donor_id' => $request->donor_id,
        'monthly_payment' => $request->monthly_payment,
        'still_recieving' => $request->still_recieving,
    ]);

    return redirect(route('scholarshipRecieverList'));
}

}
