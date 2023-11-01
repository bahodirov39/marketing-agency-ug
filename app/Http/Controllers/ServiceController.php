<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function services($lang)
    {
        $lang = app()->getlocale();
        $services = Service::select(
            "title_".$lang . " as title",
            "slug_".$lang . " as slug",
            "body_".$lang . " as body",
            'icon',
            DB::raw("services.*")
        )
        ->orderBy('view')->get();

        $compact = compact('services');
        return view('pages.services', $compact);
    }

    public function service_single($lang, $slug)
    {
        $lang = app()->getlocale();
        $service = Service::select(
            "title_".$lang . " as title",
            "body_".$lang . " as body",
            "seo_title_".$lang . " as seo_title",
            "meta_description_".$lang . " as meta_description",
            "meta_keywords_".$lang . " as meta_keywords",
            DB::raw("services.*")
        )->where('slug_'.$lang, $slug)->first();

        $services = Service::select(
            "title_".$lang . " as title",
            "slug_".$lang . " as slug",
            "body_".$lang . " as body",
            "icon",
            "id"
        )->inRandomOrder()->limit(5)->get();

        Service::where('slug_'.$lang, $slug)->update([
            'view' => DB::raw("view + 1")
        ]);

        if (empty($service->seo_title)) {
            $seo_title = __("main.service") . " - " . $service->title . " " . __("main.seo_title_main");
        } else {
            $seo_title = $service->seo_title;
        }


        $compact = compact('service', 'services', 'seo_title');
        return view('pages.service-details', $compact);
    }
}
