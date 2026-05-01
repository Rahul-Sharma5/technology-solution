<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Analytics</title>

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
                                Data Analytics &amp; AI
                            </span>

                            <!-- Heading -->
                            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-6">
                                Turn Data Into
                                <span class="block text-primary mt-2">
                                    Actionable Intelligence
                                </span>
                            </h1>

                            <!-- Description -->
                            <p class="text-xl text-muted-foreground mb-8">
                                Harness the power of your data with advanced analytics and artificial intelligence.
                                Make smarter decisions, predict outcomes, and drive business growth.
                            </p>

                            <!-- Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4">

                                <!-- Primary Button -->
                                <a href="/#contact"
                                    class="inline-flex items-center justify-center gap-2 font-medium transition-all bg-black text-white shadow-xs hover:bg-gray-800 h-10 rounded-md text-lg px-8">

                                    Start Your Data Journey

                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>

                                </a>

                                <!-- Secondary Button -->
                                <a href="/#services"
                                    class="inline-flex items-center justify-center gap-2 font-medium transition-all border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground h-10 rounded-md text-lg px-8">
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
                                    Data-Driven Success Starts Here
                                </h2>

                                <p class="text-lg text-muted-foreground mb-6">
                                    In today's competitive landscape, data is your most valuable asset.
                                    Our data analytics and AI solutions help you extract maximum value from your data.
                                </p>

                                <p class="text-lg text-muted-foreground mb-8">
                                    From business intelligence dashboards to sophisticated machine learning models,
                                    we provide the tools and expertise to transform how you use data.
                                </p>

                                <!-- Features -->
                                <div class="grid grid-cols-2 gap-6">

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Real-Time Insights</div>
                                            <div class="text-sm text-muted-foreground">Make faster decisions</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Predictive Power</div>
                                            <div class="text-sm text-muted-foreground">Forecast outcomes</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">AI Integration</div>
                                            <div class="text-sm text-muted-foreground">Smart automation</div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-primary mt-1 flex-shrink-0" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <div>
                                            <div class="font-semibold">Expert Guidance</div>
                                            <div class="text-sm text-muted-foreground">Certified analysts</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Right Stats -->
                            <div class="grid grid-cols-2 gap-4">

                                <div class="bg-primary/5 border border-primary/10 rounded-xl py-6 shadow-sm">
                                    <div class="px-6">
                                        <div class="text-4xl font-bold text-primary mb-2">10x</div>
                                        <div class="text-sm text-muted-foreground">Faster Insights</div>
                                    </div>
                                </div>

                                <div class="bg-primary/5 border border-primary/10 rounded-xl py-6 shadow-sm">
                                    <div class="px-6">
                                        <div class="text-4xl font-bold text-primary mb-2">95%</div>
                                        <div class="text-sm text-muted-foreground">Model Accuracy</div>
                                    </div>
                                </div>

                                <div class="bg-primary/5 border border-primary/10 rounded-xl py-6 shadow-sm">
                                    <div class="px-6">
                                        <div class="text-4xl font-bold text-primary mb-2">50+</div>
                                        <div class="text-sm text-muted-foreground">Data Sources</div>
                                    </div>
                                </div>

                                <div class="bg-primary/5 border border-primary/10 rounded-xl py-6 shadow-sm">
                                    <div class="px-6">
                                        <div class="text-4xl font-bold text-primary mb-2">24/7</div>
                                        <div class="text-sm text-muted-foreground">Monitoring</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Header -->
                        <div class="text-center mb-16">
                            <span
                                class="inline-block px-3 py-1 text-xs font-medium rounded-md bg-primary text-white mb-4">
                                Our Services
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Comprehensive Data & AI Solutions
                            </h2>

                            <p class="text-xl text-gray-500 max-w-2xl mx-auto">
                                End-to-end data analytics services from collection to insights.
                            </p>
                        </div>

                        <!-- Grid -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- Card 1 -->
                            <div class="bg-white rounded-xl border shadow-sm p-6 hover:shadow-lg transition">
                                <div class="mb-4 flex items-center justify-center w-12 h-12 bg-primary/10 rounded-lg">
                                    <!-- Icon -->
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Business Intelligence</h3>
                                <p class="text-gray-500 text-sm mb-4">
                                    Transform raw data into actionable insights with interactive dashboards and reports
                                </p>
                                <div class="flex flex-wrap gap-2 text-xs">
                                    <span class="px-2 py-1 bg-gray-100 rounded">Power BI</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">Tableau</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">Looker</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">Grafana</span>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white rounded-xl border shadow-sm p-6 hover:shadow-lg transition">
                                <div class="mb-4 flex items-center justify-center w-12 h-12 bg-primary/10 rounded-lg">
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Machine Learning</h3>
                                <p class="text-gray-500 text-sm mb-4">
                                    Build predictive models and intelligent systems that learn from data
                                </p>
                                <div class="flex flex-wrap gap-2 text-xs">
                                    <span class="px-2 py-1 bg-gray-100 rounded">TensorFlow</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">PyTorch</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">Scikit-learn</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">XGBoost</span>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white rounded-xl border shadow-sm p-6 hover:shadow-lg transition">
                                <div class="mb-4 flex items-center justify-center w-12 h-12 bg-primary/10 rounded-lg">
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Data Warehousing</h3>
                                <p class="text-gray-500 text-sm mb-4">
                                    Centralize and organize your data for efficient querying and analysis
                                </p>
                                <div class="flex flex-wrap gap-2 text-xs">
                                    <span class="px-2 py-1 bg-gray-100 rounded">Snowflake</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">Redshift</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">BigQuery</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">Azure Synapse</span>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white rounded-xl border shadow-sm p-6 hover:shadow-lg transition">
                                <div class="mb-4 flex items-center justify-center w-12 h-12 bg-primary/10 rounded-lg">
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Predictive Analytics</h3>
                                <p class="text-gray-500 text-sm mb-4">
                                    Forecast trends and outcomes with advanced statistical modeling
                                </p>
                                <div class="flex flex-wrap gap-2 text-xs">
                                    <span class="px-2 py-1 bg-gray-100 rounded">Python</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">R</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">SAS</span>
                                    <span class="px-2 py-1 bg-gray-100 rounded">SPSS</span>
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
                                class="inline-flex items-center justify-center rounded-md px-2 py-0.5 text-xs font-medium bg-primary text-white mb-4">
                                Features
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Why Choose Our Data Solutions
                            </h2>
                        </div>

                        <!-- Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="6"></circle>
                                            <circle cx="12" cy="12" r="2"></circle>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl">Custom Solutions</h3>
                                </div>
                                <div class="px-6">
                                    <p class="text-gray-500">Tailored analytics to your specific business questions and
                                        goals</p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl">Real-Time Insights</h3>
                                </div>
                                <div class="px-6">
                                    <p class="text-gray-500">Live dashboards and instant data updates for timely
                                        decisions</p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl">Data Security</h3>
                                </div>
                                <div class="px-6">
                                    <p class="text-gray-500">Enterprise-grade security with encryption and access
                                        controls</p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl">Expert Team</h3>
                                </div>
                                <div class="px-6">
                                    <p class="text-gray-500">Certified data scientists and BI analysts with deep domain
                                        expertise</p>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 6v6l4 2"></path>
                                            <circle cx="12" cy="12" r="10"></circle>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl">Quick Deployment</h3>
                                </div>
                                <div class="px-6">
                                    <p class="text-gray-500">Rapid implementation with pre-built templates and
                                        accelerators</p>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm text-center">
                                <div class="px-6">
                                    <div
                                        class="h-16 w-16 rounded-full bg-primary/10 flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                            </path>
                                            <path d="M9 18h6"></path>
                                            <path d="M10 22h4"></path>
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-xl">Innovation Focus</h3>
                                </div>
                                <div class="px-6">
                                    <p class="text-gray-500">Cutting-edge AI/ML techniques for competitive advantage
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
                    <div class="container mx-auto">

                        <!-- Header -->
                        <div class="text-center mb-16">
                            <span
                                class="inline-flex items-center justify-center rounded-md px-2 py-0.5 text-xs font-medium bg-primary text-white mb-4">
                                Use Cases
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Real-World Applications
                            </h2>
                        </div>

                        <!-- Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                            <!-- Card 1 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <h3 class="leading-none font-semibold text-lg">Customer Analytics</h3>
                                    <p class="text-gray-500 text-sm mt-2">
                                        Understand customer behavior, segment audiences, and personalize experiences
                                    </p>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <h3 class="leading-none font-semibold text-lg">Sales Forecasting</h3>
                                    <p class="text-gray-500 text-sm mt-2">
                                        Predict sales trends and optimize inventory and resource allocation
                                    </p>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <h3 class="leading-none font-semibold text-lg">Risk Assessment</h3>
                                    <p class="text-gray-500 text-sm mt-2">
                                        Identify and mitigate risks with predictive models and anomaly detection
                                    </p>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <h3 class="leading-none font-semibold text-lg">Operational Efficiency</h3>
                                    <p class="text-gray-500 text-sm mt-2">
                                        Optimize processes, reduce costs, and improve productivity with data insights
                                    </p>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <h3 class="leading-none font-semibold text-lg">Market Analysis</h3>
                                    <p class="text-gray-500 text-sm mt-2">
                                        Analyze market trends, competitor activities, and identify growth opportunities
                                    </p>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="bg-white flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="px-6">
                                    <h3 class="leading-none font-semibold text-lg">Predictive Maintenance</h3>
                                    <p class="text-gray-500 text-sm mt-2">
                                        Anticipate equipment failures and schedule maintenance proactively
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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground mb-4">
                                Process
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Our Analytics Implementation Process
                            </h2>

                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                                A structured approach to delivering data-driven value.
                            </p>
                        </div>

                        <!-- Grid -->
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                            <!-- Card 1 -->
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">01</div>
                                    <div class="font-semibold text-xl relative z-10">Data Assessment</div>
                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Evaluate your data sources, quality, and infrastructure to determine readiness
                                        for analytics.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">02</div>
                                    <div class="font-semibold text-xl relative z-10">Strategy &amp; Design</div>
                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Define KPIs, design data architecture, and create implementation roadmap.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">03</div>
                                    <div class="font-semibold text-xl relative z-10">Implementation</div>
                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Build data pipelines, develop models, and create dashboards and reports.
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm relative">
                                <div class="grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
                                    <div class="text-5xl font-bold text-primary/20 absolute top-4 right-4">04</div>
                                    <div class="font-semibold text-xl relative z-10">Optimization</div>
                                    <div class="text-muted-foreground text-sm relative z-10">
                                        Monitor performance, refine models, and continuously improve analytics
                                        solutions.
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
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground mb-4">
                                Industries
                            </span>

                            <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                Industries We Serve
                            </h2>
                        </div>

                        <!-- Badges -->
                        <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto">

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Finance &amp; Banking
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Healthcare &amp; Pharmaceuticals
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Retail &amp; E-commerce
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Manufacturing
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Telecommunications
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Insurance
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Logistics &amp; Supply Chain
                            </span>

                            <span
                                class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground px-6 py-3 text-base">
                                Energy &amp; Utilities
                            </span>

                        </div>
                    </div>
                </section>

                <section class="py-20 px-4 sm:px-6 lg:px-8">
                    <div class="container mx-auto">
                        <div class="max-w-4xl mx-auto">

                            <!-- Header -->
                            <div class="text-center mb-12">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-primary-foreground mb-4">
                                    Benefits
                                </span>

                                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                                    Transform Your Business with Data
                                </h2>
                            </div>

                            <!-- Card -->
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
                                <div class="p-8">

                                    <ul class="space-y-4">

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Make data-driven decisions faster and more
                                                accurately</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Identify hidden patterns and trends in your
                                                data</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Predict future outcomes and plan strategically</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Improve customer satisfaction and retention</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Reduce operational costs and inefficiencies</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Discover new revenue opportunities</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Gain competitive advantage with AI-powered
                                                insights</span>
                                        </li>

                                        <li class="flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="lucide lucide-circle-check h-6 w-6 text-primary flex-shrink-0 mt-1"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            <span class="text-lg">Automate repetitive data analysis tasks</span>
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
                            Ready to Unlock Your Data's Potential?
                        </h2>

                        <p class="text-xl text-primary-foreground/80 max-w-2xl mx-auto mb-8">
                            Let's discuss how data analytics and AI can transform your business decisions.
                        </p>

                        <a href="/#contact"
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white text-black shadow-xs hover:bg-secondary/80 h-10 rounded-md text-lg px-8">

                            Schedule Free Consultation

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

        @include('partials.footer')

    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
