<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel — TR9')</title>
    {{-- Bonus: Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50 text-gray-800 flex flex-col">

    {{-- Navbar --}}
    <nav class="bg-indigo-600 text-white shadow">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-lg font-bold tracking-wide">📘 TR9 Laravel</a>
            <div class="space-x-4 text-sm">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('about') }}" class="hover:underline">About</a>
                <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
                <a href="{{ route('hello', ['nama' => 'Reyhan']) }}" class="hover:underline">Hello</a>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="flex-1 max-w-5xl mx-auto w-full px-4 py-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-100 border-t text-center text-sm text-gray-500 py-4">
        &copy; {{ date('Y') }} — Tugas Rutin 9 | Laravel {{ app()->version() }}
    </footer>

</body>
</html>
