<?php

/*
 * This file is part of TaCraft-Sociality/flarum-id-slug.
 *
 * Copyright (c) TaCraft-Sociality.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TaCraftSociality\IdSlug;

use Flarum\Discussion\Discussion;
use Flarum\Extend;
use TaCraftSociality\IdSlug\Discussion\DiscussionIdDriver;

return [
    (new Extend\ModelUrl(Discussion::class))
        ->addSlugDriver('id', DiscussionIdDriver::class)
];