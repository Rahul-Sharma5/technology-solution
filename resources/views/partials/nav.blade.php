        <header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur-md">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">

                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="flex items-center gap-2">
                        <div class="brand-mark h-8 w-8 rounded-lg bg-gray-900 flex items-center justify-center">
                            <i data-lucide="code-xml" class="h-5 w-5 text-white"></i>
                        </div>
                        <span class="brand-title text-xl font-bold text-gray-900">Technology Solutions</span>
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center gap-6">
                        <a href="#services"
                            class="text-sm font-medium text-gray-900 hover:text-gray-600 transition-colors">Services</a>
                        <a href="#why-us"
                            class="text-sm font-medium text-gray-900 hover:text-gray-600 transition-colors">Why Us</a>
                        <a href="#testimonials"
                            class="text-sm font-medium text-gray-900 hover:text-gray-600 transition-colors">Testimonials</a>
                        <a href="#contact"
                            class="text-sm font-medium text-gray-900 hover:text-gray-600 transition-colors">Contact</a>
                    </nav>

                    <!-- CTA Button -->
                    <a href="#contact"
                        class="cta-button inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium bg-black text-white hover:bg-black transition-all shadow h-9 px-5 py-2">
                        Get Started
                    </a>

                    <!-- Mobile Menu Button (placeholder) -->
                    <button class="md:hidden text-gray-600 hover:text-gray-900">
                        <i data-lucide="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </div>
        </header>
