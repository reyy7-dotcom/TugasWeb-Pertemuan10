@extends('layouts.app')

@section('title', $title)

@section('content')

{{-- Hero --}}
<div class="text-center mb-10">
    <h1 class="text-4xl font-extrabold text-indigo-700">{{ $title }}</h1>
    <p class="mt-3 text-lg text-gray-600">{{ $description }}</p>
</div>

{{-- Requirement 5: Data Dinamis + @foreach --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-4 text-indigo-800">📋 Teknologi yang Digunakan</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            @foreach ($items as $item)
                <li class="pl-2">{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    {{-- Requirement 6: Model & Database Data --}}
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-4 text-indigo-800">🗄️ Data dari Database (Model Post)</h2>
        @forelse ($posts as $post)
            <div class="border-l-4 border-indigo-500 pl-3 py-1 mb-3">
                <h3 class="font-bold text-gray-800">{{ $post->title }}</h3>
                <p class="text-sm text-gray-600 mt-1">{{ $post->body }}</p>
                <span class="text-xs text-indigo-600">Penulis: {{ $post->author }}</span>
            </div>
        @empty
            <p class="text-sm text-gray-500">Belum ada post di database MySQL.</p>
        @endforelse
    </div>
</div>

{{-- Quick Links --}}
<div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
    <a href="{{ route('about') }}"
       class="block bg-indigo-50 rounded-lg p-5 text-center hover:bg-indigo-100 transition">
        <h3 class="font-bold text-indigo-700">📖 About</h3>
        <p class="text-sm text-gray-500 mt-1">Informasi project ini</p>
    </a>
    <a href="{{ route('contact') }}"
       class="block bg-indigo-50 rounded-lg p-5 text-center hover:bg-indigo-100 transition">
        <h3 class="font-bold text-indigo-700">📬 Contact</h3>
        <p class="text-sm text-gray-500 mt-1">Hubungi developer</p>
    </a>
    <a href="{{ route('hello', ['nama' => 'Reyhan']) }}"
       class="block bg-indigo-50 rounded-lg p-5 text-center hover:bg-indigo-100 transition">
        <h3 class="font-bold text-indigo-700">👋 Hello</h3>
        <p class="text-sm text-gray-500 mt-1">Coba route parameter</p>
    </a>
</div>

@endsection
