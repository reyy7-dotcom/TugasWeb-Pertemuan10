<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Kolom yang dapat diisi secara mass-assignment.
     */
    protected $fillable = [
        'title',
        'body',
        'author',
    ];
}
