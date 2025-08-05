<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;
use URL;

class DashboardNavbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $activeLinkClass
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-navbar');
    }

    public function activeLink(string $route, ?string $link): string
    {
        if (URL::current() === URL::to($route)) {
            return $link ?? '';
        }

        return '';
    }
}
