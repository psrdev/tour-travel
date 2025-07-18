<?php

namespace App\Http\Controllers;

use App\Mail\LeadMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class BackController extends Controller
{
    public function booking(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'g-recaptcha-response' => 'required',
        ]);

        // Verify CAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $validated['g-recaptcha-response'],
            'remoteip' => $request->ip(),
        ]);

        if (!$response->json('success')) {
            return back()
                ->withErrors(['captcha' => 'reCAPTCHA verification failed.'])
                ->withInput();
        }

        Mail::to('info@broliontourism.com')->send(new LeadMail($validated));

        return view('page.thankyou');
    }

}
