<?php

namespace App\View\Components;

use App\Models\Collection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Collections extends Component
{
    /**
     * Create a new component instance.
     */
    public $collection;

    public function __construct($collection)
    {
        $this->collection = $collection;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.collections');
    }
}
