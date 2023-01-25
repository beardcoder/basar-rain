<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
    protected function setUpController(): void
    {
        parent::setPermalinkBase('');
        parent::setModuleName('pages');
    }


    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $showOnlyParentItemsInBrowsers = false;
}
