<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Development</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col bg-background">
        <!---Navigation Bar--->
        @include('partials.nav')

        <div class="min-h-screen flex flex-col bg-background">
            <main class="flex-1">

                <section class="relative py-20 md:py-32 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">
                        <div class="max-w-4xl">

                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-gray-900 text-white [a&]:hover:bg-primary/90 mb-4">
                                Web Development
                            </span>

                            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">
                                Build Stunning Websites
                                <span class="block text-primary mt-2">That Convert Visitors</span>
                            </h1>

                            <p class="text-xl text-muted-foreground mb-8">
                                Modern, responsive, and high-performance websites that showcase your brand and drive
                                business growth. From simple landing pages to complex web applications.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <!-- Primary Button -->
                                <a data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-gray-900 text-white shadow-xs hover:bg-primary/90 h-10 rounded-md has-[>svg]:px-4 text-lg px-8"
                                    href="/#contact">

                                    Start Your Website

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right ml-2 h-5 w-5" aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>

                                <!-- Secondary Button -->
                                <a data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md has-[>svg]:px-4 text-lg px-8"
                                    href="/#services">

                                    View All Services
                                </a>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">

                            <!-- Left Side - Text Content -->
                            <div>
                                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
                                    Your Digital Presence Matters
                                </h2>
                                <p class="text-lg text-gray-900 mb-6">
                                    In today's digital age, your website is often the first impression customers have of
                                    your business.
                                    It needs to be stunning, fast, and functional.
                                </p>
                                <p class="text-lg text-gray-900 mb-8">
                                    We create websites that not only look beautiful but also deliver exceptional user
                                    experiences,
                                    drive conversions, and help your business grow.
                                </p>

                                <!-- Feature List -->
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0 mt-1" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold text-gray-900">Mobile Responsive</div>
                                            <div class="text-sm text-gray-500">Works on all devices</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0 mt-1" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold text-gray-900">SEO Optimized</div>
                                            <div class="text-sm text-gray-500">Rank higher on search</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0 mt-1" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold text-gray-900">Fast Loading</div>
                                            <div class="text-sm text-gray-500">Sub-second load times</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0 mt-1" aria-hidden="true">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold text-gray-900">Secure</div>
                                            <div class="text-sm text-gray-500">HTTPS & data protection</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side - Stats Cards -->
                            <div class="grid grid-cols-2 gap-4">

                                <!-- Stat 1 -->
                                <div class="bg-gray-100 rounded-2xl border border-gray-300 p-6 text-center">
                                    <div class="text-4xl font-bold text-gray-900 mb-1">&lt;1s</div>
                                    <div class="text-sm text-gray-500">Load Time</div>
                                </div>

                                <!-- Stat 2 -->
                                <div class="bg-gray-100 rounded-2xl border border-gray-300 p-6 text-center">
                                    <div class="text-4xl font-bold text-gray-900 mb-1">100%</div>
                                    <div class="text-sm text-gray-500">Responsive</div>
                                </div>

                                <!-- Stat 3 -->
                                <div class="bg-gray-100 rounded-2xl border border-gray-300 p-6 text-center">
                                    <div class="text-4xl font-bold text-gray-900 mb-1">500+</div>
                                    <div class="text-sm text-gray-500">Websites Built</div>
                                </div>

                                <!-- Stat 4 -->
                                <div class="bg-gray-100 rounded-2xl border border-gray-300 p-6 text-center">
                                    <div class="text-4xl font-bold text-gray-900 mb-1">98%</div>
                                    <div class="text-sm text-gray-500">Client Satisfaction</div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Our Services
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Web Development Solutions
                            </h2>

                            <!-- Description -->
                            <p class="text-xl text-gray-900 max-w-2xl mx-auto">
                                From simple websites to complex web applications, we cover all your needs.
                            </p>
                        </div>

                        <!-- Services Grid -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- Card 1: Responsive Websites -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-gray-900 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 group-hover:text-white">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                            <path d="M2 12h20"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl text-gray-900">Responsive Websites</h3>
                                    <p class="text-gray-900 text-sm mt-2">
                                        Beautiful, mobile-first websites that look great on all devices
                                    </p>
                                </div>

                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Mobile-First Design
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Cross-Browser Compatible
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Fast Loading
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        SEO Optimized
                                    </li>
                                </ul>
                            </div>

                            <!-- Card 2: E-commerce Solutions -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-gray-900 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 group-hover:text-white">
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            <path d="M3.103 6.034h17.794"></path>
                                            <path
                                                d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl text-gray-900">E-commerce Solutions</h3>
                                    <p class="text-gray-900 text-sm mt-2">
                                        Powerful online stores with secure payments and inventory management
                                    </p>
                                </div>

                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Secure Payments
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Inventory Management
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Order Tracking
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Multi-Vendor Support
                                    </li>
                                </ul>
                            </div>

                            <!-- Card 3: CMS Integration -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-gray-900 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 group-hover:text-white">
                                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                            <path d="M3 9h18"></path>
                                            <path d="M9 21V9"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl text-gray-900">CMS Integration</h3>
                                    <p class="text-gray-900 text-sm mt-2">
                                        Easy-to-manage content management systems for non-technical users
                                    </p>
                                </div>

                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Custom CMS
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        WordPress
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Strapi
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Contentful
                                    </li>
                                </ul>
                            </div>

                            <!-- Card 4: UI/UX Design -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <div
                                        class="h-12 w-12 rounded-xl bg-gray-100 flex items-center justify-center mb-4 group-hover:bg-gray-900 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 group-hover:text-white">
                                            <path
                                                d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z">
                                            </path>
                                            <circle cx="13.5" cy="6.5" r=".5" fill="currentColor">
                                            </circle>
                                            <circle cx="17.5" cy="10.5" r=".5" fill="currentColor">
                                            </circle>
                                            <circle cx="6.5" cy="12.5" r=".5" fill="currentColor">
                                            </circle>
                                            <circle cx="8.5" cy="7.5" r=".5" fill="currentColor">
                                            </circle>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl text-gray-900">UI/UX Design</h3>
                                    <p class="text-gray-900 text-sm mt-2">
                                        User-centered design that converts visitors into customers
                                    </p>
                                </div>

                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Wireframing
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Prototyping
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        User Testing
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Accessibility
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Features
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Why Our Websites Stand Out
                            </h2>
                        </div>

                        <!-- Features Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1: Lightning Fast -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-900 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path
                                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Lightning Fast</h3>
                                <p class="text-gray-900 text-sm">
                                    Optimized performance with sub-second load times
                                </p>
                            </div>

                            <!-- Card 2: Secure & Reliable -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-900 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path
                                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Secure & Reliable</h3>
                                <p class="text-gray-900 text-sm">
                                    Built with security best practices and HTTPS encryption
                                </p>
                            </div>

                            <!-- Card 3: User-Friendly -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-900 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">User-Friendly</h3>
                                <p class="text-gray-900 text-sm">
                                    Intuitive navigation and seamless user experience
                                </p>
                            </div>

                            <!-- Card 4: Quick Turnaround -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-900 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path d="M12 6v6l4 2"></path>
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Quick Turnaround</h3>
                                <p class="text-gray-900 text-sm">
                                    Rapid development with agile methodology
                                </p>
                            </div>

                            <!-- Card 5: Conversion Focused -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-900 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Conversion Focused</h3>
                                <p class="text-gray-900 text-sm">
                                    Designed to turn visitors into customers
                                </p>
                            </div>

                            <!-- Card 6: Analytics Ready -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-900 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                        <path d="M18 17V9"></path>
                                        <path d="M13 17V5"></path>
                                        <path d="M8 17v-3"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Analytics Ready</h3>
                                <p class="text-gray-900 text-sm">
                                    Integrated analytics for performance tracking
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Technology
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Modern Tech Stack
                            </h2>

                            <!-- Description -->
                            <p class="text-xl text-gray-900 max-w-2xl mx-auto">
                                We use the latest and most reliable technologies for your projects.
                            </p>
                        </div>

                        <!-- Tech Stack Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Frontend -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-8">
                                <h3 class="font-semibold text-xl text-gray-900 mb-6">Frontend</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">React</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Next.js</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Vue.js</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">TypeScript</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Tailwind
                                        CSS</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Framer
                                        Motion</span>
                                </div>
                            </div>

                            <!-- Backend -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-8">
                                <h3 class="font-semibold text-xl text-gray-900 mb-6">Backend</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Node.js</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Express</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Python</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Django</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">PHP</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Laravel</span>
                                </div>
                            </div>

                            <!-- Database -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-8">
                                <h3 class="font-semibold text-xl text-gray-900 mb-6">Database</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">PostgreSQL</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">MongoDB</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">MySQL</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Redis</span>
                                </div>
                            </div>

                            <!-- DevOps -->
                            <div class="bg-white rounded-2xl border border-gray-200 p-8">
                                <h3 class="font-semibold text-xl text-gray-900 mb-6">DevOps</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">AWS</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Vercel</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">Docker</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">GitHub
                                        Actions</span>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">CI/CD</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Portfolio
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Projects We've Built
                            </h2>
                        </div>

                        <!-- Projects Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Project 1 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                                    Corporate
                                </span>
                                <h3 class="font-semibold text-xl text-gray-900 mb-2">Corporate Website</h3>
                                <p class="text-gray-900 text-sm">
                                    Professional corporate website with advanced features
                                </p>
                            </div>

                            <!-- Project 2 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                                    E-commerce
                                </span>
                                <h3 class="font-semibold text-xl text-gray-900 mb-2">E-commerce Platform</h3>
                                <p class="text-gray-900 text-sm">
                                    Full-featured online store with payment integration
                                </p>
                            </div>

                            <!-- Project 3 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                                    SaaS
                                </span>
                                <h3 class="font-semibold text-xl text-gray-900 mb-2">SaaS Dashboard</h3>
                                <p class="text-gray-900 text-sm">
                                    Complex dashboard application with real-time data
                                </p>
                            </div>

                            <!-- Project 4 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                                    Marketing
                                </span>
                                <h3 class="font-semibold text-xl text-gray-900 mb-2">Landing Page</h3>
                                <p class="text-gray-900 text-sm">
                                    High-converting landing page for marketing campaigns
                                </p>
                            </div>

                            <!-- Project 5 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                                    Education
                                </span>
                                <h3 class="font-semibold text-xl text-gray-900 mb-2">Educational Portal</h3>
                                <p class="text-gray-900 text-sm">
                                    Learning management system with video courses
                                </p>
                            </div>

                            <!-- Project 6 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700 mb-4">
                                    Healthcare
                                </span>
                                <h3 class="font-semibold text-xl text-gray-900 mb-2">Healthcare Platform</h3>
                                <p class="text-gray-900 text-sm">
                                    HIPAA-compliant healthcare appointment system
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Process
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Our Development Process
                            </h2>

                            <!-- Description -->
                            <p class="text-xl text-gray-900 max-w-2xl mx-auto">
                                A streamlined process to deliver exceptional results on time.
                            </p>
                        </div>

                        <!-- Process Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Step 1 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-100 absolute top-6 right-6 group-hover:text-gray-200 transition-colors">
                                    01</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Discovery & Planning
                                </h3>
                                <p class="text-gray-900 text-sm leading-relaxed">
                                    Understand your goals, target audience, and requirements to create a solid
                                    foundation.
                                </p>
                            </div>

                            <!-- Step 2 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-100 absolute top-6 right-6 group-hover:text-gray-200 transition-colors">
                                    02</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Design & Prototyping
                                </h3>
                                <p class="text-gray-900 text-sm leading-relaxed">
                                    Create stunning visual designs and interactive prototypes for approval.
                                </p>
                            </div>

                            <!-- Step 3 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-100 absolute top-6 right-6 group-hover:text-gray-200 transition-colors">
                                    03</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Development</h3>
                                <p class="text-gray-900 text-sm leading-relaxed">
                                    Build your website using modern technologies with clean, efficient code.
                                </p>
                            </div>

                            <!-- Step 4 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-100 absolute top-6 right-6 group-hover:text-gray-200 transition-colors">
                                    04</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Testing & Launch
                                </h3>
                                <p class="text-gray-900 text-sm leading-relaxed">
                                    Rigorous testing across devices, followed by seamless deployment.
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Industries
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Industries We Serve
                            </h2>
                        </div>

                        <!-- Industries Tags -->
                        <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto">
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Healthcare
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Finance
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                E-commerce
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Education
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Real Estate
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Hospitality
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Technology
                            </span>
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-6 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 transition-all">
                                Non-Profit
                            </span>
                        </div>

                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">
                        <div class="max-w-4xl mx-auto">

                            <!-- Section Header -->
                            <div class="text-center mb-16">
                                <!-- Badge -->
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                    Why Choose Us
                                </span>

                                <!-- Heading -->
                                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                    The Web Development Advantage
                                </h2>
                            </div>

                            <!-- Benefits Card -->
                            <div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-8 md:p-12">
                                <ul class="space-y-6">
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Modern, responsive design that works on all
                                            devices</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Clean, optimized code for fast loading
                                            speeds</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">SEO-friendly structure for better search
                                            rankings</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Cross-browser compatibility</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Accessibility compliance (WCAG)</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Scalable architecture for future
                                            growth</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Content management for easy updates</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Ongoing support and maintenance</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">
                        <div class="max-w-4xl mx-auto">

                            <!-- Section Header -->
                            <div class="text-center mb-16">
                                <!-- Badge -->
                                <span
                                    class="inline-flex items-center justify-center rounded-md border border-gray-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                    Benefits
                                </span>

                                <!-- Heading -->
                                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                    Transform Your Business Online
                                </h2>
                            </div>

                            <!-- Benefits Card -->
                            <div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-8 md:p-12">
                                <ul class="space-y-6">
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Increase online visibility and brand
                                            awareness</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Generate more leads and conversions</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Provide 24/7 customer accessibility</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Build trust and credibility with
                                            customers</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Reduce operational costs with
                                            automation</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Gain insights through web analytics</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Expand market reach globally</span>
                                    </li>
                                    <li class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-gray-900">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <span class="text-lg text-gray-800">Stay competitive in the digital
                                            marketplace</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-900 text-white">
                    <div class="container mx-auto text-center">

                        <!-- Heading -->
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">
                            Ready to Build Your Website?
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-gray-100 max-w-2xl mx-auto mb-8">
                            Let's discuss your project and create a stunning website that drives results.
                        </p>

                        <!-- CTA Button -->
                        <a href="#contact"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-white px-8 py-3 text-lg font-medium text-gray-900 hover:bg-gray-100 transition-all shadow">
                            Get Free Quote
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>

                    </div>
                </section>

            </main>
        </div>

        <!---Footer--->
        {{-- <footer class="border-t bg-muted/30 mt-auto">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

                <div class="text-center text-sm text-muted-foreground">
                    © 2025 Technology Solutions. All rights reserved.
                </div>

            </div>
        </footer> --}}

        @include('partials.footer')

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
