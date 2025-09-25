<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomePosts extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = Post::active()
            ->orderBy('published_at', 'desc')
            ->limit(2)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-posts');
    }
}