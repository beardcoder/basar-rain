<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Page extends Model implements Sortable
{
  use HasBlocks,
    HasSlug,
    HasMedias,
    HasRevisions,
    HasPosition,
    HasNesting,
    HasSEO;

  protected $fillable = ["published", "title", "description", "in_menu"];

  public $slugAttributes = ["title"];

  public function getDynamicSEOData(): SEOData
  {
    return new SEOData(title: $this->title, description: $this->description);
  }
}
