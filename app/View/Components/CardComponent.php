<?php

namespace App\View\Components;

use App\Models\Item;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{

    public $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}
