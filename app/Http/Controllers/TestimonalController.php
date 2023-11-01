<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Testimonal;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{
    public function index()
    {
        $seo_title = __("main.request") . " - " . __("main.seo_title_main");
        $compact = compact('seo_title');
        return view('pages.request', $compact);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rating' => 'required',
            'body' => 'required',
        ]);

        Testimonal::create($request->all());
        return redirect()->back();
    }

    public function toTelegram(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);

        $botToken = "2045897120:AAFq05j3AajQQwWTb5KU7C4BRKnMma7I3IE";
        $chat_id = "@plpachannel";
        $smile = '👉';
        //$link = "http://extab.uz/fullpage.php?id=".$idd;
        $caption = "📞 Tel raqam: ".$request->phone.PHP_EOL;//$smile.' '.$link;
        $photo = "https://c4.wallpaperflare.com/wallpaper/394/308/979/leonardo-dicaprio-leonardo-dicaprio-the-wolf-of-wall-street-jordan-belfort-wallpaper-preview.jpg";
        $bot_url = "https://api.telegram.org/bot$botToken/";
        $url = $bot_url."sendPhoto?chat_id=".$chat_id."&photo=".urlencode($photo)."&caption=".urlencode($caption);
        file_get_contents($url);

        Message::create([
            'phone' => $request->phone
        ]);

        return redirect()->back()->with('success', 'success');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);

        !empty($request->name) ? $name = $request->name : $name = " ";
        !empty($request->message) ? $message = $request->message : $message = " ";
        !empty($request->service) ? $service = $request->service : $service = " ";

        $botToken = "2045897120:AAFq05j3AajQQwWTb5KU7C4BRKnMma7I3IE";
        $chat_id = "@plpachannel";
        $smile = '👉';
        //$link = "http://extab.uz/fullpage.php?id=".$idd;
        $caption = "📞 Tel raqam: ".$request->phone.PHP_EOL . "💻 Ism: ".$name.PHP_EOL . "📩 Xabar: ".$message.PHP_EOL . "🗂 Servis: ".$service.PHP_EOL;//$smile.' '.$link;
        $photo = "https://c4.wallpaperflare.com/wallpaper/394/308/979/leonardo-dicaprio-leonardo-dicaprio-the-wolf-of-wall-street-jordan-belfort-wallpaper-preview.jpg";
        $bot_url = "https://api.telegram.org/bot$botToken/";
        $url = $bot_url."sendPhoto?chat_id=".$chat_id."&photo=".urlencode($photo)."&caption=".urlencode($caption);
        file_get_contents($url);

        Message::create($request->all());

        return redirect()->back()->with('success', 'success');
    }
}
