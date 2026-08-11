@extends('layouts.app')

@section('title', 'Services - Craftbyte Studio')

@section('content')

<section class="bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 text-white py-20 px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-600/10 via-transparent to-purple-600/10"></div>
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <p class="text-indigo-400 font-semibold mb-3 tracking-wide">WHAT WE OFFER</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Services built for <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">growing businesses</span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            From your first prototype to a fully scaled product, we've got the skillset to take it there.
        </p>
    </div>
</section>

<section class="py-20 px-4 bg-white">
    <div class="max-w-6xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
            <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2 text-gray-900">Web Development</h3>
            <p class="text-gray-600 text-sm leading-relaxed">Fast, responsive websites built on modern frameworks like Laravel and React, designed to scale with your business.</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
            <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2 text-gray-900">Mobile Development</h3>
            <p class="text-gray-600 text-sm leading-relaxed">Native-feeling apps for iOS and Android built from a single codebase, so you launch on both platforms faster.</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
            <div class="w-14 h-14 bg-pink-100 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h14a2 2 0 012 2v12a4 4 0 01-4 4H7z" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2 text-gray-900">UI/UX Design</h3>
            <p class="text-gray-600 text-sm leading-relaxed">Interfaces designed around how people actually use your product, not just how it looks in a mockup.</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
            <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.9A6 6 0 003 15z" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2 text-gray-900">Cloud Solutions</h3>
            <p class="text-gray-600 text-sm leading-relaxed">Cloud infrastructure setup and migration so your app stays fast, reliable, and ready to scale.</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
            <div class="w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2 text-gray-900">Cybersecurity</h3>
            <p class="text-gray-600 text-sm leading-relaxed">Security audits and best practices baked into every project, so vulnerabilities get caught before launch.</p>
        </div>

        <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-lg transition">
            <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-5">
                <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-2.13a4 4 0 10-4-4 4 4 0 004 4zm6 0a4 4 0 10-4-4" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2 text-gray-900">IT Consulting</h3>
            <p class="text-gray-600 text-sm leading-relaxed">Strategic guidance on tech stack decisions, team processes, and how to plan your product roadmap.</p>
        </div>

    </div>
</section>

<section class="bg-indigo-600 py-16 px-4">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Not sure which service fits?</h2>
        <p class="text-indigo-100 mb-8">Tell us about your project and we'll point you in the right direction.</p>
        <a href="/contact" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition inline-block">
            Talk to Us
        </a>
    </div>
</section>

@endsection