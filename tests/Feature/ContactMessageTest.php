<?php

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('contact form stores a message in the database', function () {
    $response = $this->post(route('contact.store'), [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'phone' => '+91 98765 43210',
        'company' => 'Acme Pvt Ltd',
        'message' => 'I would like to discuss a new software project.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('contact_messages', [
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'phone' => '+91 98765 43210',
        'company' => 'Acme Pvt Ltd',
    ]);
});

test('contact form shows validation errors for invalid input', function () {
    $response = $this->post(route('contact.store'), [
        'name' => '',
        'email' => 'invalid-email',
        'message' => 'short',
    ]);

    $response->assertSessionHasErrors([
        'name',
        'email',
        'message',
    ]);

    $this->assertDatabaseCount('contact_messages', 0);
});
