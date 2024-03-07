<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'first_name' => 'required', 
        'last_name' => 'required', 
        'email' => 'required', 
        'number' => 'required',
        'checkin_date' => 'required', 
        'checkout_date' => 'required', 
        'house' => 'required', 
        ]);

        $booking = new Booking([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'number' => $request->number,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'house' => $request->house,
        ]);
        

        $booking->save();
        Alert::success('Succesfully Booked!');
        return back();

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
