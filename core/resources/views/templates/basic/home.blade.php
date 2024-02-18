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
                Best <span>Ai Tool </span> Directory For Your Category!
            </h1>
            <p class="text-center mx-auto">
                Quality Over Quantity: Each Category Contains Only the Best 11 AI Tools, Each Tested and Trusted By Us!
            </p>
            <div class="hero_search_wrap mx-auto">
                <div class="hero_search ">
                    <input type="text" placeholder="Serach AI tools by any keywords" />
                    <button class="search_icon">
                        Search
                    </button>
                </div>
            </div>
            <div class="d-flex gap-3 justify-content-center">
                <button class="hero_btn  mt-4">
                    Discover tools
                </button>
                <button class="hero_btn  mt-4">
                    Trending tools
                </button>
            </div>
        </div>
    </section>

    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif

@endsection
