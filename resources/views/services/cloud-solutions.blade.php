<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloud Solutions</title>

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
                            <span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-black text-white mb-4">
                                Cloud Solutions
                            </span>

                            <!-- Heading -->
                            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">
                                Modernize Your Infrastructure
                                <span class="block text-primary mt-2">
                                    With Cloud Power
                                </span>
                            </h1>

                            <!-- Description -->
                            <p class="text-xl text-muted-foreground mb-8">
                                Transform your business with scalable, secure, and cost-effective cloud solutions.
                                From migration to management, we handle it all.
                            </p>

                            <!-- Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4">

                                <!-- Primary Button -->
                                <a href="/#contact"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all bg-black text-white shadow-xs hover:bg-primary/90 h-10 rounded-md text-lg px-8">

                                    Start Cloud Migration

                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>

                                <!-- Secondary Button -->
                                <a href="/#services"
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
                                    Why Move to the Cloud?
                                </h2>

                                <p class="text-lg text-muted-foreground mb-6">
                                    The cloud has become essential for modern businesses. It offers unparalleled
                                    flexibility,
                                    scalability, and cost savings compared to traditional on-premise infrastructure.
                                </p>

                                <p class="text-lg text-muted-foreground mb-8">
                                    Our cloud experts help you navigate the journey to cloud computing, ensuring a
                                    smooth
                                    transition with minimal disruption to your operations.
                                </p>

                                <!-- Features -->
                                <div class="grid grid-cols-2 gap-6">

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Cost Savings</div>
                                            <div class="text-sm text-muted-foreground">40-60% lower costs</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Scalability</div>
                                            <div class="text-sm text-muted-foreground">Scale on demand</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Security</div>
                                            <div class="text-sm text-muted-foreground">Enterprise-grade</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mt-1"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Reliability</div>
                                            <div class="text-sm text-muted-foreground">99.99% uptime</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Right Stats Cards -->
                            <div class="grid grid-cols-2 gap-4">

                                <div
                                    class="flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-black/5 border-black/10 px-6">
                                    <div class="text-4xl font-bold text-primary mb-2">40-60%</div>
                                    <div class="text-muted-foreground text-sm">Cost Reduction</div>
                                </div>

                                <div
                                    class="flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-black/5 border-black/10 px-6">
                                    <div class="text-4xl font-bold text-primary mb-2">99.99%</div>
                                    <div class="text-muted-foreground text-sm">Uptime Guarantee</div>
                                </div>

                                <div
                                    class="flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-black/5 border-black/10 px-6">
                                    <div class="text-4xl font-bold text-primary mb-2">200+</div>
                                    <div class="text-muted-foreground text-sm">Cloud Services</div>
                                </div>

                                <div
                                    class="flex flex-col gap-6 rounded-xl border py-6 shadow-sm bg-black/5 border-black/10 px-6">
                                    <div class="text-4xl font-bold text-primary mb-2">24/7</div>
                                    <div class="text-muted-foreground text-sm">Monitoring</div>
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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Our Services
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Comprehensive Cloud Services
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                End-to-end cloud solutions tailored to your business needs.
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
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                            <path d="M2 12h20"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Cloud Migration</div>
                                    <div class="text-muted-foreground text-sm">
                                        Seamlessly move your on-premise infrastructure to cloud platforms with minimal
                                        downtime
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">AWS</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Azure</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Google
                                            Cloud</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Oracle
                                            Cloud</span>
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
                                            <rect width="20" height="8" x="2" y="2" rx="2"></rect>
                                            <rect width="20" height="8" x="2" y="14" rx="2"></rect>
                                            <line x1="6" x2="6.01" y1="6" y2="6">
                                            </line>
                                            <line x1="6" x2="6.01" y1="18" y2="18">
                                            </line>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Cloud Architecture</div>
                                    <div class="text-muted-foreground text-sm">
                                        Design scalable, secure, and cost-effective cloud architectures for your needs
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Microservices</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Serverless</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Containers</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Kubernetes</span>
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
                                            <path d="m18 16 4-4-4-4"></path>
                                            <path d="m6 8-4 4 4 4"></path>
                                            <path d="m14.5 4-5 16"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">DevOps & CI/CD</div>
                                    <div class="text-muted-foreground text-sm">
                                        Automate deployment pipelines and streamline development workflows
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Jenkins</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">GitLab
                                            CI</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">GitHub
                                            Actions</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Docker</span>
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
                                            <ellipse cx="12" cy="5" rx="9" ry="3">
                                            </ellipse>
                                            <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                            <path d="M3 12A9 3 0 0 0 21 12"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold">Cloud Databases</div>
                                    <div class="text-muted-foreground text-sm">
                                        Managed database solutions with automated backups and scaling
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">PostgreSQL</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">MySQL</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">MongoDB</span>
                                        <span
                                            class="px-2 py-0.5 text-xs rounded-md bg-secondary text-secondary-foreground">Redis</span>
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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Platforms
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Multi-Cloud Expertise
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                Expert knowledge across all major cloud platforms to find the best fit for your needs.
                            </p>
                        </div>

                        <!-- Cards -->
                        <div class="grid md:grid-cols-3 gap-6">

                            <!-- AWS -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Amazon Web Services</div>
                                    <div class="text-muted-foreground text-sm">
                                        Comprehensive cloud platform with 200+ full-featured services
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap justify-center gap-2">
                                        <span class="px-2 py-0.5 text-xs rounded-md border">EC2</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">S3</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">RDS</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Lambda</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">EKS</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">CloudFront</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Azure -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                            <path d="M2 12h20"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Microsoft Azure</div>
                                    <div class="text-muted-foreground text-sm">
                                        Enterprise-grade cloud with seamless Microsoft integration
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap justify-center gap-2">
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Azure VM</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Blob Storage</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">SQL Database</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Azure Functions</span>
                                    </div>
                                </div>
                            </div>

                            <!-- GCP -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-black/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <ellipse cx="12" cy="5" rx="9" ry="3">
                                            </ellipse>
                                            <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                            <path d="M3 12A9 3 0 0 0 21 12"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Google Cloud Platform</div>
                                    <div class="text-muted-foreground text-sm">
                                        Innovative cloud with AI/ML and big data capabilities
                                    </div>
                                </div>

                                <div class="px-6">
                                    <div class="flex flex-wrap justify-center gap-2">
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Compute Engine</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Cloud Storage</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">BigQuery</span>
                                        <span class="px-2 py-0.5 text-xs rounded-md border">Cloud Run</span>
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
                            <span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Features
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                What Makes Our Cloud Solutions Different
                            </h2>
                        </div>

                        <!-- Cards -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
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
                                        Advanced security protocols, encryption, and compliance certifications
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
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Auto-Scaling</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Automatic scaling based on demand for optimal performance
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
                                            <line x1="12" x2="12" y1="2" y2="22">
                                            </line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Cost Optimization</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Reduce infrastructure costs by 40-60% with cloud efficiency
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

                                    <div class="font-semibold text-xl">99.99% Uptime</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        High availability with redundant infrastructure and disaster recovery
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

                                    <div class="font-semibold text-xl">Disaster Recovery</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        Automated backups and quick recovery from any failure
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
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                        </svg>
                                    </div>

                                    <div class="font-semibold text-xl">Expert Support</div>
                                </div>

                                <div class="px-6">
                                    <p class="text-muted-foreground">
                                        24/7 monitoring and support from certified cloud engineers
                                    </p>
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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Process
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Our Cloud Migration Process
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                A proven methodology ensuring smooth transition with minimal downtime.
                            </p>
                        </div>

                        <!-- Process Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Step 1 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">01</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Assessment & Planning
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Evaluate current infrastructure, identify migration candidates, and create a
                                        detailed migration roadmap.
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">02</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Architecture Design
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Design cloud-native architecture optimized for performance, cost, and
                                        scalability.
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">03</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Migration & Setup
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Execute migration with minimal downtime, configure cloud resources, and
                                        implement security measures.
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="px-6 relative">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">04</div>

                                    <div class="font-semibold text-xl relative z-10">
                                        Optimization & Support
                                    </div>

                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Monitor performance, optimize costs, and provide ongoing support and
                                        maintenance.
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
                            <span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                Use Cases
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                How Businesses Use Cloud Solutions
                            </h2>
                        </div>

                        <!-- Cards -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <div class="font-semibold">
                                        E-commerce Scaling
                                    </div>
                                    <div class="text-muted-foreground text-sm">
                                        Handle peak traffic during sales events with auto-scaling infrastructure
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <div class="font-semibold">
                                        SaaS Applications
                                    </div>
                                    <div class="text-muted-foreground text-sm">
                                        Build and deploy scalable software-as-a-service platforms
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <div class="font-semibold">
                                        Data Analytics
                                    </div>
                                    <div class="text-muted-foreground text-sm">
                                        Process and analyze massive datasets with cloud-native data services
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <div class="font-semibold">
                                        Mobile Backend
                                    </div>
                                    <div class="text-muted-foreground text-sm">
                                        Support millions of mobile users with reliable backend infrastructure
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <div class="font-semibold">
                                        Disaster Recovery
                                    </div>
                                    <div class="text-muted-foreground text-sm">
                                        Implement robust backup and recovery systems for business continuity
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <div class="font-semibold">
                                        Hybrid Cloud
                                    </div>
                                    <div class="text-muted-foreground text-sm">
                                        Combine on-premise and cloud resources for optimal performance
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">
                        <div class="max-w-4xl mx-auto">

                            <!-- Header -->
                            <div class="text-center mb-12">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 overflow-hidden border-transparent bg-gray-900 text-white mb-4">
                                    Benefits
                                </span>

                                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                    Key Benefits of Cloud Transformation
                                </h2>
                            </div>

                            <!-- Card -->
                            <div class="bg-card flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="p-8">
                                    <ul class="space-y-4">

                                        <!-- Item -->
                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Reduce infrastructure costs by 40-60%</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Improve time-to-market for new features</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Enhance security and compliance posture</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Achieve better business continuity</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Scale resources on demand</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Access cutting-edge cloud technologies</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Simplify IT operations</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Enable remote work and collaboration</span>
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
                            Ready to Transform to Cloud?
                        </h2>

                        <!-- Description -->
                        <p class="text-xl text-primary-foreground/80 max-w-2xl mx-auto mb-8">
                            Let's discuss your cloud migration strategy and create a roadmap for success.
                        </p>

                        <!-- Button -->
                        <a href="/#contact"
                            class="inline-flex items-center justify-center gap-2 font-medium transition-all bg-white text-black shadow-xs hover:bg-secondary/80 h-10 rounded-md text-lg px-8">

                            Schedule Free Consultation

                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>

                        </a>

                    </div>
                </section>

            </main>
        </div>

        @include('partials.footer')

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
