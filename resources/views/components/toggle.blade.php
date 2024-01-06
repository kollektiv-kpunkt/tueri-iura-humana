<div class="tih-details-toggle bg-background text-accent p-4">
    <div class="tih-details-toggle__title-wrapper flex justify-between items-center cursor-pointer">
        <p class="tih-details-toggle__title font-black !leading-[86%]">{{$title}}</p>
        <div class="tih-details-toggle__icon-wrapper">
            <svg class="tih-details-toggle__icon h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M7 10l5 5 5-5z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
            </svg>
        </div>
    </div>
    <div class="tih-details-toggle__content">
        {{$slot}}
    </div>
</div>
