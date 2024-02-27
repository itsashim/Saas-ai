@php
    $testimonial = getContent('testimonial.content', true);
    $testimonials = getContent('testimonial.element', false, null, true);
    $counters = getContent('counter.element', false, null, true);
@endphp
<div class="hr_line"></div>


<section class="pt-80 pb-80 section--bg2 overflow-hidden position-relative">
    <div class="container overflow-hidden position-relative" style="z-index: 3">
        {{-- <div class="row gy-4">
            <div class="col-xl-4 text-xl-start text-center">
                <h2 class="section-title text-white">{{ __($testimonial->data_values->heading) }}</h2>
                <p class="text-white mt-3">{{ __($testimonial->data_values->subheading) }}</p>
                <div class="row gy-3 justify-content-xl-start justify-content-center mt-4">
                    @foreach ($counters as $counter)
                        <div class="col-xl-4 col-lg-3 col-sm-4">
                            <div class="counter-item">
                                <h4 class="counter-item__amount">{{ $counter->data_values->counter_digit }}</h4>
                                <p class="text-white">{{ __($counter->data_values->title) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}
        <div class="col-xl-8">
            <div>
                <img src="{{ asset('assets/images/icons/three-star.png') }}" alt="">
            </div>
            <h2 class="text-white mb-5">What Our Client Say</h2>
            <div class="testimonial-slider">
                @foreach ($testimonials as $testimonial)
                    <div class="single-slide">
                        <div class="testimonial-item_wrap">
                            <div class="testimonial-item" style="background-color: #161616 !important">
                                {{-- <div class="testimonial-item__quote">
                                @php echo $testimonial->data_values->icon @endphp
                            </div> --}}
                                <div class="rating">
                                    <div>
                                        <img src="{{ asset('assets/images/icons/rating-star.png') }}" alt="">
                                    </div>
                                </div>
                                <h4 class="testimonial_title">Title</h4>
                                <p class="testimonial-item__details pb-3">{{ __($testimonial->data_values->message) }}
                                </p>
                                <h6 class="mt-4 text-white">{{ __($testimonial->data_values->name) }}</h6>
                                <span>{{ __($testimonial->data_values->designation) }}</span>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-center mt-5">
            <button class="prev slick-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>
            </button>
            <button class="next slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </button>
        </div>
    </div>
    </div>
    <div class="decoration">
        <div class="decoration6 z-2">
            <img src="{{ asset('assets/images/icons/elipse1.png') }}" alt="">
        </div>
    </div>
</section>

<div class="hr_line"></div>
