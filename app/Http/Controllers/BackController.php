<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeadMail;

class BackController extends Controller
{
    public function booking(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);
        Mail::to('info@broliontourism.com')->send(new LeadMail($validated));

    }
}
