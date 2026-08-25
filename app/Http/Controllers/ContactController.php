<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to(env('MAIL_TO_ADDRESS', 'dimasdawahyu06@gmail.com'))
            ->send(new ContactFormMail($validated));

        return back()->with('success', 'Pesan berhasil dikirim! Terima kasih sudah menghubungi saya.');
    }
}