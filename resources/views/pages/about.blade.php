@extends('layouts.app')

@section('title', 'About - Craftbyte Studio')

@section('content')

<section class="bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 text-white py-20 px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-600/10 via-transparent to-purple-600/10"></div>
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <p class="text-indigo-400 font-semibold mb-3 tracking-wide">ABOUT US</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            The story behind <span class="bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Craftbyte</span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            A small studio built on one simple idea, that good software should feel effortless to use.
        </p>
    </div>
</section>

<section class="py-20 px-4 bg-white">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-indigo-600 font-semibold mb-2">OUR HISTORY</p>
            <h2 class="text-3xl font-bold mb-4 text-gray-900">How we started</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Craftbyte Studio began as a two-person team working out of a small apartment, building apps for local businesses that big agencies wouldn't take on. What started as freelance work turned into a full studio once word got around about the quality of what we shipped.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Today, we work with startups and small businesses who need a development partner that moves at their pace, not the other way around.
            </p>
        </div>
        <div class="bg-gray-50 rounded-2xl p-8">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <p class="text-3xl font-bold text-indigo-600">2021</p>
                    <p class="text-gray-500 text-sm mt-1">Founded</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-indigo-600">30+</p>
                    <p class="text-gray-500 text-sm mt-1">Apps Shipped</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-indigo-600">12</p>
                    <p class="text-gray-500 text-sm mt-1">Team Members</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-indigo-600">98%</p>
                    <p class="text-gray-500 text-sm mt-1">Client Retention</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow-sm">
            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Our Mission</h3>
            <p class="text-gray-600 leading-relaxed">
                To help small businesses and startups launch real, working apps without the cost and slowness of a traditional agency.
            </p>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow-sm">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 text-gray-900">Our Vision</h3>
            <p class="text-gray-600 leading-relaxed">
                To be the studio that businesses in our community turn to first when they have an idea worth building.
            </p>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-white">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-indigo-600 font-semibold mb-2">WHAT WE STAND FOR</p>
            <h2 class="text-3xl font-bold text-gray-900">Core Values</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-indigo-600 font-bold text-xl">1</span>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Honesty</h3>
                <p class="text-gray-600 text-sm">We tell clients what they need to hear, not just what sounds good.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-indigo-600 font-bold text-xl">2</span>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Craftsmanship</h3>
                <p class="text-gray-600 text-sm">Every line of code and every screen gets the same level of care.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-indigo-600 font-bold text-xl">3</span>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Speed</h3>
                <p class="text-gray-600 text-sm">We move fast without cutting corners on quality.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-indigo-600 font-bold text-xl">4</span>
                </div>
                <h3 class="font-semibold mb-2 text-gray-900">Partnership</h3>
                <p class="text-gray-600 text-sm">We treat every project like it's our own business on the line.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-indigo-600 font-semibold mb-2">MEET THE TEAM</p>
            <h2 class="text-3xl font-bold text-gray-900">The people behind Craftbyte</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                <img src="{{ asset('images/team/patrick.png') }}" alt="Patrick Goco" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                <h3 class="font-semibold text-gray-900">Patrick Goco</h3>
                <p class="text-indigo-600 text-sm mb-2">Founder & Lead Developer</p>
                <p class="text-gray-500 text-sm">Handles full-stack development and client architecture decisions.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                <img src="{{ asset('images/team/dianna.jpg') }}" alt="Dianna Ramillo" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                <h3 class="font-semibold text-gray-900">Dianna Ramillo</h3>
                <p class="text-indigo-600 text-sm mb-2">UI/UX Designer</p>
                <p class="text-gray-500 text-sm">Leads design direction and user experience research.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm">
                <img src="{{ asset('images/team/zamuelle.png') }}" alt="Zamuelle Lorenzo" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover">
                <h3 class="font-semibold text-gray-900">Zamuelle Lorenzo</h3>
                <p class="text-indigo-600 text-sm mb-2">Project Manager</p>
                <p class="text-gray-500 text-sm">Keeps every project on time and on budget.</p>
            </div>
        </div>
    </div>
</section>

@endsection