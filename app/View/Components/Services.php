<?php

namespace App\View\Components;

use App\Models\Service;
use Illuminate\View\Component;

class Services extends Component
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
        $services = Service::select(
            "title_".app()->getlocale() . " as title",
            "slug_".app()->getlocale() . " as slug",
            "body_".app()->getlocale() . " as body",
            'icon'
        )
        ->orderBy('order', 'DESC')
        ->get();
        $compact = compact('services');
        return view('components.services', $compact);
    }
}
