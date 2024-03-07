<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
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
        // Validate the form data
        $request->validate([
            'email_or_number' => 'required|string',
            'password' => 'required|string',
            'remember' => 'boolean',
        ]);

        // Check if the input is an email or a number
        $field = filter_var($request->email_or_number, FILTER_VALIDATE_EMAIL) ? 'email' : 'number';

        // Attempt to authenticate the user
        $credentials = [
            $field => $request->email_or_number,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Authentication passed
            Alert::success('Welcome', Auth::user()->first_name);
            return redirect('/'); // Redirect to the intended page after login
        }

        // Authentication failed
        return back()->withErrors(['email_or_number' => 'Invalid credentials'])->withInput();
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

    public function logout()
    {
        Auth::logout();

        // Redirect to the login page or any other page after logout
        Alert::success('Successfully Logout!');
        return redirect('/');
    }
}
