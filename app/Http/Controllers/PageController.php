<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\PageRepository;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\View\View;

class PageController extends Controller
{
  public function show(string $slug, PageRepository $pageRepository): View
  {
    $page = $pageRepository->forSlug($slug);

    SEOTools::setTitle($page->seo_title ?? $page->title);

    if (!$page) {
      abort(404);
    }

    return view("site.page", ["item" => $page]);
  }

  public function home(): View
  {
    if (TwillAppSettings::get("homepage.homepage.page")->isNotEmpty()) {
      /** @var \App\Models\Page $page */
      $page = TwillAppSettings::get("homepage.homepage.page")->first();

      SEOTools::setTitle($page->seo_title ?? $page->title);
      if ($page->published) {
        return view("site.page", ["item" => $page]);
      }
    }

    abort(404);
  }
}
