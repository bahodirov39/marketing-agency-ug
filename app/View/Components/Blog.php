<?php

namespace App\View\Components;

use App\Models\Blog as ModelsBlog;
use Illuminate\View\Component;

class Blog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $blogs = ModelsBlog::select(
            "blogs.title_".app()->getlocale() . " as title",
            "blogs.slug_".app()->getlocale() . " as slug",
            "blogs.body_".app()->getlocale() . " as body",
            'blogs.thumbnail_photo',
            'blogs.view',
            "blogs.created_at",
            "categories.category_".app()->getlocale() . " as category_name"
        )
        ->join('categories', 'categories.id', '=', 'blogs.category_id')
        ->orderBy('blogs.order', 'DESC')
        ->get();
        $compact = compact('blogs');
        return view('components.blog', $compact);
    }
}
