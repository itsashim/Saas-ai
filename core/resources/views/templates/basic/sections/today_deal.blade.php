@php
    $todayDeal = getContent('today_deal.content', true);
    $coupons = \App\Models\Coupon::active()
        ->where('today_deal', 1)
        ->with('store')
        ->withCount([
            'reports' => function ($report) {
                $report->where('action', 'copy')->where('date', 'like', now()->format('Y-m-d'));
            },
        ])
        ->orderBy('featured_validity', 'DESC')
        ->limit(10);
    $coupons->increment('impression');
    $coupons = $coupons->get();
    App\Http\Controllers\SiteController::saveCouponReport($coupons, 'impression');
@endphp




<!-- Trending Tools Start -->
<section class="featured pb-5">

    <h3 class="text-white sub_head text-center  fw-bold">{{ __($todayDeal->data_values->heading) }}</h3>

    {{-- today-deal-slider --}}
    <div class="d-flex justify-content-center ai_cards flex-wrap">
        @foreach ($coupons as $index => $coupon)
            @if ($index < 8)
                <a href="{{ '/details' }}" class="single-slide card d-block">
                    <div class="img_wrap">
                        <img src="{{ getImage(getFilePath('coupon') . '/' . $coupon->image, getFileSize('coupon')) }}"
                            alt="image">
                        @if ($coupon->featured_validity >= now())
                            <span class="coupon-label">@lang('Featured')</span>
                        @endif
                    </div>
                    <h4>{{ __($coupon->store) }}</h4>
                    <h6>{{ __($coupon->title) }}</h5>
                        {{--    <p class="">
                             {{ $coupon->reports_count }} @lang('used today')
                                </p> --}}
                        <div class="tag_wrap mt-3  mb-3 d-flex gap-2 align-items-center">
                            <div class="tags">Digital Marketing</div>
                            <div class="tags">Automation</div>
                        </div>
                        <div class="icons mt-2 d-flex justify-content-between align-items-center">
                            <div>
                                @if ($coupon->free_trail == 1)
                                    <span class=" price_free">
                                        Free
                                    </span>
                                @else
                                    <span></span>
                                @endif
                                <span class="price_txt">price</span>
                                <p class="card_price">${{ $coupon->price }}</p>
                            </div>
                            <div class="icon text-center text-white ">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg> --}}
                                view
                            </div>
                        </div>
                </a>
            @endif
        @endforeach
    </div>

    <a href="{{ route('coupon.filter.type', 'today-deal') }}"
        class="btn text-white   btn-md flex-shrink-0 mx-auto d-block viewall_btn ">@lang('View All')</a>
</section>
<!--Trending Tools End  -->



{{-- <section class="pt-80 pb-80">
    <div class="container">
        <div class="section-header d-flex justify-content-between align-items-center gap-3">
            <h2 class="section-title">{{ __($todayDeal->data_values->heading) }}</h2>
            <a href="{{ route('coupon.filter.type', 'today-deal') }}" class="btn  btn-md flex-shrink-0 viewall_btn">@lang('View All')</a>
        </div>
        <div class="today-deal-slider">
            @foreach ($coupons as $coupon)
                <div class="single-slide">
                    <div class="coupon-item has--link">
                        <a href="{{'/details'}}" data-coupon="{{ $coupon }}"
                            data-ending_date="{{ showDateTime($coupon->ending_date) }}"
                            data-store_image="{{ getImage(getFilePath('store') . '/' . $coupon->store->image) }}"
                            class="item--link"></a>
                            <!--coupon-details add this class to add modal javascript:void(0)-->
                        <div class="coupon-item__thumb">
                            <img src="{{ getImage(getFilePath('coupon') . '/' . $coupon->image, getFileSize('coupon')) }}"
                                alt="image">
                                @if ($coupon->featured_validity >= now())
                                    <span class="coupon-label">@lang('Featured')</span>
                                @endif
                        </div>
                        <div class="coupon-item__content">
                            <div class="coupon-item__meta">
                                <a href="{{ route('coupon.filter.type', ['store', $coupon->store_id]) }}"
                                    class="store-name text--base">{{ __($coupon->store->name) }}</a>
                            </div>
                            <h4 class="title">{{ __($coupon->title) }}</h4>
                            <div class="coupon-item__bottom">
                                <span class="fs--14px">{{ $coupon->reports_count }} @lang('used today')</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}
{{-- <div class="promo-item text-center pb-80 mt-0">
    @php  showAd('780x80') @endphp
</div> --}}
