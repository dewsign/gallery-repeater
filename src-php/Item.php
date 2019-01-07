<?php

namespace Dewsign\GalleryRepeater;

use Illuminate\Database\Eloquent\Model;
use Dewsign\NovaRepeaterBlocks\Traits\IsRepeaterBlock;

class Item extends Model
{
    use IsRepeaterBlock;

    protected $table = 'nrb_gallery_items';

    public static $repeaterBlockViewTemplate = 'gallery-repeater::item';

    public static function sourceTypes()
    {
        return \Dewsign\GalleryRepeater\Gallery::types();
    }

    public $append = [
        'default_image',
    ];

    public function getDefaultImageAttribute()
    {
        return cloudinary_image($this->image ?? '', [
            "width" => config("gallery-repeater.{$this->style}.width", config('gallery-repeater.default.width')),
            "height" => config("gallery-repeater.{$this->style}.height", config('gallery-repeater.default.height')),
        ]);
    }
}
