<?php

namespace App\View\Components;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function render(): View
    {
        /** @var Page[] $links */
        $links = TwillAppSettings::get('homepage.footer.pages');

        return view('components.footer', ['links' => $links]);
    }
}
