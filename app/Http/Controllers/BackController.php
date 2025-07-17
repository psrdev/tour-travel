<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeadMail;

class BackController extends Controller
{
    public function booking(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'g-recaptcha-response' => 'required',
        ]);

        // Verify reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $verify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        $response = $verify->json();

        if (!($response['success'] ?? false)) {
            return back()
                ->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])
                ->withInput();
        }

        // Continue if passed
        $validated = $request->only('name', 'email', 'phone');
        Mail::to('info@broliontourism.com')->send(new LeadMail($validated));

        return view('page.thankyou');
    }
}
