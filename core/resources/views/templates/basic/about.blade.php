@extends($activeTemplate . 'layouts.frontend')

@section('styles')
@endsection

@section('content')
    <style>
        .inner-hero.bg_img {
            display: none;
        }
    </style>

    {{-- HERO Section Start --}}
    <section class="hero_sec">
        <div class="hero_wrap" style="padding-top: 7rem !important">
            <h2 class="text-white fw-light text-center">About Us</h2>
            <h1 class="text-center mx-auto fw-bold mt-3">
                AI TOOL DIRECTORY
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
                                    <img src="{{ asset('assets/images/icons/basic-blocks.png') }}" alt="">
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

    </section>
    {{-- ADDED SECTION  END --}}




    <div class="faq_sec d-none d-md-block pb-5 mt-5 pt-5">
        <div class="faq_wrap">
            <div class="container">
                <h2 class="text-white text-start mb-5 pb-2">Frequerntly Asked Questions</h2>
                <div class="row align-items-start">
                    {{-- Faq Question Start --}}
                    <div class="col-lg-6">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active d-flex justify-content-between align-items-center"
                                id="v-pills-one-tab" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button"
                                role="tab" aria-controls="v-pills-one" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-2"></div>
                                    <p>What is a Payment Gateway?</p>
                                </div>
                                <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
                            </button>
                            <button class="nav-link d-flex justify-content-between align-items-center"
                                id="v-pills-two-tab" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button"
                                role="tab" aria-controls="v-pills-two" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-2"></div>
                                    <p>Do I need to pay to instapay even when there is no transaction going
                                        on
                                        in my business?</p>
                                </div>
                                <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
                            </button>
                            <button class="nav-link d-flex justify-content-between align-items-center"
                                id="v-pills-three-tab" data-bs-toggle="pill" data-bs-target="#v-pills-three"
                                type="button" role="tab" aria-controls="v-pills-three" aria-selected="false">

                                <div class="d-flex align-items-center">
                                    <div class="circle me-2"></div>
                                    <p>What platforms does instapay payment
                                        gateway support?</p>
                                </div>
                                <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
                            </button>
                            <button class="nav-link d-flex justify-content-between align-items-center"
                                id="v-pills-four-tab" data-bs-toggle="pill" data-bs-target="#v-pills-four"
                                type="button" role="tab" aria-controls="v-pills-four" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-2"></div>
                                    <p>Does instapay provide international
                                        payments support?</p>
                                </div>
                                <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
                            </button>
                            <button class="nav-link d-flex justify-content-between align-items-center"
                                id="v-pills-five-tab" data-bs-toggle="pill" data-bs-target="#v-pills-five"
                                type="button" role="tab" aria-controls="v-pills-five" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="circle me-2"></div>
                                    <p> Is there any setup fee or annual
                                        maintainace fee that I need to pay
                                        regularly?</p>
                                </div>
                                <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
                            </button>
                        </div>
                    </div>

                    {{-- Faq Question End --}}

                    {{-- Faq Answer start --}}
                    <div class="col-lg-6">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel"
                                aria-labelledby="v-pills-one-tab">
                                <h4 class="text-white text-center fw-bold">What is a Payment Gateway?</h4>
                                <p class="mt-5 text-white">A payment gateway is an ecommerce service that processes online
                                    payments
                                    for
                                    online as well as offline businesses. Payment gateways help accept payments by
                                    transferring
                                    key information from their merchant websites to issuing banks, card associations and
                                    online
                                    wallet players.</p>
                                <p class="text-white mt-3">
                                    Payment gateways play a vital role in the online transaction process, which is the
                                    realisation of value, and hence are seen as an important pillar of ecommerce.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-two" role="tabpanel"
                                aria-labelledby="v-pills-two-tab">
                                two</div>
                            <div class="tab-pane fade" id="v-pills-three" role="tabpanel"
                                aria-labelledby="v-pills-three-tab">three</div>
                            <div class="tab-pane fade" id="v-pills-four" role="tabpanel"
                                aria-labelledby="v-pills-four-tab">
                                four</div>
                            <div class="tab-pane fade" id="v-pills-five" role="tabpanel"
                                aria-labelledby="v-pills-five-tab">
                                five</div>
                        </div>
                    </div>

                    {{-- Fa1 Answer End --}}
                </div>
            </div>
        </div>
    </div>
@endsection
