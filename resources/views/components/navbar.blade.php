@php
    $links = [
        "Darum geht es" => "#darum-gehts",
        "Unsere Argumente" => "#unsere-argumente",
        "Was geht mich das an?" => "#was-geht-mich-das-an",
        "Hilf mit" => "#hilf-mit",
        "Über uns" => "#ueber-uns"
];
@endphp
<div class="tih-nav-bar">
    <div class="tih-nav-bar__content px-3 py-2 flex justify-between items-center">
        <x-logo class="h-12" />
        <div class="tih-nav-bar__buttons gap-x-4 items-center hidden md:flex">
            @foreach ($links as $title => $link)
                <a href="{{ $link }}" class="tih-nav-bar__button">{{ $title }}</a>
            @endforeach
        </div>
        <div class="tih-nav-bar__tofuburger md:hidden flex">
            <button class="tih-nav-bar__tofuburger-button">
                <span class="sr-only">Toggle navigation</span>
                <div></div>
                <div></div>
                <div></div>
            </button>
        </div>
    </div>
</div>

<div class="tih-mobile-menu">
    <div class="tih-mobile-menu__content w-full p-6 max-w-[793px]">
        <div class="tih-mobile-menu__buttons gap-y-4 flex flex-col">
            @foreach ($links as $title => $link)
                <div class="tih-mobile-menu__button-wrapper overflow-hidden">
                    <div class="tih-mobile-menu__button-inner">
                        <a href="{{ $link }}" class="tih-mobile-menu__button">{{ $title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
