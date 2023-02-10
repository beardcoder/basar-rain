<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\View\View;

class EventController extends Controller
{
  public function show(string $slug, EventRepository $eventRepository): View
  {
    $page = $eventRepository->forSlug($slug);

    if (!$page) {
      abort(404);
    }
    SEOTools::setTitle($page->seo_title ?? $page->title);

    return view("site.event", ["item" => $page]);
  }
}
