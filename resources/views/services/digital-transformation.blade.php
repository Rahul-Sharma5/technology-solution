<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Transformation</title>

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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Digital Transformation
                            </span>

                            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">
                                Transform Your Business
                                <span class="block text-primary mt-2">For The Digital Age</span>
                            </h1>

                            <p class="text-xl text-muted-foreground mb-8">
                                Reimagine your business with digital-first strategies. We help you leverage technology
                                to create exceptional experiences, streamline operations, and drive growth.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <a data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-gray-900 text-white shadow-xs hover:bg-gray-800 h-10 rounded-md has-[&>svg]:px-4 text-lg px-8"
                                    href="/#contact">
                                    Start Your Transformation

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right ml-2 h-5 w-5" aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>

                                </a>

                                <a data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md has-[&>svg]:px-4 text-lg px-8"
                                    href="/#services">
                                    View All Services
                                </a>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">

                            <div>
                                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                                    Digital Transformation Is Essential
                                </h2>

                                <p class="text-lg text-muted-foreground mb-6">
                                    In today's fast-paced digital world, businesses must adapt or risk being left
                                    behind. Digital transformation is about leveraging technology to create value,
                                    innovate faster, and deliver superior experiences.
                                </p>

                                <p class="text-lg text-muted-foreground mb-8">
                                    Our proven methodology and expertise help you navigate this journey successfully,
                                    ensuring sustainable results and competitive advantage.
                                </p>

                                <div class="grid grid-cols-2 gap-6">

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Strategic Approach</div>
                                            <div class="text-sm text-muted-foreground">Business-aligned goals</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Proven Results</div>
                                            <div class="text-sm text-muted-foreground">Measurable outcomes</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">User-Centric</div>
                                            <div class="text-sm text-muted-foreground">Customer-first design</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Change Ready</div>
                                            <div class="text-sm text-muted-foreground">Organizational adoption</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">

                                <div data-slot="card"
                                    class="text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-primary/5 border-primary/10">
                                    <div data-slot="card-header"
                                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                        <div class="text-4xl font-bold text-primary mb-2">30-50%</div>
                                        <div data-slot="card-description" class="text-muted-foreground text-sm">
                                            Efficiency Improvement</div>
                                    </div>
                                </div>

                                <div data-slot="card"
                                    class="text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-primary/5 border-primary/10">
                                    <div data-slot="card-header"
                                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                        <div class="text-4xl font-bold text-primary mb-2">40-60%</div>
                                        <div data-slot="card-description" class="text-muted-foreground text-sm">Cost
                                            Reduction</div>
                                    </div>
                                </div>

                                <div data-slot="card"
                                    class="text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-primary/5 border-primary/10">
                                    <div data-slot="card-header"
                                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                        <div class="text-4xl font-bold text-primary mb-2">3x</div>
                                        <div data-slot="card-description" class="text-muted-foreground text-sm">Faster
                                            Time-to-Market</div>
                                    </div>
                                </div>

                                <div data-slot="card"
                                    class="text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-primary/5 border-primary/10">
                                    <div data-slot="card-header"
                                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                        <div class="text-4xl font-bold text-primary mb-2">25%</div>
                                        <div data-slot="card-description" class="text-muted-foreground text-sm">
                                            Customer Satisfaction Increase</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">

                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-gray-900 text-white [a&]:hover:bg-gray-800 mb-4">
                                Our Services
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Comprehensive Transformation Solutions
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                End-to-end services to guide your digital transformation journey.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- CARD 1 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">

                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-black/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-workflow h-6 w-6 text-primary">
                                            <rect width="8" height="8" x="3" y="3" rx="2"></rect>
                                            <path d="M7 11v4a2 2 0 0 0 2 2h4"></path>
                                            <rect width="8" height="8" x="13" y="13" rx="2"></rect>
                                        </svg>
                                    </div>

                                    <div data-slot="card-title" class="leading-none font-semibold">Process Automation
                                    </div>
                                    <div data-slot="card-description" class="text-muted-foreground text-sm">Automate
                                        repetitive tasks and streamline business operations for efficiency</div>
                                </div>

                                <div data-slot="card-content" class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&]:hover:bg-secondary/90">RPA</span>
                                        <span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&]:hover:bg-secondary/90">Workflows</span>
                                        <span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&]:hover:bg-secondary/90">BPA</span>
                                        <span data-slot="badge"
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&]:hover:bg-secondary/90">Process
                                            Mining</span>
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 2 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">

                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-black/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" class="lucide lucide-refresh-cw h-6 w-6 text-primary">
                                            <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                            <path d="M21 3v5h-5"></path>
                                            <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                            <path d="M8 16H3v5"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Legacy Modernization</div>
                                    <div class="text-muted-foreground text-sm">Transform outdated systems into modern,
                                        scalable platforms</div>
                                </div>
                            </div>

                            <!-- CARD 3 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header" class="px-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4  group-hover:bg-black/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-database h-6 w-6 text-primary" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor">
                                            <ellipse cx="12" cy="5" rx="9" ry="3">
                                            </ellipse>
                                            <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                            <path d="M3 12A9 3 0 0 0 21 12"></path>
                                        </svg>
                                    </div>
                                    <div class="font-semibold">Digital Integration</div>
                                    <div class="text-muted-foreground text-sm">Connect disparate systems and create
                                        seamless data flows</div>
                                </div>
                            </div>

                            <!-- CARD 4 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header" class="px-6">
                                    <div
                                        class="h-12 w-12 rounded-lg bg-black/10 flex items-center justify-center mb-4 group-hover:bg-black/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-zap h-6 w-6 text-primary" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="font-semibold">Digital Innovation</div>
                                    <div class="text-muted-foreground text-sm">Implement cutting-edge technologies to
                                        drive competitive advantage</div>
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
                                class="inline-flex items-center justify-center rounded-md border border-blue-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Focus Areas
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Key Transformation Pillars
                            </h2>

                            <!-- Description -->
                            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                                Holistic approach covering all aspects of your digital transformation.
                            </p>
                        </div>

                        <!-- Focus Areas Grid -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- Card 1: Customer Experience -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <h3 class="font-semibold text-2xl text-gray-900 mb-3">Customer Experience</h3>
                                <p class="text-gray-600 text-base mb-6">
                                    Delight customers with seamless digital interactions across all touchpoints
                                </p>
                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Omnichannel Experience
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Personalization
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Self-Service Portals
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Mobile Apps
                                    </li>
                                </ul>
                            </div>

                            <!-- Card 2: Operational Efficiency -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <h3 class="font-semibold text-2xl text-gray-900 mb-3">Operational Efficiency</h3>
                                <p class="text-gray-600 text-base mb-6">
                                    Optimize processes and reduce costs through digital automation
                                </p>
                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Process Automation
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Digital Workflows
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Resource Optimization
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Supply Chain Digitalization
                                    </li>
                                </ul>
                            </div>

                            <!-- Card 3: Employee Empowerment -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <h3 class="font-semibold text-2xl text-gray-900 mb-3">Employee Empowerment</h3>
                                <p class="text-gray-600 text-base mb-6">
                                    Equip teams with digital tools and collaboration platforms
                                </p>
                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Digital Workplace
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Collaboration Tools
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Knowledge Management
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Training Systems
                                    </li>
                                </ul>
                            </div>

                            <!-- Card 4: Business Model Innovation -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <h3 class="font-semibold text-2xl text-gray-900 mb-3">Business Model Innovation</h3>
                                <p class="text-gray-600 text-base mb-6">
                                    Create new revenue streams through digital products and services
                                </p>
                                <ul class="space-y-3 text-sm">
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Digital Products
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Subscription Models
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Marketplace Platforms
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-gray-900 flex-shrink-0">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        Data Monetization
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
                                class="inline-flex items-center justify-center rounded-md border border-gray-000 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Why Us
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Your Trusted Transformation Partner
                            </h2>
                        </div>

                        <!-- Cards Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1: Strategic Roadmap -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Strategic Roadmap</h3>
                                <p class="text-gray-600 text-sm">
                                    Comprehensive digital strategy aligned with business goals
                                </p>
                            </div>

                            <!-- Card 2: Measurable Results -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path d="M16 7h6v6"></path>
                                        <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Measurable Results</h3>
                                <p class="text-gray-600 text-sm">
                                    Clear KPIs and ROI tracking for all initiatives
                                </p>
                            </div>

                            <!-- Card 3: Change Management -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
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
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Change Management</h3>
                                <p class="text-gray-600 text-sm">
                                    Support for organizational adoption and cultural transformation
                                </p>
                            </div>

                            <!-- Card 4: Agile Implementation -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path d="M12 6v6l4 2"></path>
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Agile Implementation</h3>
                                <p class="text-gray-600 text-sm">
                                    Iterative approach with quick wins and continuous improvement
                                </p>
                            </div>

                            <!-- Card 5: Scalable Solutions -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                        <path d="M21 3v5h-5"></path>
                                        <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                        <path d="M8 16H3v5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Scalable Solutions</h3>
                                <p class="text-gray-600 text-sm">
                                    Future-proof architecture that grows with your business
                                </p>
                            </div>

                            <!-- Card 6: Innovation Focus -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 text-center hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4 group-hover:bg-gray-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="text-gray-900 group-hover:text-white">
                                        <path
                                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Innovation Focus</h3>
                                <p class="text-gray-600 text-sm">
                                    Leverage latest technologies for competitive edge
                                </p>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">

                        <!-- Section Header -->
                        <div class="text-center mb-16">
                            <!-- Badge -->
                            <span
                                class="inline-flex items-center justify-center rounded-md border border-blue-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Success Stories
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                Transformation Examples
                            </h2>
                        </div>

                        <!-- Success Stories Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Story 1 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path
                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Traditional Retail to Omnichannel
                                </h3>
                                <p class="text-gray-600 text-sm">
                                    Transform brick-and-mortar retail into seamless online and offline experience
                                </p>
                            </div>

                            <!-- Story 2 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path
                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Manual Processes to Automation
                                </h3>
                                <p class="text-gray-600 text-sm">
                                    Replace paper-based workflows with digital automation and approval systems
                                </p>
                            </div>

                            <!-- Story 3 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path
                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">On-Premise to Cloud</h3>
                                <p class="text-gray-600 text-sm">
                                    Modernize legacy systems and migrate to scalable cloud infrastructure
                                </p>
                            </div>

                            <!-- Story 4 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path
                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Siloed to Integrated</h3>
                                <p class="text-gray-600 text-sm">
                                    Break down data silos and create unified, real-time business intelligence
                                </p>
                            </div>

                            <!-- Story 5 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path
                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Reactive to Predictive</h3>
                                <p class="text-gray-600 text-sm">
                                    Implement AI and analytics for proactive decision making and forecasting
                                </p>
                            </div>

                            <!-- Story 6 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 hover:shadow-xl transition-all duration-300 group">
                                <div class="mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                                        <path
                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path
                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3">Traditional to Digital-First</h3>
                                <p class="text-gray-600 text-sm">
                                    Reimagine business models with digital products and services at the core
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
                                Our Transformation Methodology
                            </h2>

                            <!-- Description -->
                            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                                A proven approach to deliver successful digital transformation.
                            </p>
                        </div>

                        <!-- 4-Step Process Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Step 1 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-300 absolute top-6 right-6 group-hover:text-gray-500 transition-colors">
                                    01</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Discovery &
                                    Assessment</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Analyze current state, identify opportunities, and define transformation goals.
                                </p>
                            </div>

                            <!-- Step 2 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-300 absolute top-6 right-6 group-hover:text-gray-500 transition-colors">
                                    02</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Strategy & Roadmap
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Create comprehensive digital strategy and prioritize initiatives based on impact.
                                </p>
                            </div>

                            <!-- Step 3 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-300 absolute top-6 right-6 group-hover:text-gray-500 transition-colors">
                                    03</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Implementation</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Execute transformation in phases with continuous feedback and adaptation.
                                </p>
                            </div>

                            <!-- Step 4 -->
                            <div
                                class="bg-white rounded-2xl border border-gray-200 p-8 relative hover:shadow-xl transition-all duration-300 group">
                                <div
                                    class="text-5xl font-bold text-gray-300 absolute top-6 right-6 group-hover:text-gray-500 transition-colors">
                                    04</div>
                                <h3 class="font-semibold text-xl text-gray-900 mb-3 relative z-10">Optimization & Scale
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Measure results, refine approach, and scale successful initiatives.
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
                                class="inline-flex items-center justify-center rounded-md border border-blue-200 bg-gray-900 px-3 py-1 text-xs font-medium text-white mb-4">
                                Benefits
                            </span>

                            <!-- Heading -->
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">
                                The Value of Digital Transformation
                            </h2>
                        </div>

                        <!-- Benefits Card -->
                        <div
                            class="max-w-4xl mx-auto bg-white rounded-3xl border border-gray-200 shadow-sm p-8 md:p-12">
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
                                    <span class="text-lg text-gray-800">Increase operational efficiency by
                                        30-50%</span>
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
                                    <span class="text-lg text-gray-800">Reduce time-to-market for new products and
                                        services</span>
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
                                    <span class="text-lg text-gray-800">Enhance customer satisfaction and
                                        loyalty</span>
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
                                    <span class="text-lg text-gray-800">Enable data-driven decision making</span>
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
                                    <span class="text-lg text-gray-800">Create competitive advantages through
                                        innovation</span>
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
                                    <span class="text-lg text-gray-800">Improve employee productivity and
                                        engagement</span>
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
                                    <span class="text-lg text-gray-800">Reduce operational costs and eliminate
                                        waste</span>
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
                                    <span class="text-lg text-gray-800">Build a foundation for sustainable
                                        growth</span>
                                </li>
                            </ul>
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
                            Let's discuss how digital transformation can unlock new opportunities for your organization.
                        </p>

                        <!-- CTA Button -->
                        <a href="#contact"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-white px-8 py-3 text-lg font-medium text-gray-900 hover:bg-gray-100 transition-all shadow">
                            Schedule Transformation Strategy
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right h-5 w-5" aria-hidden="true">
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
