<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;

    protected $translatable = ['slug', 'title', 'description', 'content'];

    protected $guarded = [];
}
