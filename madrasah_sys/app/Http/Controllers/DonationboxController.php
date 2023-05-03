<?php

namespace App\Http\Controllers;

use App\Models\Donationbox;
use Illuminate\Http\Request;

class DonationboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donationboxes = Donationbox::latest()->paginate(5);
  
        return view('donationboxes.index',compact('donationboxes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donationboxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brunch_id' => 'required',
            'brunch_name' => 'required',
            'category' => 'required',
            'date' => 'required',
            'receiver_name' => 'required',
            'address' => 'required',
            'box_no' => 'required',
            'phone' => 'required',
            'provider_name' => 'required',
            'comment' => 'required',
            
        ]);

        $input = $request->all();

        Donationbox::create($input);
   
        return redirect()->route('donationboxes.index')
            ->with('success','Donationbox created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Donationbox $donationbox)
    {
        return view('donationboxes.show',compact('donationbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Donationbox $donationbox)
    {
        return view('donationboxes.edit',compact('donationbox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donationbox $donationbox)
    {
        $request->validate([
            'brunch_id' => 'required',
            'brunch_name' => 'required',
            'category' => 'required',
            'date' => 'required',
            'receiver_name' => 'required',
            'address' => 'required',
            'box_no' => 'required',
            'phone' => 'required',
            'provider_name' => 'required',
            'comment' => 'required',
            
        ]);

        $input = $request->all();

        $donationbox->update($input);
  
        return redirect()->route('donationboxes.index')
            ->with('success','Donationbox updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donationbox $donationbox)
    {
        $donationbox->delete();
  
        return redirect()->route('donationboxes.index')
            ->with('success','Donationbox deleted successfully');
    }
}
