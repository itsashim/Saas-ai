@extends($activeTemplate . 'layouts.frontend')

@section('content')
    <style>
        .inner-hero.bg_img {
            display: none;
        }
    </style>

    {{-- HERO Section Start --}}
    <section class="hero_sec">
        <div class="hero_wrap" style="padding-top: 7rem !important">
            <h2 class="text-white fw-light text-center">FULL AI TOOLS LIST BY CATEGORIES</h2>
            <h1 class="text-center mx-auto fw-bold mt-3">
                Best AI Tools Directory
            </h1>
            <p class="text-center mx-auto">

            </p>

            {{-- Decorations start --}}
            <div class="decoration_wrap">
                <div class="decoration1 d-none d-lg-block">
                    <img class="star" src="{{ asset('assets/images/icons/herostar.png') }}" alt="">
                </div>
            </div>
            {{-- Decorations End --}}

        </div>

    </section>
    {{-- HERO SECTION END --}}


    {{-- Types Tab Start --}}
    <div class="types_tab d-flex gap-2 flex-wrap justify-content-center py-5">
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


    {{-- List of Tools Start --}}
    <section class="list_tools_sec py-5 ">
        <div class="list_tools_sec_wrap mx-auto pb-4">
            <div
                class="coupon d-flex flex-column flex-md-row justify-content-between p-4 gap-4 align-items-center align-items-md-start">
                <div class="coupon_img">
                    <figure><img src="https://check.hostingpro.bond/assets/images/coupon/65afa50d767151706009869.png"
                            alt=""></figure>
                </div>
                <div class="coupon_seo">
                    <figure>
                        <img src="https://usercontent.one/wp/www.insidr.ai/wp-content/uploads/2023/08/insidr-ai_Surfer.png?media=1705425533"
                            alt="">
                    </figure>
                </div>
                <div class="coupon_con">
                    <h6 class="fw-bold text-white">Surfer</h6>
                    <p class="text-white">
                        Surfer is one of the absolute best SEO tools that will help write amazing SEO-optimized content. It
                        will show you what you need to include in your articles, best keywords, current SEO score and how
                        to... </p>
                </div>
                <div class="coupon_des">
                    <span class="mb-2">from $44/mo</span>
                    <a role="button" class="" href="">Visit tool</a>
                </div>

                <div class="coupon_tag">
                    Free
                </div>


            </div>
            <div class="hr_line bg-white"></div>
            <div
                class="coupon d-flex flex-column flex-md-row justify-content-between p-4 gap-4 align-items-center align-items-md-start">
                <div class="coupon_img">
                    <figure><img src="https://check.hostingpro.bond/assets/images/coupon/65afa50d767151706009869.png"
                            alt=""></figure>
                </div>
                <div class="coupon_seo">
                    <figure>
                        <img src="https://usercontent.one/wp/www.insidr.ai/wp-content/uploads/2023/08/insidr-ai_Surfer.png?media=1705425533"
                            alt="">
                    </figure>
                </div>
                <div class="coupon_con">
                    <h6 class="fw-bold text-white">Surfer</h6>
                    <p class="text-white">
                        Surfer is one of the absolute best SEO tools that will help write amazing SEO-optimized content. It
                        will show you what you need to include in your articles, best keywords, current SEO score and how
                        to... </p>
                </div>
                <div class="coupon_des">
                    <span class="mb-2">from $44/mo</span>
                    <a role="button" class="" href="">Visit tool</a>
                </div>

                <div class="coupon_tag">
                    Free
                </div>


            </div>

        </div>
    </section>
    {{-- List of Tools End --}}
@endsection
