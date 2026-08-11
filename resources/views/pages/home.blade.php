@extends('layouts.app')

@section('title', 'Craftbyte Studio - App Development')

@section('content')

<section class="bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 text-white py-24 px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-600/10 via-transparent to-purple-600/10"></div>
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <p class="text-indigo-400 font-semibold mb-3 tracking-wide">APP DEVELOPMENT STUDIO</p>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            We build apps people <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">actually use</span>
        </h1>
        <p class="text-lg text-gray-400 mb-8 max-w-2xl mx-auto">
            From idea to app store, Craftbyte Studio designs and builds mobile and web apps for startups that need to move fast.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white px-8 py-3 rounded-lg font-semibold transition shadow-lg shadow-indigo-500/20">
                Start a Project
            </a>
            <a href="/services" class="border border-gray-600 hover:border-gray-400 text-white px-8 py-3 rounded-lg font-semibold transition">
                See Our Work
            </a>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-indigo-600 font-semibold mb-2">WHO WE ARE</p>
            <h2 class="text-3xl font-bold mb-4 text-gray-900">Small team, fast turnaround</h2>
            <p class="text-gray-600 leading-relaxed">
                Craftbyte Studio started with one goal, help small businesses launch real apps without the overhead of a big agency. We handle everything from wireframes to deployment, so you can focus on running your business.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <p class="text-3xl font-bold text-indigo-600">30+</p>
                <p class="text-gray-500 text-sm mt-1">Apps Shipped</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <p class="text-3xl font-bold text-indigo-600">98%</p>
                <p class="text-gray-500 text-sm mt-1">Client Retention</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <p class="text-3xl font-bold text-indigo-600">4</p>
                <p class="text-gray-500 text-sm mt-1">Years Running</p>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <p class="text-3xl font-bold text-indigo-600">24/7</p>
                <p class="text-gray-500 text-sm mt-1">Support</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-indigo-600 font-semibold mb-2">WHAT WE DO</p>
            <h2 class="text-3xl font-bold text-gray-900">Featured Services</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-gray-900">Web Development</h3>
                <p class="text-gray-600 text-sm">Fast, responsive websites built on modern frameworks.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-gray-900">Mobile Development</h3>
                <p class="text-gray-600 text-sm">Native-feeling apps for iOS and Android from one codebase.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h14a2 2 0 012 2v12a4 4 0 01-4 4H7z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2 text-gray-900">UI/UX Design</h3>
                <p class="text-gray-600 text-sm">Interfaces people actually enjoy using, not just look at.</p>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="/services" class="text-indigo-600 font-semibold hover:text-indigo-700">
                View all services &rarr;
            </a>
        </div>
    </div>
</section>

<section class="bg-indigo-600 py-16 px-4">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Got an app idea?</h2>
        <p class="text-indigo-100 mb-8">Let's talk about it. First consult is free, no strings attached.</p>
        <a href="/contact" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition inline-block">
            Book a Free Consult
        </a>
    </div>
</section>

@endsection