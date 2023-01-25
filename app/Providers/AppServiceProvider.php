<?php

namespace App\Providers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Services\Settings\SettingsGroup;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')->title('Seiten')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('events')->title('Veranstaltungen')
        );
        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('homepage')->label('Homepage')
        );
    }
}
