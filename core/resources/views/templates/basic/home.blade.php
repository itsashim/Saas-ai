@extends($activeTemplate . 'layouts.frontend')

@section('content')
    @php
        $banner = getContent('banner.content', true);
        $banners = getContent('banner.element', false, null, true);
        $category = getContent('category.content', true);
        $categories = \App\Models\Category::where('status', 1)->latest()->get();
    @endphp


    {{--  <section class="hero-section bg_img" style="background: url({{ getImage('assets/images/frontend/banner/'.$banner->data_values->background_image, '1920x1080') }}) center;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-7 col-md-8 col-sm-9 col-11">
                    <h2 class="hero-section__title">{{ __($banner->data_values->heading) }}</h2>
                    <ul class="hero-section__feature">
                        @foreach ($banners as $banner)
                            <li>{{ __($banner->data_values->feature) }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="hero_sec">
        <div class="hero_wrap">
            <h1 class="text-center mx-auto">
                Best <span>Ai Tool Directory</span> For Your Category!
            </h1>
            <p class="text-center mx-auto">
                Quality Over Quantity: Each Category Contains Only the Best 11 AI Tools, Each Tested and Trusted By Us!
            </p>
            <div class="hero_search_wrap mx-auto">
                <div class="hero_search ">
                    <div class="magnifying_glass"><img src="{{ asset('assets/images/icons/search.png') }}" alt="">
                    </div>
                    <input type="text" placeholder="Serach AI tools by any keywords" />
                    <button class="search_icon">
                        Search
                    </button>
                </div>
            </div>

            {{-- Types Tab Start --}}
            <div class="types_tab d-flex gap-2 flex-wrap justify-content-center pb-5">
                {{--  --}}
                @foreach ($categories as $index => $category)
                    {{-- @php echo $category->icon @endphp --}}
                    @if ($index < 20)
                        <a href="{{ route('coupon.filter.type', ['category', $category->id]) }}" class="tab_wrap">
                            <span class="tab">{{ __($category->name) }}</span>
                        </a>
                    @endif
                @endforeach
            </div>
            {{-- Types Tab End. --}}
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                {{-- <button class="hero_btn  mt-4">
                    Discover tools
                </button>
                <button class="hero_btn  mt-4">
                    Trending tools
                </button> --}}
            </div>

            {{-- Decorations start --}}
            <div class="decoration_wrap">
                <div class="decoration1 d-none d-lg-block">
                    <img class="star" src="{{ asset('assets/images/icons/herostar.png') }}" alt="">
                </div>
                <div class="decoration2 d-none d-lg-block">
                    <img class="star" src="{{ asset('assets/images/icons/herostar.png') }}" alt="">
                </div>
                {{-- Infinite section decoration start --}}
                <div class="decoration3 d-none d-lg-block">
                    <img class="discoImage" src="{{ asset('assets/images/icons/discoImage.png') }}" alt="">
                </div>
                {{-- Infinite section decoration Ends  --}}

                {{-- Border decoration start --}}
                <div class="decoration8 d-none d-xl-block">
                    <img src="{{ asset('assets/images/icons/hero-border.png') }}" alt="">
                </div>
                {{-- Border decoration End --}}

            </div>
            {{-- Decorations End --}}

        </div>
        {{-- Infinite Inline Scroll Starts --}}
        <div class="infinite-scroll_wrap">
            <div class="infinite-scroll  py-3">
                <p>Top-rated AI tools</p>
                <p>Testes and Trusted</p>
                <p>Quality selection</p>
                <p>Best in your Niche</p>
                {{--  --}}
                <p>Top-rated AI tools</p>
                <p>Testes and Trusted</p>
                <p>Quality selection</p>
                <p>Best in your Niche</p>
                {{--  --}}
                <p>Top-rated AI tools</p>
                <p>Testes and Trusted</p>
                <p>Quality selection</p>
                <p>Best in your Niche</p>
            </div>

        </div>
        {{-- Infinite Inline Scroll Ends --}}
    </section>

    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif

@endsection
