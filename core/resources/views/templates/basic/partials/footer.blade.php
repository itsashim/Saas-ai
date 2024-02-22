@php
    $policyPages = getContent('policy_pages.element', false, null, true);
@endphp
<footer class="footer-section position-relative">

    <div class="news-letter">
        <h2 class="text-white fw-semibold mb-4 text-center">Join Our Ai Newsletter For Free</h2>
        <p class="footer_text text-white mb-3 text-center">Get the latest in AI delivered straight to your inbox! From
            categorized AI
            tools to weekly
            new launches
            and breaking news, stay in the loop effortlessly. Subscribe now!</p>
        <div class="newsletter_wrap">
            <div class="newsletter d-flex">
                <input type="text" placeholder="Enter Your Email">
                <button>Submit</button>
            </div>
        </div>

    </div>

    <div class="row container mx-auto py-4">
        <div class="col-lg-6">
            <div>
                <div class="footer-logo mb-2">
                    <img src="{{ asset('assets/images/logoIcon/logo_2.png') }}" alt="">
                </div>
                <p class="text-white fw-bold" style="font-size: 1rem;
    max-width: 13ch;">Lets take your AI Tool to
                    next level</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="footer_links d-flex justify-content-between flex-wrap mt-1 gap-3">
                <div>
                    <h6 class="text-white">Platform</h6>
                    <ul>
                        <li><a href="">SEO & Social Media</a></li>
                        <li><a href="">Blog Post</a></li>
                        <li><a href="">Home</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-white">Company</h6>
                    <ul>
                        <li><a href="">Affiliations</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Tutorials</a></li>
                        <li><a href="">What's New</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-white">Resources</h6>
                    <ul>
                        <li><a href="">Advertise</a></li>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div
        class="container footer_bottom justify-content-center justify-content-sm-between d-flex align-items-center mb-5 flex-wrap">
        <div class="footer-logo text-white">
            <img src="{{ asset('assets/images/logoIcon/logo_2.png') }}" class="me-2" alt="">
            AI TOOL CART
        </div>
        <div>
            <p class="fw-bold text-white text-center mb-2">Info@aitoolkart.com</p>
            <div class="about_social-links ">
                <div class="wrap d-flex gap-3">
                    <div class="social-link">
                        <img src="{{ asset('assets/images/icons/dribble.png') }}" alt="">
                    </div>
                    <div class="social-link">
                        <img src="{{ asset('assets/images/icons/facebook.png') }}" alt="">
                    </div>
                    <div class="social-link">
                        <img src="{{ asset('assets/images/icons/twitter.png') }}" alt="">
                    </div>
                    <div class="social-link">
                        <img src="{{ asset('assets/images/icons/insta.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <button class="footer_bottom-submit mt-3 mt-sm-0">Submit</button>
    </div>

    {{-- <div class="footer-section__top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <a href="{{ route('home') }}" class="footer-logo"><img
                            src="{{ getImage(getFilePath('logoIcon') . '/logo_2.png') }}" alt="image"></a>
                    <ul class="footer-inline-link justify-content-center mt-4">
                        @foreach ($policyPages as $policy)
                            <li>
                                <a
                                    href="{{ route('policy.pages', [slug($policy->data_values->title), $policy->id]) }}">{{ __($policy->data_values->title) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="footer-section__bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="text-white">@lang('Copyright') &copy; {{ date('Y') }} <a
                            href="{{ route('home') }}">{{ __($general->sitename) }}</a>. @lang('All Right Reserved')</p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="decortion">
        <div class="decoration5">
            <img src="{{ asset('assets/images/icons/elipse.png') }}" alt="">
        </div>
    </div>
</footer>
