@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="text-center py-16">
    <h1 class="text-5xl font-extrabold text-indigo-700">
        👋 Halo, {{ $nama }}!
    </h1>
    <p class="mt-4 text-lg text-gray-600">
        Selamat datang di project Laravel — Tugas Rutin 9.
    </p>

    <div class="mt-8">
        <a href="{{ route('home') }}"
           class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
            ← Kembali ke Home
        </a>
    </div>
</div>

@endsection
