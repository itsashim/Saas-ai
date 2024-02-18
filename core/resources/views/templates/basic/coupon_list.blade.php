@extends($activeTemplate.'layouts.frontend')

@section('content')
{{-- <section class="pt-80 pb-80">
    <div class="container">
        <div class="row gy-3">
            <div class="col-xl-3 col-lg-4">
                <button type="button" class="sidebar-open-btn"><i class="las la-sliders-h"></i>@lang('Filter Menu')</button>
                <div class="sidebar">
                    <button type="button" class="sidebar-close-btn"><i class="las la-times"></i></button>
                    <form action="{{ route('coupon.search') }}" class="search-form">
                        <div class="sidebar-widget">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form--control" name="search_key" value="{{ request()->search_key }}" placeholder="@lang('Search')">
                                <button class="input-group-text bg--base text-white border--base px-3"><i class="fas fa-search"></i></button>
                            </div>
                        </div><!-- sidebar-widget end -->
                        <div class="sidebar-widget">
                            <h6 class="sidebar-widget__title">@lang('Categories')</h6>
                            <div class="checkbox-wrapper">
                                <div class="form-check custom--checkbox">
                                    <input class="form-check-input category-check" type="checkbox" value="all" id="category-all">
                                    <label class="form-check-label" for="category-all">
                                        @lang('All')
                                    </label>
                                </div>
                                    @foreach ($categories as $category)
                                        <div class="form-check custom--checkbox">
                                            <input class="form-check-input category-check" type="checkbox" name="category[]" value="{{ $category->id }}" id="{{ 'category-'.$category->id }}" {{ (request()->category && count(request()->category)) ? (in_array($category->id,request()->category) ? 'checked' : '' ) : '' }}>
                                            <label class="form-check-label" for="{{ 'category-'.$category->id }}">
                                                {{ __($category->name) }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <button class="btn btn--base btn-sm mt-3 w-100">@lang('Filter')</button>
                                </div>
                            </div><!-- sidebar-widget end -->
                        </div><!-- sidebar end -->
                    </form>
                <div class="promo-wrapper">
                    <div class="promo-item">
                        @php  showAd('370x670') @endphp
                    </div>
                    <div class="promo-item">
                        @php  showAd('300x250') @endphp
                    </div>
                    <div class="promo-item">
                        @php  showAd('370x670') @endphp
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 ps-lg-4">
                <div class="row gy-4">
                    <div id="overlay">
                        <div class="cv-spinner">
                            <span class="spinner"></span>
                        </div>
                    </div>
                    <div class="overlay-2" id="overlay2"></div>
                    @if (request()->search_key)
                        <p>{{ $coupons->count() }} @lang('coupons found for') "{{ request()->search_key }}"</p>
                    @endif
                    @forelse($coupons as $coupon)
                        <div class="col-xl-4 col-sm-6">
                            <div class="coupon-item has--link">
                                <a href="{{'/details'}}" data-coupon="{{ $coupon }}"
                                    data-ending_date="{{ showDateTime($coupon->ending_date) }}"
                                    data-store_image="{{ getImage(getFilePath('store').'/'.$coupon->store->image) }}"
                                    class="item--link "></a>
                                    <!--javascript:void(0)  coupon-details-->
                                <div class="coupon-item__thumb">
                                    <img src="{{ getImage(getFilePath('coupon').'/'. $coupon->image,getFileSize('coupon')) }}"
                                        alt="image">
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
                                </div>
                            </div><!-- coupon-item end -->
                        </div>
                    @empty
                        <div class="text-center fw-bold">{{ __($emptyMessage) }}</div>
                    @endforelse
                    {{ $coupons->links() }}
                    
                </div>
                
                <div id="ad-append" class="text-center"></div>
            </div>
        </div>
    </div>
    </div>
</section> --}}

    <section class="explore_sec py-5">
      <h3 class="mb-3">Explore</h3>
      <div class="explore_sec_wrap row">
        <div class="col-lg-3">
          <div class="sidebar">
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
          <div class="tab-content" id="v-pills-tabContent">
            <h4 class="mb-3 text-white">Categories</h4>
            <!-- All categories -->
            <div
              class="tab-pane fade show active"
              id="all"
              role="tabpanel"
              aria-labelledby="all-tab"
            >
              <div
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start"
              >

                     @if (request()->search_key)
                        <p>{{ $coupons->count() }} @lang('coupons found for') "{{ request()->search_key }}"</p>
                    @endif
                    @forelse($coupons as $coupon)
                        <a href="{{'/details'}}" class="card d-block">
                              <div class="img_wrap">
                                    <img src="{{ getImage(getFilePath('coupon').'/'. $coupon->image,getFileSize('coupon')) }}"
                                        alt="image">
                                        @if ($coupon->featured_validity >= now())
                                            <span class="coupon-label">@lang('Featured')</span>
                                        @endif
                              </div>
                              <h4>{{ __($coupon->store) }}</h4>
                              <h6>{{ __($coupon->title) }}</h6>
                              <p class="">
                                      {{ $coupon->reports_count }} @lang('used today')
                              </p>
                              <div class="icons mt-4 d-flex justify-content-between">
                                <div class="icon">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon"
                                    viewBox="0 0 512 512"
                                  >
                                    <path
                                      d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                      fill="none"
                                      stroke="currentColor"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="32"
                                    />
                                  </svg>
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
                    @empty
                        <div class="text-center fw-bold">{{ __($emptyMessage) }}</div>
                    @endforelse
                    {{ $coupons->links() }}

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
                class="ai_cards d-flex flex-wrap gap-4 justify-content-center justify-content-sm-start"
              >
                <a href="{{'/details'}}" class="card d-block">
                  <div class="img_wrap">
                    <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                  </div>
                  <h4>AI Forums</h4>
                  <p class="">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Nulla eos necessitatibus totam iusto laudantium.
                  </p>
                  <div class="icons mt-4 d-flex justify-content-between">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                      >
                        <path
                          d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="32"
                        />
                      </svg>
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
                <a href="{{'/details'}}" class="card d-block">
                  <div class="img_wrap">
                    <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                  </div>
                  <h4>AI Forums</h4>
                  <p class="">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Nulla eos necessitatibus totam iusto laudantium.
                  </p>
                  <div class="icons mt-4 d-flex justify-content-between">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                      >
                        <path
                          d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="32"
                        />
                      </svg>
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
                <a href="{{'/details'}}" class="card d-block">
                  <div class="img_wrap">
                    <img src="{{asset('core/public/images/card-img.png')}}" alt="Card Image" />
                  </div>
                  <h4>AI Forums</h4>
                  <p class="">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Nulla eos necessitatibus totam iusto laudantium.
                  </p>
                  <div class="icons mt-4 d-flex justify-content-between">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ionicon"
                        viewBox="0 0 512 512"
                      >
                        <path
                          d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="32"
                        />
                      </svg>
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
    </section>

@if ($sections->secs != null)
    @foreach(json_decode($sections->secs) as $sec)
        @include($activeTemplate.'sections.'.$sec)
    @endforeach
@endif

@endsection

@push('script')
<script>
    (function ($) {
        "use strict";

        $('.category-check').on('click', function(e){
            var categoryArr = $('.category-check:checked:checked');
            if(e.target.value == 'all'){
                $('input:checkbox').not(this).prop('checked', false);
                return 0;
            }else{
                $('#category-all').prop('checked', false);
            }
        });

    })(jQuery);

</script>
@endpush
