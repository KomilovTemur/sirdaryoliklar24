<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title_uz',
        'title_ru',
        'body_uz',
        'body_ru',
        'description_uz',
        'description_ru',
        'image',
        'slug',
        'is_special',
        'view',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);   
    }

    // Birga bir Boglanish hasOne, -> hasOne ga qarshi ulash belongsTo ;
    // Birga Kop Boglanish hasMany, -> hasMany ga qarshi ulash ham belongsTo ;
    // Kopga kop Boglanish belongsToMany, -> belongsToMany ga qarshi ulash ham belongsToMany ;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function boot()
    {
        parent::boot();
        static::saving(function ($post){
            $post->slug = \Str::slug($post->title_uz);
        });
    }

}
