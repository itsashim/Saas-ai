@php
    $contact = getContent('contact_us.content', true);
    $socials = getContent('social_icon.element', false, null, true);
@endphp
<header class="header">
    <!--Commented the Top header code-->
    @include($activeTemplate . 'partials.top_header')
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl align-items-center">
                <a class="site-logo site-title" href="{{ route('home') }}">
                    <img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" alt="logo" class="me-2"> AI TOOL
                    KART
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
                    <div class="nav_wrap m-auto">
                        <ul class="navbar-nav main-menu align-items-center">
                            <li class="nav-home-icon d-flex justify-content-center align-items-center"><img
                                    src="{{ asset('assets/images/icons/nav-home-icon.png') }}" alt=""></li>
                            <li><a href="{{ route('coupon.search') }}">@lang('AI tools')</a></li>
                            <li><a href="{{ url('submit') }}">@lang('AI Academy ')</a></li>
                            <li><a href="{{ route('home') }}">@lang('About Us')</a></li>
                            <li><a href="{{ url('advertise') }}">@lang('Advertise')</a></li>
                            <li><a href="{{ url('submit') }}">@lang('Submitt Tool')</a></li>

                            @foreach ($pages as $k => $data)
                                <li><a href="{{ route('pages', $data->slug) }}">{{ __($data->name) }}</a></li>
                            @endforeach
                            {{--   <li><a href="{{ route('stores') }}">@lang('Stores')</a></li> --}}
                            <li><a href="{{ route('blog') }}">@lang('Blog')</a></li>
                            <li><a href="{{ route('contact') }}">@lang('Contact')</a></li>
                        </ul>
                    </div>

                    <div class="nav-right justify-content-xl-end">
                        <a href="{{ url('submit') }}" role="button" class="hero_btn text-white">Submit Tool</a>
                        {{--  <form action="{{ route('coupon.search') }}" class="header-search">
                            <input type="search" name="search_key" value="{{ request()->search_key }}" class="header-search__input"
                                placeholder="@lang('Search')">
                            <i class="las la-search"></i>
                        </form> --}}
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- header__bottom end -->
</header>
