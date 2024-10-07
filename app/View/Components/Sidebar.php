<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $links;

    public function __construct($title = 'Admin Account', $links = [])
    {
        $this->title = $title;
        $this->links = $links;
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
