<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\SchemaOrg\Schema;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     */
    public function index()
    {
        $posts = Post::active()
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        // SEO meta for posts listing
        seo()->title(__('pages.posts.index.title'));
        seo()->description(__('pages.posts.index.description'));

        // JSON-LD schema for the posts listing page
        $schema = Schema::webPage()
            ->name(__('pages.posts.index.title'))
            ->description(__('pages.posts.index.description'));

        seo()->jsonLdImport($schema);

        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified post.
     */
    public function show(string $slug)
    {
        $post = Post::active()
            ->where('slug', $slug)
            ->firstOrFail();

        $locale = app()->getLocale();

        // SEO meta for post detail
        seo()->title($post->getTranslation('title', $locale));
        seo()->description($post->getTranslation('perex', $locale) ?? '');

        // JSON-LD schema for the post detail page
        $imageUrl = $post->getFirstMediaUrl('image');
        $schema = Schema::blogPosting()
            ->headline($post->getTranslation('title', $locale))
            ->datePublished(optional($post->published_at)->toIso8601String())
            ->image($imageUrl ?: null)
            ->articleBody(strip_tags($post->getTranslation('content', $locale)))
            ->publisher(
                Schema::organization()
                    ->name('Transport2Airport')
                    ->logo('/img/logo-icon.svg')
            );

        seo()->jsonLdImport($schema);

        return view('posts.show', compact('post'));
    }
}
