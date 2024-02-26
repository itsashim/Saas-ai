{{-- ORIGINAL CATEGORY SECTION OF WEBSITE START --}}
@php
    $category = getContent('category.content', true);
    $categories = \App\Models\Category::where('status', 1)->latest()->get();
@endphp
{{-- @php
    $category = getContent('category.content', true);
    $categories = \App\Models\Category::where('status', 1)->latest()->get();
@endphp
<div class="category-section section--bg2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3">
                <div class="category-content justify-content-lg-start justify-content-center">
                    <h3 class="category-title">{{ __($category->data_values->heading) }}</h3>
                </div>
            </div>
            <div class="col-lg-9 ps-lg-4">
                <div class="category-slider">
                    @foreach ($categories as $category)
                        <div class="single-slide">
                            <div class="category-item has--link">
                                <a href="{{ route('coupon.filter.type', ['category', $category->id]) }}"
                                    class="item--link"></a>
                                @php echo $category->icon @endphp
                                <p class="caption">{{ __($category->name) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- ORIGINAL CATEGORY SECTION OF WEBSITE END --}}


{{-- ADDED SECTION  START --}}
<section class="about_sec">
    <div class="about_wrapper">
        <h2>Lets Have A Look on Our Platfrom: Ai Tool Kart</h2>
        <div class="about_content row">
            <div class="col-lg-6">
                <div class="con  gap-3 justify-content-center ">
                    <div class="about_card">
                        <h6 class="text-center text-sm-start">10 Millions + Total Views</h6>
                        <p class="text-center text-sm-start">"Welcome to our AI Tool Directory,
                            your one-stop solution hub!
                            With over 10 million views across multiple
                            platforms and collaborations with popular
                            influencers, we're your trusted destination
                            for cutting-edge AI tools.
                            Join us and revolutionize your workflow!"</p>
                    </div>
                    <div class="about_subcard bg-none">

                        <img src="{{ asset('assets/images/icons/foundry.png') }}" alt="">
                        {{-- <div>
                            <p class="fs-3">foundry <span>private</span></p>
                            <span>basementstudio/foundry</span>
                            <p class="text-white"><span class="fw-medium">John Deo</span> is active</p>
                            <div class="user_circle d-flex align-items-center">
                                <figure>
                                    <img src="https://randomuser.me/api/portraits/men/26.jpg" alt="dummy user">
                                </figure>
                                <figure>
                                    <img src="https://randomuser.me/api/portraits/men/7.jpg" alt="dummy user">
                                </figure>
                                <figure>
                                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="dummy user">
                                </figure>
                            </div>
                            <p>Repository created</p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="con justify-content-center ">
                    <div class="about_card">
                        <h6 class="text-center text-sm-start">Ai News And Ai Blogs</h6>
                        <p class="text-center text-sm-start">"As the proud owner of our AI Tool Directory,
                            we're dedicated to bringing you the latest AI
                            news and the most advanced tools available.
                            With curated blogs offering insightful updates
                            , we're committed to keeping you at the
                            forefront of innovation.Join us on this journey of discovery and
                            empowerment!"</p>
                    </div>
                    <div class="about_subcard about_bg">
                        <div class="wrap p-4">
                            <h2 class="mb-0">Blog</h2>
                            <span>Top 10 Ai Tool in 2024</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="about_content row">
            <div class="col-lg-4">
                <div class="con justify-content-center ">
                    <div class="about_card row">
                        <div class="col-12 col-sm-6  col-lg-12">
                            <h6 class="text-center text-sm-start"> Only 11 Tools Per Niche</h6>
                            <p class="text-center text-sm-start">"At our AI Tool Directory, we believe in quality over
                                quantity. That's why we feature only the top 11 tools
                                per niche. By carefully curating this selection, we ensure
                                that you get access to the best-in-class solutions
                                without overwhelming choices. Trust in our dedication
                                to providing you with the most effective tools for your
                                needs."</p>
                        </div>
                        <div class="col-12 col-sm-6  col-lg-12">
                            <figure>
                                <img src="{{ asset('assets/images/icons/top-11.jpeg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="con  justify-content-center ">
                    <div class="about_card row">
                        <div class="col-12 col-sm-6  col-lg-12">
                            <figure>
                                <img src="{{ asset('assets/images/icons/ai-influencer.jpeg') }}" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6  col-lg-12">
                            <h6 class="text-center text-sm-start">Ai influencers With Us</h6>

                            <p class="text-center text-sm-start">Choose from a wide selection of blocks. Use primitive
                                blocks-text, images, dates, etc or
                                more
                                complex ones collections, components and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="con justify-content-center ">
                    <div class="about_card row" style="width: 100%">
                        <div class="col-12 col-sm-6  col-lg-12">
                            <h6 class="text-center text-sm-start">Customer Trust</h6>

                            <p class="text-center text-sm-start">See what you're about to commit across your whole
                                repository with the diff view. Discard
                                changes if you've made a mistake. Learn more
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <figure>
                                <img src="{{ asset('assets/images/icons/customer-support.jpeg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_footer ">
            <div
                class="wrap d-flex flex-wrap py-2 px-4 justify-content-center justify-content-sm-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <h4 class="text-white">Join Our Community Today</h4>
                    <img src="{{ asset('assets/images/icons/ai-favicon.png') }}" alt="">
                </div>
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
        </div>
    </div>
    {{-- animation  Start --}}
    <div class="about_decoration">
        <div class="decoration4">
            <img src="{{ asset('assets/images/icons/blue-circle.png') }}" alt="">
        </div>
        <div class="decoration7 d-none d-md-block">
            <img src="{{ asset('assets/images/icons/decoration7.png') }}" alt="">
        </div>
    </div>
    {{-- animation End --}}
    <div class="hr_line" style="margin-top: 7rem"></div>


    {{-- Categories Section Start --}}
    <div class="footer-logo mt-5">
        <img class="d-block mx-auto" src="{{ asset('assets/images/logoIcon/logo_2.png') }}" alt="">
    </div>
    <h3 class="text-white sub_head text-center  fw-bold">Categories</h3>

    {{-- Types Tab Start --}}
    <div class="types_tab d-flex gap-2 flex-wrap justify-content-center pb-5">
        {{--  --}}
        @foreach ($categories as $category)
            {{-- @php echo $category->icon @endphp --}}

            <a href="{{ route('coupon.filter.type', ['category', $category->id]) }}" class="tab_wrap">
                <span class="tab">{{ __($category->name) }}</span>
            </a>
        @endforeach
    </div>
    {{-- Types Tab End. --}}
    {{-- Categories Section End  --}}
</section>
{{-- ADDED SECTION  END --}}
