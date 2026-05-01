<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactMessageController extends Controller
{
    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        ContactMessage::create([
            'name' => $request->string('name')->toString(),
            'email' => $request->string('email')->toString(),
            'phone' => $request->filled('phone') ? $request->string('phone')->toString() : null,
            'company' => $request->filled('company') ? $request->string('company')->toString() : null,
            'message' => $request->string('message')->toString(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect(url('/').'#contact')
            ->with('success', 'Thank you. Your message has been sent successfully. We will get back to you shortly.');
    }
}
