<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function handleForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        // Flash message ke saath redirect
        return redirect('/contact')->with('success', 'Your message has been submitted successfully!');
    }
}