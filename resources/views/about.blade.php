@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">📖 About</h1>

    <div class="bg-white rounded-xl shadow p-6 space-y-4 text-gray-700 leading-relaxed">
        <p>
            Project ini dibuat untuk memenuhi <strong>Tugas Rutin 9 (TR9)</strong> — Setup Laravel
            pada mata kuliah <strong>Pemrograman Web</strong>.
        </p>

        <h2 class="text-lg font-semibold text-gray-800">🎯 Tujuan</h2>
        <ul class="list-disc list-inside space-y-1">
            <li>Menginstall dan mengkonfigurasi Laravel</li>
            <li>Menghubungkan project ke database MySQL</li>
            <li>Membuat route, controller, model, dan view (MVC)</li>
            <li>Menampilkan data dinamis menggunakan Blade</li>
        </ul>

        <h2 class="text-lg font-semibold text-gray-800">🛠 Teknologi</h2>
        <ul class="list-disc list-inside space-y-1">
            <li>PHP {{ phpversion() }}</li>
            <li>Laravel {{ app()->version() }}</li>
            <li>MySQL / MariaDB</li>
            <li>Tailwind CSS (CDN)</li>
            <li>Blade Templating Engine</li>
        </ul>
    </div>
</div>

@endsection
