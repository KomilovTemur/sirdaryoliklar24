<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_top',
        'img_top',
        'url_top',
        'title_sidebar',
        'img_sidebar',
        'url_sidebar',
    ];
}
