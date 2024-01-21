<div {{$attributes->merge(["class" => "tih-donation-bar mt-6"])}}>
    <div class="tih-donation-bar__goal text-sm text-end">{{number_format($goal, 2, ".", "'")}} CHF</div>
    <div class="tih-donation-bar__outer p-2 bg-background flex rounded-full">
        <div class="tih-donation-bar__inner h-8 bg-white rounded-full flex items-center justify-start" style="width:0%" data-percentage="{{$percentage}}">
            <span class="opacity-0 mix-blend-difference tih-donation-bar__amount text-nowrap text-sm m-auto leading-none px-1">{{number_format($total, 2, ".", "'")}} CHF</span>
        </div>
    </div>
</div>
