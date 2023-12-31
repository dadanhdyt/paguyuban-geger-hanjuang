<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BaseLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $title = null)
    {
        if(!$title) $this->title = config('app.name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base-layout');
    }
}
