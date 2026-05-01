<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'min:7', 'max:20'],
            'company' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your full name.',
            'name.min' => 'Your name must be at least 2 characters long.',
            'name.max' => 'Your name may not be greater than 120 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email address may not be greater than 255 characters.',
            'phone.min' => 'Your phone number must be at least 7 characters long.',
            'phone.max' => 'Your phone number may not be greater than 20 characters.',
            'company.max' => 'Your company name may not be greater than 120 characters.',
            'message.required' => 'Please enter your message.',
            'message.min' => 'Your message must be at least 10 characters long.',
            'message.max' => 'Your message may not be greater than 5000 characters.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'full name',
            'email' => 'email address',
            'phone' => 'phone number',
            'company' => 'company name',
            'message' => 'message',
        ];
    }

    protected function getRedirectUrl(): string
    {
        return url('/').'#contact';
    }
}
