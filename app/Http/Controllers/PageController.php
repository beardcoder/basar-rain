<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\PageRepository;
use Illuminate\View\View;

class PageController extends Controller
{
  public function show(string $slug, PageRepository $pageRepository): View
  {
    $page = $pageRepository->forSlug($slug);

    if (!$page) {
      abort(404);
    }

    $seo = $page->seo;

    return view("site.page", ["item" => $page, "seo" => $seo]);
  }

  public function home(): View
  {
    if (TwillAppSettings::get("homepage.homepage.page")->isNotEmpty()) {
      /** @var \App\Models\Page $frontPage */
      $page = TwillAppSettings::get("homepage.homepage.page")->first();

      if ($page->published) {
        return view("site.page", ["item" => $page]);
      }
    }

    abort(404);
  }
}
