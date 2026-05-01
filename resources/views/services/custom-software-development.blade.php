<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Software Development</title>

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

                            <!-- Badge -->
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-black text-white mb-4">
                                Custom Software Development
                            </span>

                            <!-- Heading -->
                            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">
                                Build Software That Powers
                                <span class="block text-primary mt-2">
                                    Your Business Growth
                                </span>
                            </h1>

                            <!-- Description -->
                            <p class="text-xl text-muted-foreground mb-8">
                                From concept to deployment, we create tailored software solutions that solve your unique
                                challenges and drive measurable results.
                            </p>

                            <!-- Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4">

                                <!-- Primary Button   bg-primary text-primary-foreground -->
                                <a href="/#contact" data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all bg-black text-white shadow-xs hover:bg-gray-800 h-10 rounded-md text-lg px-8">
                                    Start Your Project
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>

                                <!-- Secondary Button -->
                                <a href="/#services" data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground h-10 rounded-md text-lg px-8">
                                    View All Services
                                </a>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">

                            <!-- Left Content -->
                            <div>
                                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                                    Software That Fits Your Business Perfectly
                                </h2>

                                <p class="text-lg text-muted-foreground mb-6">
                                    Off-the-shelf software often falls short. Our custom development services ensure
                                    your
                                    software aligns perfectly with your business processes, goals, and vision.
                                </p>

                                <p class="text-lg text-muted-foreground mb-8">
                                    Whether you need a simple web application, a complex enterprise system, or a mobile
                                    app
                                    that engages users, our experienced team delivers solutions that exceed
                                    expectations.
                                </p>

                                <!-- Features -->
                                <div class="grid grid-cols-2 gap-6">

                                    <!-- Item -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Tailored Solutions</div>
                                            <div class="text-sm text-muted-foreground">Built for your exact needs</div>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Modern Tech Stack</div>
                                            <div class="text-sm text-muted-foreground">Latest frameworks & tools</div>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Scalable & Secure</div>
                                            <div class="text-sm text-muted-foreground">Grows with your business</div>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Expert Support</div>
                                            <div class="text-sm text-muted-foreground">24/7 maintenance & help</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Right Card -->
                            <div class="relative">
                                <div
                                    class="flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-linear-to-br from-primary/10 to-primary/5 border-primary/20">

                                    <!-- Card Header -->
                                    <div class="px-6">
                                        <div class="font-semibold">Why Custom Software?</div>
                                    </div>

                                    <!-- Card Content -->
                                    <div class="px-6 space-y-4">

                                        <!-- Item 1 -->
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-gray-900 text-white flex items-center justify-center">
                                                <span class="text-primary-foreground font-bold text-sm">1</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Competitive Advantage</div>
                                                <div class="text-sm text-muted-foreground">
                                                    Unique features that set you apart from competitors
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 2 -->
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-gray-900 text-white flex items-center justify-center">
                                                <span class="text-primary-foreground font-bold text-sm">2</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Cost Efficiency</div>
                                                <div class="text-sm text-muted-foreground">
                                                    Pay for what you need, nothing more
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 3 -->
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-gray-900 text-white flex items-center justify-center">
                                                <span class="text-primary-foreground font-bold text-sm">3</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Integration Ready</div>
                                                <div class="text-sm text-muted-foreground">
                                                    Seamlessly connects with your existing systems
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 4 -->
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-gray-900 text-white flex items-center justify-center">
                                                <span class="text-primary-foreground font-bold text-sm">4</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Full Control</div>
                                                <div class="text-sm text-muted-foreground">
                                                    Ownership of code and data with complete flexibility
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">

                        <!-- Header -->
                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Our Solutions
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Comprehensive Software Solutions
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                From web to mobile, from simple to complex - we cover all your software development
                                needs.
                            </p>
                        </div>

                        <!-- Cards -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- Card 1 -->
                            <div
                                class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div class="px-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                            <path d="M2 12h20"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Web Applications</div>
                                    <div class="text-muted-foreground text-sm">
                                        Modern, responsive web apps built with React, Next.js, and Node.js
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">React</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Next.js</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">TypeScript</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Tailwind
                                            CSS</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div class="px-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <rect width="14" height="20" x="5" y="2" rx="2"></rect>
                                            <path d="M12 18h.01"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Mobile Applications</div>
                                    <div class="text-muted-foreground text-sm">
                                        Native and cross-platform mobile apps for iOS and Android
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">React
                                            Native</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Flutter</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Swift</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Kotlin</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div class="px-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <ellipse cx="12" cy="5" rx="9" ry="3">
                                            </ellipse>
                                            <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                            <path d="M3 12A9 3 0 0 0 21 12"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Enterprise Systems</div>
                                    <div class="text-muted-foreground text-sm">
                                        Scalable backend systems with robust database architecture
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Node.js</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Python</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">PostgreSQL</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">MongoDB</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div class="px-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="m18 16 4-4-4-4"></path>
                                            <path d="m6 8-4 4 4 4"></path>
                                            <path d="m14.5 4-5 16"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">API Development</div>
                                    <div class="text-muted-foreground text-sm">
                                        RESTful and GraphQL APIs for seamless integrations
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">REST</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">GraphQL</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">gRPC</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">WebSocket</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">

                        <!-- Header -->
                        <div class="text-center mb-16">
                            <span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-black text-white mb-4">
                                Key Features
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Why Partner With Us
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                Our development approach ensures quality, speed, and reliability in every project.
                            </p>
                        </div>

                        <!-- Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Rapid Development</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Agile methodology with 2-week sprint cycles for faster delivery
                                    </p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Enterprise Security</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Built-in security protocols and compliance frameworks
                                    </p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Collaborative Process</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Daily standups, weekly demos, and transparent communication
                                    </p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 6v6l4 2"></path>
                                            <circle cx="12" cy="12" r="10"></circle>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">On-Time Delivery</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        98% project delivery success rate with deadlines met
                                    </p>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M16 7h6v6"></path>
                                            <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Scalable Architecture</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Future-proof solutions that grow with your business
                                    </p>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 20v2"></path>
                                            <path d="M12 2v2"></path>
                                            <path d="M17 20v2"></path>
                                            <path d="M17 2v2"></path>
                                            <path d="M2 12h2"></path>
                                            <path d="M2 17h2"></path>
                                            <path d="M2 7h2"></path>
                                            <path d="M20 12h2"></path>
                                            <path d="M20 17h2"></path>
                                            <path d="M20 7h2"></path>
                                            <path d="M7 20v2"></path>
                                            <path d="M7 2v2"></path>
                                            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                            <rect x="8" y="8" width="8" height="8" rx="1"></rect>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Cutting-Edge Tech</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Latest frameworks and tools for optimal performance
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">

                        <!-- Header -->
                        <div class="text-center mb-16">
                            <span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-primary text-primary-foreground mb-4">
                                Our Process
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                How We Work With You
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                A proven methodology that ensures transparency, quality, and on-time delivery.
                            </p>
                        </div>

                        <!-- Process Cards -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Step 1 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">01</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Discovery & Planning
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Deep dive into your business requirements, goals, and technical constraints. We
                                        create a detailed roadmap and architecture plan.
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">02</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Design & Prototyping
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        UI/UX design with wireframes, mockups, and interactive prototypes. We ensure the
                                        design aligns with your brand identity.
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">03</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Development & Testing
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Agile development with continuous integration, automated testing, and quality
                                        assurance at every stage.
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">04</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Deployment & Support
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Seamless deployment to production with ongoing maintenance, monitoring, and
                                        support.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">

                        <!-- Header -->
                        <div class="text-center mb-16">
                            <span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-primary text-primary-foreground mb-4">
                                Industries
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Industries We Serve
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                Extensive experience across diverse industries with domain expertise.
                            </p>
                        </div>

                        <!-- Industries List -->
                        <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto">

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Healthcare & Medical
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Finance & Fintech
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                E-commerce & Retail
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Manufacturing & Logistics
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Education & EdTech
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Real Estate & Property
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Travel & Hospitality
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border px-6 py-3 text-base font-medium text-foreground">
                                Media & Entertainment
                            </span>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">

                        <div class="max-w-4xl mx-auto">

                            <!-- Header -->
                            <div class="text-center mb-12">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-primary text-primary-foreground mb-4">
                                    Why Choose Us
                                </span>

                                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                    Your Trusted Software Development Partner
                                </h2>
                            </div>

                            <!-- Card -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="p-8">

                                    <ul class="space-y-4">

                                        <!-- Item -->
                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                10+ years of industry experience in custom software development
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                Dedicated team of 50+ certified developers and architects
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                Transparent pricing with no hidden costs
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                Flexible engagement models (fixed price, time & material, dedicated
                                                team)
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                24/7 support and maintenance
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                IP protection and NDA agreements
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                Modern tech stack expertise
                                            </span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">
                                                Proven track record with 500+ successful projects
                                            </span>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-black text-white">
                    <div class="container mx-auto text-center">

                        <!-- Heading -->
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">
                            Ready to Build Your Custom Software?
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-primary-foreground/80 max-w-2xl mx-auto mb-8">
                            Let's discuss your project and create a solution that drives your business forward.
                        </p>

                        <!-- CTA Button -->
                        <a href="/#contact"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all bg-white text-black shadow-xs hover:bg-gray-200 h-10 rounded-md text-lg px-8">

                            Schedule Free Consultation

                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
