<li class="gallery-list__item gallery-list__item--{{ $style }}">
    @isset($link)
        <a href="{{ $link }}">
    @endisset
        <img src="{{ $repeaterContent->default_image }}" alt="{{ $image_alt }}" />
    @isset($link)
        </a>
    @endisset
</li>
