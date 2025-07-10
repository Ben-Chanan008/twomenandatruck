<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $disabled = true, 
        public bool $isLink = false,
        public string $link = '#'
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}