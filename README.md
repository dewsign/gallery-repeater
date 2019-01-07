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

You can create multiple gallery and item styles by adding new templates to the `vendor/galleries` and `vendor/items` resource folders. The system will fallback to the default style if a view is not found.