{{-- <div class="header__top" style="background-color: #0c0a20 !important;">
    <div class="container">
        <div class="row gy-2 align-items-center">
            <div class="col-lg-5 d-sm-block d-none">
                <ul class="header-info-list justify-content-lg-start justify-content-center">
                    <li><a href="mailto:{{ $contact->data_values->email_address }}"><i class="fas fa-envelope"></i>{{ $contact->data_values->email_address }}</a></li>
                    <li><a href="tel:{{ $contact->data_values->contact_number }}"><i class="fas fa-phone-alt"></i>{{ $contact->data_values->contact_number }}</a></li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="header-top-right justify-content-lg-end justify-content-center">
                    <ul class="header-social-links d-sm-flex d-none">
                        @foreach ($socials as $social)
                            <li><a href="{{ $social->data_values->url }}" target="_blank">@php echo $social->data_values->social_icon @endphp</a></li>
                        @endforeach
                    </ul>
                    <div class="header-top-action-wrapper">
                   <!---->
                   <!--Nav Language -->
                   <!--     <div class="language-select">-->
                   <!--         <i class="las la-globe"></i>-->
                   <!--         <select class="langSel">-->
                   <!--             @foreach($language as $item)-->
                   <!--                 <option value="{{ $item->code }}" @if(session('lang')==$item->code) selected @endif>{{ __($item->name) }}</option>-->
                   <!--             @endforeach-->
                   <!--         </select>-->
                   <!--     </div>-->
                   <!--     -->
                        
                    <!--    @auth-->
                    <!--        <a href="{{ route('user.home') }}" class="header-user-btn me-3 text-white"><i class="las la-tachometer-alt"></i></i>@lang('Dashboard')</a>-->
                    <!--        <a href="{{ route('user.logout') }}" class="header-user-btn me-3 text-white"><i class="las la-user"></i>@lang('Logout')</a>-->
                    <!--    @else-->
                    <!--        <a href="{{ route('user.login') }}" class="header-user-btn me-3 text-white"><i class="las la-user"></i>@lang('Login')</a>-->
                    <!--        <a href="{{ route('user.register') }}" class="header-user-btn text-white">@lang('Register')</a>-->
                    <!--    @endauth -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

--}}
