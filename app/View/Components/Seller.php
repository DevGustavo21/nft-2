<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class Seller extends Component
{
    /**
     * The list of users (sellers).
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    public $users;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('components.seller');
    }
}
