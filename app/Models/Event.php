<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Event extends Model implements Sortable
{
  use HasBlocks, HasSlug, HasMedias, HasRevisions, HasPosition, HasSEO;

  protected $fillable = [
    "published",
    "title",
    "description",
    "position",
    "seo_title",
    "seo_description",
    "start_date",
    "end_date",
  ];

  public $slugAttributes = ["title"];
}
