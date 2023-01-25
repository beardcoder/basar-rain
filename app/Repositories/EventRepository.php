<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Event;

class EventRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleRevisions;

    public function __construct(Event $model)
    {
        $this->model = $model;
    }
}
