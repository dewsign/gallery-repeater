<?php

namespace Dewsign\GalleryRepeater;

use Illuminate\Database\Eloquent\Model;
use Dewsign\NovaRepeaterBlocks\Traits\IsRepeaterBlock;
use Dewsign\NovaRepeaterBlocks\Traits\HasRepeaterBlocks;

class Gallery extends Model
{
    use IsRepeaterBlock;
    use HasRepeaterBlocks;

    protected $table = 'nrb_galleries';

    public static $repeaterBlockViewTemplate = 'gallery-repeater::gallery';

    public static function types()
    {
        return [
            \Dewsign\GalleryRepeater\Nova\Item::class,
        ];
    }
}
