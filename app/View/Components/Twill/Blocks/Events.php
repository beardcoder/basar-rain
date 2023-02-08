<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Models\Block;
use A17\Twill\Services\Forms\Form;
use App\Models\Event;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Events extends TwillBlockComponent
{
  public function render(): View
  {
    $events = Event::orderBy("start_date")->get();
    return view("components.twill.blocks.events", ["events" => $events]);
  }

  public function getForm(): Form
  {
    $form = Form::make();
    $form->add(Input::make()->name("titles"));

    return $form;
  }

  public static function getBlockTitle(?Block $block = null): string
  {
    return "Veranstaltungen";
  }
}
