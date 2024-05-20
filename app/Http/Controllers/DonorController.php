<?php

namespace App\Http\Controllers;
use App\Models\Donor;

use Illuminate\Http\Request;

class DonorController extends Controller
{

    protected $donor;

    public function __construct(){
        $this->donor = new Donor();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['donors'] = $this->donor->all();

        return view("pages.donor.donorsList")->with($response);
    }

    public function create()
    {
        return view("pages.donor.adddonor");
    }


    public function store(Request $request)
    {
        $this->donor->create($request->all());
        return redirect(route('donor.list'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy($donor_id)
    {
        $donor = $this->donor->find($donor_id);
        $donor->delete();
        return redirect(route('donor.list'));
    }
}
