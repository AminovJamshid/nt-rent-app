<?php

namespace App\View\Components;

use App\Models\Ad;
use App\Models\Branch;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class AdForm extends Component
{
    public array|Collection $branches = [];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string  $action = '/ads',
        public Ad|null $ad = null,
    ) {
        $this->branches = Branch::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ad-form');
    }
}
