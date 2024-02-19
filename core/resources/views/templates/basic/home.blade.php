@extends($activeTemplate . 'layouts.frontend')

@section('content')
    @php
        $banner = getContent('banner.content', true);
        $banners = getContent('banner.element', false, null, true);
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
            <div class="types_tab d-flex gap-2 flex-wrap justify-content-center">
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Email Marketing</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Writtig</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Real State</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Website</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Music</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Trading Bots</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Interior Designer</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Digital Marketing</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Prompt</span>
                </span>
                {{--  --}}
                {{--  --}}
                <span class="tab_wrap">
                    <span class="tab">Social Media</span>
                </span>
                {{--  --}}
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
                <div class="decoration1">
                    <img class="star" src="{{ asset('assets/images/icons/herostar.png') }}" alt="">
                </div>
                <div class="decoration2">
                    <img class="star" src="{{ asset('assets/images/icons/herostar.png') }}" alt="">
                </div>
                {{-- Infinite section decoration start --}}
                <div class="decoration3 d-none d-lg-block">
                    <img class="discoImage" src="{{ asset('assets/images/icons/discoImage.png') }}" alt="">
                </div>
                {{-- Infinite section decoration Ends  --}}

            </div>
            {{-- Decorations End --}}
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
        </div>
    </section>

    {{--  --}}
    {{--  --}}
    {{-- Lets have a look on our  platform : ai to tool kart  --}}
    {{-- Path of this section:-  sections/category.blade.php --}}
    {{--  --}}
    {{--  --}}
    {{--  --}}
    {{--  --}}
    {{-- Trending Tools  --}}
    {{-- Path of this section:-  sections/today_deals.blade.php --}}
    {{--  --}}
    {{--  --}}
    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif

@endsection
