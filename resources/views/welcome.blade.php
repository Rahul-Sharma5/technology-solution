<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Solutions</title>
    <meta name="msvalidate.01" content="2B1B7D67A1311F7BFFAAD7C21AEE7366" />

    <link rel="stylesheet" href="{{ asset('styles.css') }}">


    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col bg-background">
        <!---Navigation Bar--->
        @include('partials.nav')

        <div class="flex-1">
            <section class="relative py-20 md:py-32 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto text-center">

                    <!-- Badge -->
                    <span
                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                        Trusted by 500+ Businesses Worldwide
                    </span>

                    <!-- Main Heading -->
                    <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6 text-gray-900">
                        Transform Your Business with
                        <span class="block text-gray-900 mt-2">Innovative Technology Solutions</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                        We deliver cutting-edge software development, cloud solutions, and digital transformation
                        services that help businesses thrive in the digital age.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#contact"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-black px-8 py-3 text-lg font-medium text-white hover:bg-black transition-all shadow">
                            Start Your Project
                            <i data-lucide="arrow-right" class="h-5 w-5"></i>
                        </a>

                        <a href="#services"
                            class="inline-flex items-center justify-center gap-2 rounded-md border border-gray-300 px-8 py-3 text-lg font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-all">
                            Explore Services
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-gray-900">500+</div>
                            <div class="text-sm text-gray-500 mt-1">Projects Delivered</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-gray-900">98%</div>
                            <div class="text-sm text-gray-500 mt-1">Client Satisfaction</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-gray-900">10+</div>
                            <div class="text-sm text-gray-500 mt-1">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-gray-900">50+</div>
                            <div class="text-sm text-gray-500 mt-1">Expert Developers</div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="services" class="py-20 px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto">

                    <!-- Section Header -->
                    <div class="text-center mb-16">
                        <!-- Badge -->
                        <span
                            class="inline-flex items-center justify-center rounded-md border border-black bg-black px-3 py-1 text-xs font-medium text-white mb-4">
                            Our Services
                        </span>

                        <!-- Heading -->
                        <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                            Comprehensive Technology Solutions
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            From strategy to implementation, we provide end-to-end technology services tailored to your
                            business needs.
                        </p>
                    </div>

                    <!-- Services Grid -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                        <!-- Service 1: Custom Software Development -->
                        <a href="{{ url('/custom-software-development') }}" class="block group">
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-6 h-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-black transition-colors">
                                        <i data-lucide="code-xml"
                                            class="h-6 w-6 text-gray-600 group-hover:text-white"></i>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-xl text-gray-900">Custom Software Development</h3>
                                        <i data-lucide="external-link"
                                            class="h-4 w-4 text-gray-400 group-hover:text-black opacity-0 group-hover:opacity-100 transition-all"></i>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Tailored software solutions designed to meet your unique business requirements
                                        and drive digital transformation.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <ul class="space-y-2 text-sm">
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Web Applications
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Mobile Apps
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Enterprise Solutions
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            API Development
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <!-- Service 2: Cloud Solutions -->
                        <a href="{{ url('/cloud-solutions') }}" class="block group">
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-6 h-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-black transition-colors">
                                        <i data-lucide="cloud" class="h-6 w-6 text-gray-600 group-hover:text-white"></i>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-xl text-gray-900">Cloud Solutions</h3>
                                        <i data-lucide="external-link"
                                            class="h-4 w-4 text-gray-400 group-hover:text-black opacity-0 group-hover:opacity-100 transition-all"></i>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Scalable and secure cloud infrastructure to modernize your operations and reduce
                                        costs.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <ul class="space-y-2 text-sm">
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Cloud Migration
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            AWS/Azure/GCP
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            DevOps
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Serverless Architecture
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <!-- Service 3: Data Analytics & AI -->
                        <a href="{{ url('/data-analytics-ai') }}" class="block group">
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-6 h-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-black transition-colors">
                                        <i data-lucide="database"
                                            class="h-6 w-6 text-gray-600 group-hover:text-white"></i>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-xl text-gray-900">Data Analytics & AI</h3>
                                        <i data-lucide="external-link"
                                            class="h-4 w-4 text-gray-400 group-hover:text-black opacity-0 group-hover:opacity-100 transition-all"></i>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Transform your data into actionable insights with advanced analytics and
                                        artificial intelligence.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <ul class="space-y-2 text-sm">
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Business Intelligence
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Machine Learning
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Data Warehousing
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Predictive Analytics
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <!-- Service 4: Cybersecurity -->
                        <a href="{{ url('/cybersecurity') }}" class="block group">
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-6 h-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-black transition-colors">
                                        <i data-lucide="shield"
                                            class="h-6 w-6 text-gray-600 group-hover:text-white"></i>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-xl text-gray-900">Cybersecurity</h3>
                                        <i data-lucide="external-link"
                                            class="h-4 w-4 text-gray-400 group-hover:text-black opacity-0 group-hover:opacity-100 transition-all"></i>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Protect your business with comprehensive security solutions and compliance
                                        frameworks.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <ul class="space-y-2 text-sm">
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Security Audits
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Penetration Testing
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Compliance
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Security Training
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <!-- Service 5: Digital Transformation -->
                        <a href="{{ url('/digital-transformation') }}" class="block group">
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-6 h-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-black transition-colors">
                                        <i data-lucide="smartphone"
                                            class="h-6 w-6 text-gray-600 group-hover:text-white"></i>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-xl text-gray-900">Digital Transformation</h3>
                                        <i data-lucide="external-link"
                                            class="h-4 w-4 text-gray-400 group-hover:text-black opacity-0 group-hover:opacity-100 transition-all"></i>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Modernize your business processes with cutting-edge digital solutions and
                                        automation.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <ul class="space-y-2 text-sm">
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Process Automation
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Digital Workflows
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Integration Services
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Legacy Modernization
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <!-- Service 6: Web Development -->
                        <a href="{{ url('/web-development') }}" class="block group">
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-6 h-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-black transition-colors">
                                        <i data-lucide="globe"
                                            class="h-6 w-6 text-gray-600 group-hover:text-white"></i>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-semibold text-xl text-gray-900">Web Development</h3>
                                        <i data-lucide="external-link"
                                            class="h-4 w-4 text-gray-400 group-hover:text-black opacity-0 group-hover:opacity-100 transition-all"></i>
                                    </div>
                                    <p class="text-gray-600 text-sm mt-2">
                                        Stunning, responsive websites and web applications that engage users and convert
                                        visitors.
                                    </p>
                                </div>

                                <div class="mt-auto">
                                    <ul class="space-y-2 text-sm">
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            Responsive Design
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            E-commerce
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            CMS Solutions
                                        </li>
                                        <li class="flex items-center text-gray-600">
                                            <i data-lucide="circle-check" class="h-4 w-4 text-gray-900 mr-2"></i>
                                            SEO Optimization
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </section>

            <section id="why-us" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                <div class="container mx-auto">

                    <!-- Section Header -->
                    <div class="text-center mb-16">
                        <!-- Badge -->
                        <span
                            class="inline-flex items-center justify-center rounded-md border border-black bg-black px-3 py-1 text-xs font-medium text-white mb-4">
                            Why Choose Us
                        </span>

                        <!-- Heading -->
                        <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                            Partner with Industry Leaders
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Our commitment to excellence and innovation sets us apart from the competition.
                        </p>
                    </div>

                    <!-- Why Us Grid -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                        <!-- Card 1: Expert Team -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 text-center hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                <i data-lucide="users" class="h-8 w-8 text-gray-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-900 mb-3">Expert Team</h3>
                            <p class="text-gray-600 text-sm">
                                Our certified professionals bring years of industry experience across diverse technology
                                stacks.
                            </p>
                        </div>

                        <!-- Card 2: Client-Focused Approach -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 text-center hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                <i data-lucide="target" class="h-8 w-8 text-gray-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-900 mb-3">Client-Focused Approach</h3>
                            <p class="text-gray-600 text-sm">
                                We prioritize your business goals and deliver solutions that drive measurable results.
                            </p>
                        </div>

                        <!-- Card 3: Quality Assurance -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 text-center hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                <i data-lucide="award" class="h-8 w-8 text-gray-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-900 mb-3">Quality Assurance</h3>
                            <p class="text-gray-600 text-sm">
                                Rigorous testing and quality control ensure reliable, bug-free deployments.
                            </p>
                        </div>

                        <!-- Card 4: Scalable Solutions -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 text-center hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                <i data-lucide="chart-column"
                                    class="h-8 w-8 text-gray-600 group-hover:text-white"></i>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-900 mb-3">Scalable Solutions</h3>
                            <p class="text-gray-600 text-sm">
                                Future-proof solutions that grow with your business and adapt to changing needs.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <section id="testimonials" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
                <div class="container mx-auto">

                    <!-- Section Header -->
                    <div class="text-center mb-16">
                        <!-- Badge -->
                        <span
                            class="inline-flex items-center justify-center rounded-md border border-black bg-black px-3 py-1 text-xs font-medium text-white mb-4">
                            Testimonials
                        </span>

                        <!-- Heading -->
                        <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                            What Our Clients Say
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Don't just take our word for it. Here's what our clients have to say about working with us.
                        </p>
                    </div>

                    <!-- Testimonials Grid -->
                    <div class="grid md:grid-cols-3 gap-6">

                        <!-- Testimonial 1 -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-lg transition-all">
                            <div class="flex items-center gap-1 mb-4">
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                            </div>
                            <p class="text-gray-600 text-base leading-relaxed mb-6">
                                "Technology Solutions transformed our business with their innovative software solutions.
                                Their team delivered beyond expectations."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                    <span class="text-sm font-semibold text-gray-600">RK</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-sm text-gray-900">Rajesh Kumar</div>
                                    <div class="text-xs text-gray-500">CEO, TechStartup Inc</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-lg transition-all">
                            <div class="flex items-center gap-1 mb-4">
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                            </div>
                            <p class="text-gray-600 text-base leading-relaxed mb-6">
                                "Professional, reliable, and incredibly skilled. They helped us modernize our entire
                                technology infrastructure."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                    <span class="text-sm font-semibold text-gray-600">PS</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-sm text-gray-900">Priya Sharma</div>
                                    <div class="text-xs text-gray-500">CTO, FinanceHub</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div
                            class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-lg transition-all">
                            <div class="flex items-center gap-1 mb-4">
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                                <span class="text-yellow-500 text-xl">★</span>
                            </div>
                            <p class="text-gray-600 text-base leading-relaxed mb-6">
                                "The best technology partner we have worked with. Their cloud migration was seamless and
                                efficient."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-gray-100 flex items-center justify-center">
                                    <span class="text-sm font-semibold text-gray-600">AP</span>
                                </div>
                                <div>
                                    <div class="font-semibold text-sm text-gray-900">Amit Patel</div>
                                    <div class="text-xs text-gray-500">Director, Manufacturing Co</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-900 text-white">
                <div class="container mx-auto text-center">

                    <!-- Heading -->
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">
                        Ready to Transform Your Business?
                    </h2>

                    <!-- Description -->
                    <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-8">
                        Let's discuss how our technology solutions can help you achieve your business goals.
                    </p>

                    <!-- CTA Button -->
                    <a href="#contact"
                        class="inline-flex items-center justify-center gap-2 rounded-md bg-white text-black hover:bg-gray-100 font-medium text-lg px-8 py-3 transition-all shadow">
                        Schedule a Free Consultation
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-arrow-right h-5 w-5" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>

                </div>
            </section>

        @include('partials.contact')
        </div>

        @include('partials.footer')
    </div>

    <script>
        lucide.createIcons();
    </script>

</body>

</html>
