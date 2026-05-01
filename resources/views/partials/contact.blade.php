            <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto">

                    <!-- Section Header -->
                    <div class="text-center mb-16">
                        <!-- Badge -->
                        <span
                            class="inline-flex items-center justify-center rounded-md border border-black bg-black px-3 py-1 text-xs font-medium text-white mb-4">
                            Contact Us
                        </span>

                        <!-- Heading -->
                        <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                            Let's Start a Conversation
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Have a project in mind? We'd love to hear from you. Fill out the form and we'll get back to
                            you within 24 hours.
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">

                        <!-- Contact Form -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">
                            <h3 class="text-2xl font-semibold mb-2">Send Us a Message</h3>
                            <p class="text-gray-600 text-sm mb-8">
                                Fill out the form below and we'll be in touch shortly.
                            </p>

                            @if (session('success'))
                                <div class="mb-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                                    <p class="font-semibold mb-2">Please fix the following errors:</p>
                                    <ul class="list-disc pl-5 space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="space-y-6" method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition"
                                            required>
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="john@example.com"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition"
                                            required>
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+91 98765 43210"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition">
                                        @error('phone')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Company</label>
                                        <input type="text" name="company" value="{{ old('company') }}" placeholder="Your Company"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black transition">
                                        @error('company')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                                    <textarea rows="5" name="message" placeholder="Tell us about your project or requirements..."
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-black focus:ring-1 focus:ring-black resize-y transition"
                                        required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="w-full bg-black hover:bg-gray-700 text-white font-semibold py-3 rounded-lg transition flex items-center justify-center gap-2">
                                    Send Message
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-8">
                            <div>
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Contact Information</h3>
                                <p class="text-gray-600">Prefer to reach out directly? Here's how you can get in touch
                                    with our team.</p>
                            </div>

                            <!-- Email Card -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-6 flex items-start gap-4">
                                <div
                                    class="h-12 w-12 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-black">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Email</h4>
                                    <p class="text-gray-600">info@technologysolutions.in</p>
                                    <p class="text-gray-600">support@technologysolutions.in</p>
                                </div>
                            </div>

                            <!-- Phone Card -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-6 flex items-start gap-4">
                                <div
                                    class="h-12 w-12 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-black">
                                        <path
                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Phone</h4>
                                    <p class="text-gray-600">+91 98765 43210</p>
                                    <p class="text-gray-600">+91 12345 67890</p>
                                </div>
                            </div>

                            <!-- Address Card -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-6 flex items-start gap-4">
                                <div
                                    class="h-12 w-12 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-black">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Address</h4>
                                    <p class="text-gray-600">
                                        Tech Park, Sector 5<br>
                                        Bengaluru, Karnataka 560001<br>
                                        India
                                    </p>
                                </div>
                            </div>

                            <!-- Immediate Assistance -->
                            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6">
                                <h4 class="font-semibold mb-2 text-gray-900">Need Immediate Assistance?</h4>
                                <p class="text-sm text-gray-600 mb-4">
                                    Our support team is available Monday to Friday, 9 AM to 6 PM IST.
                                </p>
                                <a href="tel:+919876543210"
                                    class="inline-flex items-center justify-center gap-2 w-full bg-black hover:bg-black text-white font-medium py-3 rounded-lg transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                        </path>
                                    </svg>
                                    Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
