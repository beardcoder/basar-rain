<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public function render(): View
    {
        /** @var Page[] $links */
        $links = Page::published()->get()->toTree();

        return view('components.menu', ['links' => $links]);
    }
}
