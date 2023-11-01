<?php

namespace App\View\Components;

use App\Models\Testimonal;
use Illuminate\View\Component;

class Client extends Component
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
        $testimonals = Testimonal::whereIn("rating", ['3', '4', '5'])->inRandomOrder()->limit(5)->get();
        $compact = compact('testimonals');
        return view('components.client', $compact);
    }
}
