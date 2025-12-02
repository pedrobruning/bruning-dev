<x-app-layout>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">{{ __('About Me') }}</h1>
        
        <div class="prose prose-invert prose-lg mb-12">
            <p>
                {{ __('As a Co-Founder of SeuComportamento, I am integrating artificial intelligence into the project, which helps companies understand employee behavior and improve performance by aligning leadership and follower profiles. As a dedicated Back-End Developer, I have built a solid foundation in Clean Code and software engineering principles.') }}
            </p>
            <p>
                {{ __('My experience spans various technologies, including PHP (OOP), Laravel, JavaScript, Python, MySQL, and REST APIs. I have consistently delivered new features with a focus on scalability and maintainability, utilizing best practices such as Clean Code, Design Patterns, and Test-Driven Development (TDD).') }}
            </p>
        </div>

        <!-- Experience -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {{ __('Professional Experience') }}
            </h2>
            
            <div class="space-y-10 border-l-2 border-slate-800 ml-3 pl-8 relative">
                <!-- EBANX -->
                <div class="relative">
                    <span class="absolute -left-[41px] top-1 w-5 h-5 rounded-full bg-primary border-4 border-slate-900"></span>
                    <h3 class="text-xl font-bold">Software Engineer</h3>
                    <div class="text-primary font-medium mb-1">EBANX</div>
                    <div class="text-sm text-slate-500 mb-4">Apr 2024 – Present • Curitiba, Brazil</div>
                    <ul class="list-disc list-outside ml-4 text-slate-400 space-y-1">
                        <li>{{ __('Develop and maintain features for Anti-Fraud and Chargeback applications.') }}</li>
                        <li>{{ __('Work with a technology stack including OOP, PHP, TDD, and MySQL.') }}</li>
                        <li>{{ __('Collaborate with cross-functional teams to deliver tailored solutions.') }}</li>
                        <li>{{ __('Working on a high TPS application. With avg 100 TPS with a 99.99% uptime.') }}</li>
                        <li>{{ __('Delivered several integrations between EBANX and external services.') }}</li>
                    </ul>
                </div>

                <!-- Seu Comportamento -->
                <div class="relative">
                    <span class="absolute -left-[41px] top-1 w-5 h-5 rounded-full bg-slate-700 border-4 border-slate-900"></span>
                    <h3 class="text-xl font-bold">Co-Founder</h3>
                    <div class="text-primary font-medium mb-1">Seu Comportamento</div>
                    <div class="text-sm text-slate-500 mb-4">Jun 2022 – Present • Curitiba, Brazil</div>
                    <ul class="list-disc list-outside ml-4 text-slate-400 space-y-1">
                        <li>{{ __('Lead the creation of innovative solutions and oversee development.') }}</li>
                        <li>{{ __('Integration of GenAI to generate personalized behavioral reports.') }}</li>
                    </ul>
                </div>

                <!-- ExxonMobil -->
                <div class="relative">
                    <span class="absolute -left-[41px] top-1 w-5 h-5 rounded-full bg-slate-700 border-4 border-slate-900"></span>
                    <h3 class="text-xl font-bold">Full Stack Developer</h3>
                    <div class="text-primary font-medium mb-1">ExxonMobil</div>
                    <div class="text-sm text-slate-500 mb-4">Dec 2021 – Apr 2024 • Curitiba, Brazil</div>
                    <ul class="list-disc list-outside ml-4 text-slate-400 space-y-1">
                        <li>{{ __('Designed and developed REST APIs using .NET 6 and Azure.') }}</li>
                        <li>{{ __('Implemented automated tests using TDD, C#, and Selenium WebDriver.') }}</li>
                        <li>{{ __('Optimized Warehouse Management System leveraging Machine Learning.') }}</li>
                    </ul>
                </div>
                <div class="relative">
                    <span class="absolute -left-[41px] top-1 w-5 h-5 rounded-full bg-slate-700 border-4 border-slate-900"></span>
                    <h3 class="text-xl font-bold">Full Stack Developer</h3>
                    <div class="text-primary font-medium mb-1">VHSYS</div>
                    <div class="text-sm text-slate-500 mb-4">Feb 2020 – Dec 2021 • São José dos Pinhais, Brazil</div>
                    <ul class="list-disc list-outside ml-4 text-slate-400 space-y-1">
                        <li>{{ __('Responsible for analyzing and implementing new tasks, diagnosing and resolving bugs, and assisting other developers.') }}</li>
                        <li>{{ __('Worked on projects related to Laravel, PHP, Python 3 (Chalice), MySQL, JavaScript, React, Vue, AWS (Lambda, S3, SQS).') }}</li>
                        <li>{{ __('Always seeking to implement code following SOLID design principles and implementing various design patterns.') }}</li>
                        <li>{{ __('Worked integrating with banking systems before OpenFinance was a thing in Brazil, handling Finance ERP modules with DRE and other accounting applications.') }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
                {{ __('Education') }}
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Scoras Academy -->
                <div class="bg-slate-800/50 p-6 rounded-xl border border-slate-800">
                    <h3 class="font-bold mb-1">{{ __('AI Agent Development with Pydantic AI Framework') }}</h3>
                    <div class="text-primary text-sm mb-2">Scoras Academy</div>
                    <div class="text-slate-500 text-xs mb-3">Nov 2025 - {{ __('Present') }}</div>
                    <p class="text-slate-400 text-sm">
                        {{ __('Developing robust AI agents using Pydantic AI, a Python framework that provides type safety, automatic data validation, and granular control. The project includes the implementation of system prompts, dependency injection, integration with multiple LLMs (Gemini, Anthropic, OpenRouter, AWS Bedrock), creation of custom tools, and retry/self-correction strategies. Focused on production-grade applications with a modular and scalable architecture.') }}
                    </p>
                </div>

                <!-- SENAI -->
                <div class="bg-slate-800/50 p-6 rounded-xl border border-slate-800">
                    <h3 class="font-bold mb-1">{{ __('Technical Course in Information Technology') }}</h3>
                    <div class="text-primary text-sm mb-2">SENAI</div>
                    <div class="text-slate-500 text-xs mb-3">2017 - 2018</div>
                    <p class="text-slate-400 text-sm mb-2">
                        {{ __('Learned to program applications and develop systems using Java (Primefaces), MySQL, HTML, and CSS. Gained knowledge in system modeling, management, UML, and design patterns.') }}
                    </p>
                    <div class="flex flex-wrap gap-1">
                        <span class="text-xs bg-slate-700 px-2 py-0.5 rounded text-slate-300">MySQL</span>
                        <span class="text-xs bg-slate-700 px-2 py-0.5 rounded text-slate-300">Java</span>
                        <span class="text-xs bg-slate-700 px-2 py-0.5 rounded text-slate-300">JavaScript</span>
                    </div>
                </div>

                <div class="bg-slate-800/50 p-6 rounded-xl border border-slate-800">
                    <h3 class="font-bold mb-1">Postgraduate in Artificial Intelligence</h3>
                    <div class="text-primary text-sm mb-2">UTFPR</div>
                    <div class="text-slate-500 text-xs mb-3">Nov 2024 - May 2026</div>
                    <p class="text-slate-400 text-sm">
                        {{ __('Specialization focused on AI software development for robotics, data analysis, speech and image recognition, big data engineering, and business strategy consulting. Covers Python, Machine Learning, Deep Learning, Natural Language Processing, Computer Vision, and Neural Networks.') }}
                    </p>
                </div>
                <div class="bg-slate-800/50 p-6 rounded-xl border border-slate-800">
                    <h3 class="font-bold mb-1">Bachelor's Degree in Information Systems</h3>
                    <div class="text-primary text-sm mb-2">UniSenaiPR</div>
                    <div class="text-slate-500 text-xs mb-3">Feb 2019 - Oct 2022</div>
                    <p class="text-slate-400 text-sm">
                        {{ __('Comprehensive curriculum covering Software Engineering, Data Science, Algorithms, Computer Architecture, Object-Oriented Systems, Front-End & Back-End Development, Database Management (Relational & NoSQL), UX/UI Design, Mobile Development, Cloud Computing, IoT, Artificial Intelligence, Machine Learning, Computer Vision, Cybersecurity, and DevOps.') }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section>
            <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                {{ __('Skills') }}
            </h2>
            
            <div class="flex flex-wrap gap-2">
                @foreach(['PHP', 'Laravel', 'Filament', 'Python', 'Java', 'C#', '.NET', 'MySQL', 'REST APIs', 'Terraform', 'AWS', 'LLMs', 'GenAI', 'TDD', 'Clean Code', 'Design Patterns'] as $skill)
                    <span class="px-3 py-1 bg-slate-800 text-slate-300 rounded-full text-sm border border-slate-700 hover:border-primary/50 hover:text-white transition-colors cursor-default">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>
    </div>
</x-app-layout>
