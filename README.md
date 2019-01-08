# Gallery Repeater Block

A gallery repeater block for [Dewsign's Nova Repeater Blocks](https://github.com/dewsign/nova-repeater-blocks) to output a collection of images

## Installation & Usage

`composer require dewsign/gallery-repeater`

`php artisan migrate`

Within your repeater types add the Gallery

```php{5}
public function types(Request $request)
    {
        return [
            ...
            Dewsign\GalleryRepeater\Nova\Gallery::class,
        ];
    }
```

## Styles

You can create multiple gallery and item styles by adding new templates to the `/views/vendor/gallery-repeater/galleries` and `/views/vendor/gallery-repeater/items` resource folders. The system will fallback to the default style if a view is not found.

## Image Procesing

The config provides an easy way to customise the Image Processor. Create a new class with a compatible `get` method which can return the processed image url. Each Item template can have a unique image processor. Some common template names are included but they all render the default template (typically sufficient when combined with the Image Processor).
