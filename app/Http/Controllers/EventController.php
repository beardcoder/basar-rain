<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\View\View;

class EventController extends Controller
{
  public function show(string $slug, EventRepository $eventRepository): View
  {
    $page = $eventRepository->forSlug($slug);

    if (!$page) {
      abort(404);
    }

    return view("site.event", ["item" => $page]);
  }
}
