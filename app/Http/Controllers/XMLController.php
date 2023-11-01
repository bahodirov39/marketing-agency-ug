<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use SimpleXMLElement;

class XMLController extends Controller
{
    public function index()
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><ym_catalog></ym_catalog>');
        $blog_uz = Blog::select('title_uz', 'slug_uz')->get();
        $blog_ru = Blog::select('title_ru', 'slug_ru')->get();
        $services_uz = Service::select('title_uz', 'slug_uz')->get();
        $services_ru = Service::select('title_ru', 'slug_ru')->get();
        $locale = app()->getLocale();

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/uz");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/ru/testimonal");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/uz/testimonal");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/uz/services");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/ru/services");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/uz/articles");
        $url->addChild('priority', "0.9");

        $url = $xml->addChild('url');
        $url->addChild('loc', "https://uniongroup.uz/ru/articles");
        $url->addChild('priority', "0.9");

        foreach ($blog_ru as $key => $value) {
            $url = $xml->addChild('url');
            $url->addChild('loc', "https://uniongroup.uz/ru/article/".$value->slug_ru);
            $url->addChild('priority', "0.9");
        }

        foreach ($blog_uz as $key => $value) {
            $url = $xml->addChild('url');
            $url->addChild('loc', "https://uniongroup.uz/uz/article/".$value->slug_uz);
            $url->addChild('priority', "0.9");
        }

        foreach ($services_ru as $key => $value) {
            $url = $xml->addChild('url');
            $url->addChild('loc', "https://uniongroup.uz/ru/service/".$value->slug_ru);
            $url->addChild('priority', "0.9");
        }

        foreach ($services_uz as $key => $value) {
            $url = $xml->addChild('url');
            $url->addChild('loc', "https://uniongroup.uz/uz/service/".$value->slug_uz);
            $url->addChild('priority', "0.9");
        }

        $xmlString = $xml->asXML();
        return response($xmlString, 200)->header('Content-Type', 'application/xml');
    }
}
