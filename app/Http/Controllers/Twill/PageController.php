<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;

class PageController extends BaseModuleController
{
  protected function setUpController(): void
  {
    parent::setPermalinkBase("");
    parent::setModuleName("pages");
  }

  protected $indexOptions = [
    "reorder" => true,
  ];

  protected $showOnlyParentItemsInBrowsers = false;
}
