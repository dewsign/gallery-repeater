<?php

namespace Dewsign\GalleryRepeater;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Dewsign\GalleryRepeater\ImageProcessor;
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
        return Storage::disk(config('repeater-blocks.images.disk'))->url($this->image);
    }

    public function getImage(array $params = [])
    {
        return ImageProcessor::get($this->image, $params);
    }
}
