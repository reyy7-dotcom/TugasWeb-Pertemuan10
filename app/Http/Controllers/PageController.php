<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Halaman Home — menampilkan data dinamis ke Blade view.
     */
    public function home()
    {
        $posts = Post::latest()->get();

        $data = [
            'title'       => 'Laravel Setup — Tugas Rutin 9',
            'description' => 'Project Laravel untuk memenuhi Tugas Rutin 9 mata kuliah Pemrograman Web.',
            'items'       => [
                'Laravel Framework',
                'Blade Templating',
                'MVC Architecture',
                'Eloquent ORM',
                'Artisan CLI',
            ],
            'posts'       => $posts,
        ];

        return view('home', $data);
    }

    /**
     * Halaman About.
     */
    public function about()
    {
        return view('about', [
            'title' => 'About — Tugas Rutin 9',
        ]);
    }

    /**
     * Halaman Contact.
     */
    public function contact()
    {
        return view('contact', [
            'title' => 'Contact — Tugas Rutin 9',
        ]);
    }

    /**
     * Bonus: Route parameter /hello/{nama}
     */
    public function hello(string $nama)
    {
        return view('hello', [
            'title' => 'Hello — Tugas Rutin 9',
            'nama'  => $nama,
        ]);
    }
}
