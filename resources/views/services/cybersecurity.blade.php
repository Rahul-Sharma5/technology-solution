<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cybersecurity</title>

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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-black text-white [a&]:hover:bg-primary/90 mb-4">
                                Cybersecurity
                            </span>

                            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">
                                Protect Your Business
                                <span class="block text-primary mt-2">From Cyber Threats</span>
                            </h1>

                            <p class="text-xl text-muted-foreground mb-8">
                                Comprehensive cybersecurity solutions to safeguard your digital assets.
                                From security audits to incident response, we've got you covered.
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <a data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-black text-white shadow-xs hover:bg-primary/90 h-10 rounded-md has-[>svg]:px-4 text-lg px-8"
                                    href="/#contact">

                                    Secure Your Business

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right ml-2 h-5 w-5" aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>

                                </a>

                                <a data-slot="button"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md has-[>svg]:px-4 text-lg px-8"
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

                            <!-- Left Content -->
                            <div>
                                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                                    Security Is Not Optional
                                </h2>

                                <p class="text-lg text-muted-foreground mb-6">
                                    Cyber threats are evolving every day. A single breach can cost millions in damages
                                    and irreparably damage your reputation.
                                </p>

                                <p class="text-lg text-muted-foreground mb-8">
                                    Our cybersecurity experts provide layered protection, proactive monitoring, and
                                    rapid response to keep your business safe.
                                </p>

                                <div class="grid grid-cols-2 gap-6">

                                    <!-- Item 1 -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Proactive Defense</div>
                                            <div class="text-sm text-muted-foreground">Prevent attacks before they
                                                happen</div>
                                        </div>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">24/7 Monitoring</div>
                                            <div class="text-sm text-muted-foreground">Constant vigilance</div>
                                        </div>
                                    </div>

                                    <!-- Item 3 -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Rapid Response</div>
                                            <div class="text-sm text-muted-foreground">Minutes, not hours</div>
                                        </div>
                                    </div>

                                    <!-- Item 4 -->
                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Compliance Ready</div>
                                            <div class="text-sm text-muted-foreground">Meet regulatory standards</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Right Card -->
                            <div class="space-y-4">
                                <div data-slot="card"
                                    class="text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-gradient-to-br from-red-50 to-red-100 dark:from-red-950 dark:to-red-900 border-red-200 dark:border-red-800">

                                    <div data-slot="card-header"
                                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-8 w-8 text-red-600 mb-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>

                                        <div data-slot="card-title"
                                            class="leading-none font-semibold text-red-900 dark:text-red-100">
                                            Cybercrime Statistics
                                        </div>

                                    </div>

                                    <div data-slot="card-content" class="px-6">
                                        <ul class="space-y-2 text-sm text-red-800 dark:text-red-200">
                                            <li>• 60% of small businesses close within 6 months of a cyber attack</li>
                                            <li>• Average data breach cost: $4.45 million</li>
                                            <li>• Ransomware attacks up 105% year-over-year</li>
                                            <li>• 95% of breaches involve human error</li>
                                        </ul>
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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                Our Services
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Comprehensive Security Services
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                End-to-end cybersecurity solutions to protect every aspect of your business.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- Card 1 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">

                                    <div
                                        class="h-12 w-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20">
                                        <!-- LOCK ICON -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-lock h-6 w-6 text-primary" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <rect width="18" height="11" x="3" y="11" rx="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Security Audits</div>
                                    <div class="text-muted-foreground text-sm">Comprehensive security assessments to
                                        identify vulnerabilities and risks</div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header" class="@container/card-header px-6">

                                    <div
                                        class="h-12 w-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                                        <!-- EYE ICON -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-eye h-6 w-6 text-primary" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Penetration Testing</div>
                                    <div class="text-muted-foreground text-sm">Simulated attacks to test your defenses
                                        and identify weaknesses</div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header" class="@container/card-header px-6">

                                    <div
                                        class="h-12 w-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                                        <!-- SHIELD ICON (FIXED) -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-shield h-6 w-6 text-primary" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Compliance Management</div>
                                    <div class="text-muted-foreground text-sm">Ensure adherence to industry standards
                                        and regulatory requirements</div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm group hover:shadow-lg transition-all duration-300">
                                <div data-slot="card-header" class="@container/card-header px-6">

                                    <div
                                        class="h-12 w-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                                        <!-- FILE CHECK ICON (FIXED) -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-file-check h-6 w-6 text-primary" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="m9 15 2 2 4-4"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Security Training</div>
                                    <div class="text-muted-foreground text-sm">Empower your team with cybersecurity
                                        awareness and best practices</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">

                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                Defense Layers
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Multi-Layered Security Approach
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                Comprehensive protection across all layers of your IT infrastructure.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- Network Security -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <div data-slot="card-title" class="leading-none font-semibold">Network Security
                                    </div>
                                    <div data-slot="card-description" class="text-muted-foreground text-sm">
                                        Firewalls, IDS/IPS, and secure network architecture
                                    </div>
                                </div>

                                <div data-slot="card-content" class="px-6">
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            Firewall Management
                                        </li>
                                        <li class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>
                                            Intrusion Detection
                                        </li>
                                        <li class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>
                                            VPN
                                        </li>
                                        <li class="flex items-center gap-2 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>
                                            Network Segmentation
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Application Security -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <div data-slot="card-title" class="leading-none font-semibold">Application
                                        Security</div>
                                    <div data-slot="card-description" class="text-muted-foreground text-sm">
                                        Secure coding practices and application-level protection
                                    </div>
                                </div>

                                <div data-slot="card-content" class="px-6">
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>Code Review</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>OWASP Compliance</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>API Security</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>Input Validation</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Data Security -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div data-slot="card-content" class="px-6">
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>Encryption</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>Access Management</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>DLP</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>Backup Security</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Identity -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div data-slot="card-content" class="px-6">
                                    <ul class="space-y-2">
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>MFA</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>SSO</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>IAM</li>
                                        <li class="flex items-center gap-2 text-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-4 w-4 text-primary flex-shrink-0"
                                                fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="m9 12 2 2 4-4" />
                                            </svg>PAM</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">

                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                Features
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Why Choose Our Security Solutions
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-target h-8 w-8 text-primary" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="6"></circle>
                                            <circle cx="12" cy="12" r="2"></circle>
                                        </svg>
                                    </div>
                                    <div data-slot="card-title" class="font-semibold text-xl">24/7 Monitoring</div>
                                </div>
                                <div data-slot="card-content" class="px-6">
                                    <p class="text-muted-foreground">Round-the-clock security monitoring and threat
                                        detection</p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-zap h-8 w-8 text-primary" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="font-semibold text-xl">Rapid Response</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-muted-foreground">Immediate incident response and containment within
                                        minutes</p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="@container/card-header grid gap-1.5 px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-users h-8 w-8 text-primary" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <div class="font-semibold text-xl">Expert Team</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-muted-foreground">Certified security professionals with CISM, CISSP,
                                        CEH credentials</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-clock h-8 w-8 text-primary" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M12 6v6l4 2"></path>
                                            <circle cx="12" cy="12" r="10"></circle>
                                        </svg>
                                    </div>
                                    <div class="font-semibold text-xl">Regular Updates</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-muted-foreground">Continuous security assessments and vulnerability
                                        scans</p>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-shield h-8 w-8 text-primary" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="font-semibold text-xl">Proactive Defense</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-muted-foreground">Threat hunting and predictive security analytics
                                    </p>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-file-check h-8 w-8 text-primary" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="m9 15 2 2 4-4"></path>
                                        </svg>
                                    </div>
                                    <div class="font-semibold text-xl">Compliance Ready</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-muted-foreground">Pre-built compliance frameworks for major
                                        standards</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">

                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                Threats We Protect Against
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Common Cyber Threats
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-red-200 dark:border-red-800">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-5 w-5 text-red-600" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        Malware Attacks
                                    </div>
                                    <div class="text-muted-foreground text-sm">Risk Level: High</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-sm text-muted-foreground">Data loss, system damage</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-red-200 dark:border-red-800">
                                <div class="@container/card-header grid gap-1.5 px-6">
                                    <div class="flex items-center gap-2 font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-5 w-5 text-red-600" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        Phishing
                                    </div>
                                    <div class="text-muted-foreground text-sm">Risk Level: Very High</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-sm text-muted-foreground">Credential theft, financial loss</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-red-200 dark:border-red-800">
                                <div class="@container/card-header grid gap-1.5 px-6">
                                    <div class="flex items-center gap-2 font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-5 w-5 text-red-600" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        Ransomware
                                    </div>
                                    <div class="text-muted-foreground text-sm">Risk Level: Critical</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-sm text-muted-foreground">Business disruption, extortion</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-red-200 dark:border-red-800">
                                <div class="@container/card-header grid gap-1.5 px-6">
                                    <div class="flex items-center gap-2 font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-5 w-5 text-red-600" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        DDoS Attacks
                                    </div>
                                    <div class="text-muted-foreground text-sm">Risk Level: High</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-sm text-muted-foreground">Service unavailability</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-red-200 dark:border-red-800">
                                <div class="@container/card-header grid gap-1.5 px-6">
                                    <div class="flex items-center gap-2 font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-5 w-5 text-red-600" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        Insider Threats
                                    </div>
                                    <div class="text-muted-foreground text-sm">Risk Level: Medium</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-sm text-muted-foreground">Data breach, sabotage</p>
                                </div>
                            </div>

                            <!-- Card -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-red-200 dark:border-red-800">
                                <div class="@container/card-header grid gap-1.5 px-6">
                                    <div class="flex items-center gap-2 font-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="lucide lucide-triangle-alert h-5 w-5 text-red-600" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path
                                                d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        Social Engineering
                                    </div>
                                    <div class="text-muted-foreground text-sm">Risk Level: High</div>
                                </div>
                                <div class="px-6">
                                    <p class="text-sm text-muted-foreground">Unauthorized access</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">

                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                Process
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Our Security Implementation Process
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Card 1 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">01</div>
                                    <div data-slot="card-title" class="font-semibold text-xl relative z-10">
                                        Discovery &amp; Assessment
                                    </div>
                                    <div data-slot="card-description"
                                        class="text-muted-foreground text-sm relative z-10">
                                        Identify assets, assess current security posture, and evaluate risks.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">02</div>
                                    <div data-slot="card-title" class="font-semibold text-xl relative z-10">
                                        Strategy &amp; Planning
                                    </div>
                                    <div data-slot="card-description"
                                        class="text-muted-foreground text-sm relative z-10">
                                        Develop comprehensive security strategy and implementation roadmap.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">03</div>
                                    <div data-slot="card-title" class="font-semibold text-xl relative z-10">
                                        Implementation
                                    </div>
                                    <div data-slot="card-description"
                                        class="text-muted-foreground text-sm relative z-10">
                                        Deploy security controls, configure systems, and establish monitoring.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">04</div>
                                    <div data-slot="card-title" class="font-semibold text-xl relative z-10">
                                        Maintenance &amp; Response
                                    </div>
                                    <div data-slot="card-description"
                                        class="text-muted-foreground text-sm relative z-10">
                                        Monitor threats, respond to incidents, and continuously improve defenses.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">

                        <div class="text-center mb-16">
                            <span data-slot="badge"
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                Compliance
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Regulatory Compliance Expertise
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div data-slot="card-header"
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold">ISO 27001</div>
                                    <div class="text-muted-foreground text-sm">Information Security Management</div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold">SOC 2</div>
                                    <div class="text-muted-foreground text-sm">Service Organization Control</div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold">GDPR</div>
                                    <div class="text-muted-foreground text-sm">EU Data Protection</div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold">PCI DSS</div>
                                    <div class="text-muted-foreground text-sm">Payment Card Security</div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold">HIPAA</div>
                                    <div class="text-muted-foreground text-sm">Healthcare Privacy</div>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div
                                    class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="leading-none font-semibold">NIST</div>
                                    <div class="text-muted-foreground text-sm">Cybersecurity Framework</div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-muted/30">
                    <div class="container mx-auto">
                        <div class="max-w-4xl mx-auto">

                            <div class="text-center mb-12">
                                <span data-slot="badge"
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90 mb-4">
                                    Benefits
                                </span>

                                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                    Invest in Security, Invest in Your Future
                                </h2>
                            </div>

                            <div data-slot="card"
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div data-slot="card-content" class="p-8">

                                    <ul class="space-y-4">

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Protect sensitive data and customer
                                                information</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Prevent costly data breaches and cyber attacks</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Comply with industry regulations and standards</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Build customer trust and brand reputation</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Minimize downtime and business disruption</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Reduce financial and legal risks</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Improve incident response capabilities</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Create a security-conscious organizational
                                                culture</span>
                                        </li>

                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-black text-white">
                    <div class="container mx-auto text-center">

                        <h2 class="text-3xl md:text-5xl font-bold mb-4">
                            Ready to Secure Your Business?
                        </h2>

                        <p class="text-xl text-primary-foreground/80 max-w-2xl mx-auto mb-8">
                            Don't wait for a breach. Protect your business with our comprehensive cybersecurity
                            solutions.
                        </p>

                        <a data-slot="button"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white text-black shadow-xs hover:bg-secondary/80 h-10 rounded-md has-[&>svg]:px-4 text-lg px-8"
                            href="/#contact">
                            Schedule Security Assessment

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-right ml-2 h-5 w-5" aria-hidden="true">
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
