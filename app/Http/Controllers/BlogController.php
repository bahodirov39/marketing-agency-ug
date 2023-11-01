<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blogs($lang, $article = null)
    {
        $lang = app()->getlocale();
        if (!empty($article)) {
            $blogs = Blog::select(
                "blogs.title_".$lang . " as title",
                "blogs.slug_".$lang . " as slug",
                "blogs.body_".$lang . " as body",
                'blogs.thumbnail_photo',
                'blogs.view',
                "blogs.created_at",
                "categories.category_".$lang . " as category_name"
            )
            ->where('categories.slug_'.$lang, $article)
            ->join('categories', 'categories.id', '=', 'blogs.category_id')
            ->orderBy('blogs.order', 'DESC')
            ->get();
        } else {
            $blogs = Blog::select(
                "blogs.title_".$lang . " as title",
                "blogs.slug_".$lang . " as slug",
                "blogs.body_".$lang . " as body",
                'blogs.thumbnail_photo',
                'blogs.view',
                "blogs.created_at",
                "categories.category_".$lang . " as category_name"
            )
            ->join('categories', 'categories.id', '=', 'blogs.category_id')
            ->orderBy('blogs.order', 'DESC')
            ->get();
        }

        $seo_title = __("main.blog") . " - " . __("main.seo_title_main");
        $compact = compact('blogs', 'seo_title');

        return view("pages.blogs", $compact);
    }

    public function blog_single($lang, $slug)
    {
        $lang = app()->getlocale();
        $blog = Blog::select(
            "categories.category_".$lang . " as category",
            "blogs.title_".$lang . " as title",
            "blogs.body_".$lang . " as body",
            "blogs.seo_title_".$lang . " as seo_title",
            "blogs.meta_description_".$lang . " as meta_description",
            "blogs.meta_keywords_".$lang . " as meta_keywords",
            "blogs.created_at",
            DB::raw("blogs.*")
        )->join('categories', 'categories.id', '=', 'blogs.category_id')
        ->where('blogs.slug_'.$lang, $slug)->first();

        $blogs = Blog::select(
            "title_".$lang . " as title",
            "slug_".$lang . " as slug",
            "body_".$lang . " as body",
            DB::raw("blogs.*")
        )->inRandomOrder()->limit(5)->get();

        $blogsTwo = Blog::select(
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

        Blog::where('slug_'.$lang, $slug)->update([
            'view' => DB::raw("view + 1")
        ]);

        $services = Service::select(
            "title_".$lang . " as title",
            "slug_".$lang . " as slug",
            "body_".$lang . " as body",
            "icon",
            "id"
        )->inRandomOrder()->limit(7)->get();

        /*
        $categories = Category::select(
            "categories.slug_".$lang . " as slug",
            "categories.category_".$lang . " as category",
            "categories.id",
            DB::raw("COUNT(blogs.id) as blogsCount"),
        )->join('blogs', 'blogs.category_id', '=', 'categories.id')
        ->groupBy("categories.category_".$lang)
        ->get();
        */
        $categories = [];

        if (empty($blog->seo_title)) {
            $seo_title = __("main.blog") . " - " . $blog->title . " " . __("main.seo_title_main");
        } else {
            $seo_title = $blog->seo_title;
        }


        $compact = compact('blog', 'blogs', 'seo_title', 'services', 'blogsTwo', 'categories');
        return view('pages.blog-details', $compact);
    }
}
