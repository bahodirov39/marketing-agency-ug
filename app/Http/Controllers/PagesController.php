<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index($lang = null)
    {
        $lang = app()->getlocale();
        $services = Service::orderBy('order', 'DESC')->orderBy("order")->limit(4)->get();
        $teams = Team::orderBy('order', 'DESC')->get();
        $testimonals = Testimonal::where('rating', 5)->orderBy('created_at', 'DESC')->get();
        $blogs = Blog::select(
            DB::raw("blogs.*"),
            DB::raw('categories.category_'.app()->getlocale() . ' as category_name')
        )->join("categories", 'categories.id', '=', 'blogs.category_id')
        ->orderBy('blogs.created_at', 'DESC')
        ->limit(3)
        ->get();

        $compact = compact('services', 'teams', 'testimonals', 'blogs');
        return view('home', $compact);
    }

    public function lang($locale)
    {
        if (!in_array($locale, ['uz', 'ru', 'en'])) {
            abort(400);
        }
        App::setLocale($locale);
        return redirect()->back();
    }

    public function project($name = null)
    {
        if (empty($name)) {
            return redirect()->home();
        }
        $lang = app()->getlocale();
        $name == "starter" ? $who = "starter" : $who = "businessman";

        $header = __("main." . $who . "_project_to_header");
        $body = __("main." . $who . "_project_to_body");
        $feature_who = __("main." . $who . "_project_for_whom");

        $compact = compact('header', 'body', 'feature_who');
        return view('pages.project-details', $compact);
    }
}
