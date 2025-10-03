<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use HasTranslations;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'perex',
        'content',
        'published_at',
        'is_visible',
    ];

    protected $translatable = [
        'title',
        'perex',
        'content',
    ];

    protected $dates = [
        'published_at',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_visible', true)
            ->where('published_at', '<=', now());
    }

    public function casts(): array
    {
        return [
            'is_visible' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
