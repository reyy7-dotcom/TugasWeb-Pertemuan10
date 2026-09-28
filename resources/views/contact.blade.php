@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6">📬 Contact</h1>

    <div class="bg-white rounded-xl shadow p-6 space-y-4 text-gray-700">
        <p>Hubungi developer project ini untuk pertanyaan atau masukan:</p>

        <div class="border rounded-lg divide-y">
            <div class="flex items-center px-4 py-3">
                <span class="w-24 font-semibold text-gray-600">Nama</span>
                <span>Reyhan</span>
            </div>
            <div class="flex items-center px-4 py-3">
                <span class="w-24 font-semibold text-gray-600">Email</span>
                <span>reyhan@example.com</span>
            </div>
            <div class="flex items-center px-4 py-3">
                <span class="w-24 font-semibold text-gray-600">Mata Kuliah</span>
                <span>Pemrograman Web</span>
            </div>
            <div class="flex items-center px-4 py-3">
                <span class="w-24 font-semibold text-gray-600">Tugas</span>
                <span>Tugas Rutin 9 — Setup Laravel</span>
            </div>
        </div>
    </div>
</div>

@endsection
