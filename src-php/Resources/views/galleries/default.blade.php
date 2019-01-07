<div class="gallery-repeater gallery-repeater__{{ $style }}">
    @isset($title)
        <h3>{{ $title }}</h3>
    @endisset

    @isset($sub_title)
        @parsedown($sub_title)
    @endisset

    <div class="gallery-repeater__items">
        @repeaterblocks($repeater)
    </div>

    @isset($cta_title)
        @isset($cta_url)
            <a href="{{ $cta_url }}">{{ $cta_title }}</a>
        @endisset
    @endisset
</div>
    