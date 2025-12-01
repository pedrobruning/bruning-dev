<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations;

    protected $translatable = ['slug', 'title', 'excerpt', 'content'];

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
