@php
    $topDeal = getContent('top_deal.content', true);
    $coupons = \App\Models\Coupon::active()
    ->where('top_deal', 1)
    ->with('store')
    ->withCount(['reports' => function($report){
        $report->where('action', 'copy')->where('date', 'like', now()->format('Y-m-d'));
    }])
    ->orderBy('featured_validity', 'DESC')
    ->limit(8);
    $coupons->increment('impression');
    $coupons = $coupons->get();
    App\Http\Controllers\SiteController::saveCouponReport($coupons, 'impression');
@endphp

{{-- <section class="pt-80 pb-80 section--bg">
    <div class="container">
        <div class="section-header d-flex justify-content-between align-items-center gap-3">
            <h2 class="section-title">{{ __($topDeal->data_values->heading) }}</h2>
            <a href="{{ route('coupon.filter.type', 'top-deal') }}" class="btn text-white btn--base btn-md flex-shrink-0 viewall_btn" >@lang('View All')</a>
        </div>
        <div class="row justify-content-center gy-4">
            @foreach ($coupons as $coupon)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="coupon-item has--link">
                        <a href="{{'/details'}}"
                            data-coupon="{{ $coupon }}"
                            data-ending_date="{{ showDateTime($coupon->ending_date) }}"
                            data-store_image="{{ getImage(getFilePath('store').'/'.$coupon->store->image)  }}"
                            class="item--link "></a>
                            <!--"coupon-details Add this class to generate modal" javascript:void(0)-->
                        <div class="coupon-item__thumb">
                            <img src="{{ getImage(getFilePath('coupon').'/'. $coupon->image,getFileSize('coupon')) }}" alt="image">
                                @if ($coupon->featured_validity >= now())
                                    <span class="coupon-label">@lang('Featured')</span>
                                @endif
                        </div>
                        <div class="coupon-item__content">
                            <div class="coupon-item__meta">
                                <a href="{{ route('coupon.filter.type', ['store', $coupon->store_id]) }}"
                                    class="store-name text--base">{{ __($coupon->store) }}</a>
                            </div>
                            <h4 class="title">{{ __($coupon->title) }}</h4>
                            <div class="coupon-item__bottom">
                                <span class="fs--14px">{{ $coupon->reports_count }} @lang('used today')</span>
                            </div>
                            iv class="icons mt-2 d-flex justify-content-between">
                              <div>
                                  <p class="card_price">${{ $coupon->price }}</p>
                                  <span class="text-white">
                                     @if($coupon->free_trail == 1)
                                        Free Trail
                                    @else
                                        No Free Trail
                                    @endif
                                  </span>
                              </div>
                              <div class="icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="w-6 h-6"
                                >
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                                  />
                                </svg>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}








<!--Explore Tabs Start-->
    <div class="explore_tabs">
        <h3 class="text-white sub_head text-center mb-3">Categories</h3>
        
        <!--Tabs Categories Start-->
        <ul class="nav nav-pills mb-3 explore_tabs_wrap d-flex gap-3 flex-wrap" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <div class="tab d-inline-block nav-link active"  id="pills-all-category-tab" data-bs-toggle="pill" data-bs-target="#pills-all-category" type="button" role="tab" aria-controls="pills-all-category" aria-selected="true">All categories</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-analysis-tab" data-bs-toggle="pill" data-bs-target="#pills-analysis" type="button" role="tab" aria-controls="pills-analysis" aria-selected="false">AI Analysis</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-detector-tab" data-bs-toggle="pill" data-bs-target="#pills-detector" type="button" role="tab" aria-controls="pills-detector" aria-selected="false">AI Detector</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-finance-tab" data-bs-toggle="pill" data-bs-target="#pills-finance" type="button" role="tab" aria-controls="pills-finance" aria-selected="false">Finance</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">SEO</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false">Video</div>
            </li>          
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-writting-tab" data-bs-toggle="pill" data-bs-target="#pills-writting" type="button" role="tab" aria-controls="pills-writting" aria-selected="false">Writting</div>
            </li>            
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-business-tab" data-bs-toggle="pill" data-bs-target="#pills-business" type="button" role="tab" aria-controls="pills-business" aria-selected="false">Business</div>
            </li>    
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-prompts-tab" data-bs-toggle="pill" data-bs-target="#pills-prompts" type="button" role="tab" aria-controls="pills-prompts" aria-selected="false">Prompts</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-email-tab" data-bs-toggle="pill" data-bs-target="#pills-email" type="button" role="tab" aria-controls="pills-email" aria-selected="false">Email Assistant</div>
            </li>
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-copy-write-tab" data-bs-toggle="pill" data-bs-target="#pills-copy-write" type="button" role="tab" aria-controls="pills-copy-write" aria-selected="false">Copy writting</div>
            </li>            
            <li class="nav-item" role="presentation">
              <div class="tab d-inline-block nav-link" id="pills-social-media-tab" data-bs-toggle="pill" data-bs-target="#pills-social-media" type="button" role="tab" aria-controls="pills-social-media" aria-selected="false">Social media</div>
            </li>            
        </ul>
        <!--Tab categoires End -->
        
        
        <!--Tab Content Start-->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all-category" role="tabpanel" aria-labelledby="pills-all-category-tab">
                <div
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                <div>
                <p class="card_price">$150.00</p>
                <span class="text-white">((Free trial))</span>
                </div>
                <div class="icon">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                />
                </svg>
                </div>
                </div>
                </a>
                <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                <div>
                <p class="card_price">$150.00</p>
                <span class="text-white">((Free trial))</span>
                </div>
                <div class="icon">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                />
                </svg>
                </div>
                </div>
                </a>              
                </div>
            </div>
            <div class="tab-pane fade" id="pills-analysis" role="tabpanel" aria-labelledby="pills-analysis-tab">
                    <div
                    class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5" style="margin: 0 7%"
                    >
                        <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                        </a>              
                    </div>                
            </div>
            <div class="tab-pane fade" id="pills-detector" role="tabpanel" aria-labelledby="pills-detector-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                            <div class="img_wrap">
                            <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                            </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                            <div>
                            <p class="card_price">$150.00</p>
                            <span class="text-white">((Free trial))</span>
                            </div>
                            <div class="icon">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                                >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                                />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{'/details'}}" class="card d-block ">
                    <div class="img_wrap">
                    <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                    </div>
                    <h4>AI Forums</h4>
                    <p class="">
                    Lorem ipsum, dolor sit 
                    </p>
                    <div class="icons mt-2 d-flex justify-content-between">
                    <div>
                    <p class="card_price">$150.00</p>
                    <span class="text-white">((Free trial))</span>
                    </div>
                    <div class="icon">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                    >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                    />
                    </svg>
                    </div>
                    </div>
                    </a>              
                </div>                
            </div>
            <div class="tab-pane fade" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                <div>
                <p class="card_price">$150.00</p>
                <span class="text-white">((Free trial))</span>
                </div>
                <div class="icon">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                />
                </svg>
                </div>
                </div>
                </a>
                </div>                
            </div>
            <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div>   
            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div>        
            <div class="tab-pane fade" id="pills-writting" role="tabpanel" aria-labelledby="pills-writting-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div> 
            <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div> 
            <div class="tab-pane fade" id="pills-prompts" role="tabpanel" aria-labelledby="pills-prompts-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div> 
            <div class="tab-pane fade" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div> 
            <div class="tab-pane fade" id="pills-copy-write" role="tabpanel" aria-labelledby="pills-copy-write-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                </div>                
            </div> 
            <div class="tab-pane fade" id="pills-social-media" role="tabpanel" aria-labelledby="pills-social-media-tab">
                <div
                style="margin: 0 7%"
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start mt-5"
                >
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>   
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>  
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>  
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>  
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>  
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>  
                    <a href="{{'/details'}}" class="card d-block ">
                        <div class="img_wrap">
                        <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                        </div>
                        <h4>AI Forums</h4>
                        <p class="">
                        Lorem ipsum, dolor sit 
                        </p>
                        <div class="icons mt-2 d-flex justify-content-between">
                        <div>
                        <p class="card_price">$150.00</p>
                        <span class="text-white">((Free trial))</span>
                        </div>
                        <div class="icon">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                        />
                        </svg>
                        </div>
                        </div>
                    </a>  
                </div>                
            </div>             
        </div>
        <!--Tab Content End-->
    </div>
<!--Explore Tabls Ends-->
<!--Explore Start-->
   {{-- <section class="explore_sec p-5">
      <h3 class="mb-3">Explore</h3>
      <div class="explore_sec_wrap row">
        <div class="col-lg-3">
          <div class="sidebar p-3">
            <div
              class="nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <!-- All categories Start -->
              <button
                class="active"
                id="all-tab"
                data-bs-toggle="pill"
                data-bs-target="#all"
                type="button"
                role="tab"
                aria-controls="all"
                aria-selected="true"
              >
                <span class="sm_icon d-flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ionicon"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M427.68 351.43C402 320 383.87 304 383.87 217.35 383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43 73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57zM320 384v16a64 64 0 01-128 0v-16"
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"
                    />
                  </svg>
                </span>
                All
              </button>
              <!-- All categories End -->
              <!-- AI detector Start -->
              <button
                class="nav-link"
                id="detector-tab"
                data-bs-toggle="pill"
                data-bs-target="#detector"
                type="button"
                role="tab"
                aria-controls="detector"
                aria-selected="false"
              >
                <span class="sm_icon d-flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ionicon"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M448 341.37V170.61A32 32 0 00432.11 143l-152-88.46a47.94 47.94 0 00-48.24 0L79.89 143A32 32 0 0064 170.61v170.76A32 32 0 0079.89 369l152 88.46a48 48 0 0048.24 0l152-88.46A32 32 0 00448 341.37z"
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"
                    />
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"
                      d="M69 153.99l187 110 187-110M256 463.99v-200"
                    />
                  </svg>
                </span>
                AI Detectors
              </button>
              <!-- AI detector End -->
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="tab-content p-3 pt-0" id="v-pills-tabContent">
            <h4 class="text-white mb-4">Categories</h4>
            <!-- All categories -->
            <div
              class="tab-pane fade show active"
              id="all"
              role="tabpanel"
              aria-labelledby="all-tab"
            >
              <div
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start "
              >
              <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                  <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                  Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                  <div>
                      <p class="card_price">$150.00</p>
                      <span class="text-white">((Free trial))</span>
                  </div>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                      />
                    </svg>
                  </div>
                </div>
              </a>
              <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                  <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                  Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                  <div>
                      <p class="card_price">$150.00</p>
                      <span class="text-white">((Free trial))</span>
                  </div>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                      />
                    </svg>
                  </div>
                </div>
              </a>              
              </div>
            </div>
            <!-- All categories End -->
            <!-- AI detector Start -->
            <div
              class="tab-pane fade text-white"
              id="detector"
              role="tabpanel"
              aria-labelledby="vdetector-tab"
            >
              <div
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start "
              >
              <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                  <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                  Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                  <div>
                      <p class="card_price">$150.00</p>
                      <span class="text-white">((Free trial))</span>
                  </div>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                      />
                    </svg>
                  </div>
                </div>
              </a>
              <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                  <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                  Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                  <div>
                      <p class="card_price">$150.00</p>
                      <span class="text-white">((Free trial))</span>
                  </div>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                      />
                    </svg>
                  </div>
                </div>
              </a>
              <a href="{{'/details'}}" class="card d-block ">
                <div class="img_wrap">
                  <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                </div>
                <h4>AI Forums</h4>
                <p class="">
                  Lorem ipsum, dolor sit 
                </p>
                <div class="icons mt-2 d-flex justify-content-between">
                  <div>
                      <p class="card_price">$150.00</p>
                      <span class="text-white">((Free trial))</span>
                  </div>
                  <div class="icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-6 h-6"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                      />
                    </svg>
                  </div>
                </div>
              </a>              
              </div>
            </div>
            <!-- AI detector End-->
          </div>
        </div>
      </div>
    </section> --}}
<!--Explore end-->



<!--Ads Section Start-->
  <section class="ads_sec">
      <div class="ads_wrap">
          <img src="https://www.knowledgenile.com/wp-content/uploads/2019/10/Artificial-Intelligence-for-Advertisement-1.png" alt="ads" width="100"/>
          <button class="ads_cross">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
             </svg>
        </button>
      </div>
  </section>
<!--Ads Section End-->


        <!-- Featured Tools Start -->
  <section class="featured ">
        <h3 class="text-white sub_head">Featured Tools🏷️</h3>
        
        <div class="today-deal-slider ai_cards">
            @foreach ($coupons as $coupon)
 
                            
                    <a href="{{'/details'}}" class="single-slide card d-block">
                            <div class="img_wrap">
                                <img src="{{ getImage(getFilePath('coupon') . '/' . $coupon->image, getFileSize('coupon')) }}"
                                    alt="image">
                                @if ($coupon->featured_validity >= now())
                                    <span class="coupon-label">@lang('Featured')</span>
                                @endif
                            </div>
                            <h4>{{ __($coupon->store) }}</h4>
                            <h6 class="text-white">{{ __($coupon->title) }}</h5>
                        {{--    <p class="">
                             {{ $coupon->reports_count }} @lang('used today')
                                </p> --}}
                            <div class="icons mt-2 d-flex justify-content-between">
                              <div>
                                  <p class="card_price">${{ $coupon->price }}</p>
                                  <span class="text-white">
                                     @if($coupon->free_trail == 1)
                                        Free Trail
                                    @else
                                        No Free Trail
                                    @endif
                                  </span>
                              </div>
                              <div class="icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                  class="w-6 h-6"
                                >
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"
                                  />
                                </svg>
                              </div>
                            </div>
                    </a>
            @endforeach
        </div>


        <a href="{{ route('coupon.filter.type', 'today-deal') }}" class="btn text-white  btn-md flex-shrink-0 mx-auto d-block viewall_btn" >@lang('View All')</a>
    </section> 
        <!--Featured Tools End  -->


