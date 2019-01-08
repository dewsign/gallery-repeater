<?php

namespace Dewsign\GalleryRepeater;

use Illuminate\Support\Facades\Storage;

class ImageProcessor
{
    public static function get(string $image, array $params)
    {
        return Storage::disk(config('repeater-blocks.images.disk'))->url($image);
    }
}