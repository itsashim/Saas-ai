@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <style>
        .tool-description {
            background-color: #0b0b0b;
        }

        .tool_wrap {
            position: relative;
        }

        .text_gray {
            color: #a6a6a6;
        }

        .tool_wrap p {
            width: min(100%, 70ch);
        }


        .left,
        .right {
            background-color: #1d1b30;
            border-radius: 10px;
            color: white;
            padding: 2rem;
        }

        .left {
            max-width: 700px;
            /* height: 200vh; */
        }

        .social_links svg {
            color: white;
            stroke: white;
            fill: white;
            width: 1.3rem;
            aspect-ratio: 1;
            cursor: pointer;
        }

        .square {
            max-width: 20rem;
            width: 100%;
            border: 2px solid white;
            border-radius: 10px;
            overflow: hidden;
        }


        .square img {
            width: 100%;
        }

        .left ul {
            list-style-type: none;
            padding-left: 0;
        }

        .left ul li {
            margin-bottom: 0.4rem;
        }

        .left ul li:first-child {
            margin-top: 2rem;
        }

        .left ul li:last-child {
            margin-bottom: 0;
        }

        .left .tool_btn {
            background-color: #645bf9;
            padding: 0.8rem 1rem;
            color: white;
            font-size: 1.1rem;
            border-radius: 100px;
            transition: all 0.3s;
        }

        .left .tool_btn:hover {
            background-color: #837cfa;
        }

        .right {
            max-width: 500px;
            position: sticky;
            top: 40px;
        }

        .right .img_wrap {
            width: 5rem;
            border-radius: 15px;
            overflow: hidden;
        }

        .right .featured_tool .img_wrap img {
            width: 100%;
        }

        .right .network_tool .img_wrap {
            width: 3.5rem;
            border-radius: 15px;
            overflow: hidden;
        }

        .right .network_tool .img_wrap img {
            width: 100%;
        }
    </style>




    <section class="tool-description  p-5">

        <div class="tool_wrap row justify-content-center">
            <!-- Tool Side Left Start -->
            <div class=" col-lg-7 p-4">
                <div class="left ms-lg-auto">
                    <h3>{{ __($product->title) }}</h3>
                    {{-- <p>Swift, easy to use, zero-learning-curve AI for Virtual Staging, Remodling, Landscaping, Interior
                            Designing, & beyond - tailored for Realtors, Marketers, Photographers, Developers, & Interior
                            Designers.
                        </p> --}}

                    <div class="d-flex justify-content-between my-5">
                        <div>
                            <p class="text_gray mb-0">Published on</p>
                            <p>{{ showDateTime($product->ending_date) }}</p>
                        </div>
                        <div class="social_links d-flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                <path
                                    d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                                    fill-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                <path
                                    d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                <path
                                    d="M414.73 97.1A222.14 222.14 0 00256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0029.78 111L32 480l118.25-30.87a223.63 223.63 0 00106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 00414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 01-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0171.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 01185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 00-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0031.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z"
                                    fill-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="square mb-5">
                        <img class=""
                            src="{{ getImage(getFilePath('coupon') . '/' . @$product->image, getFileSize('coupon')) }}"
                            alt="square image">
                    </div>
                    <h3>Overview</h3>
                    <p class="mt-4">{{ $product->description }}</p>
                </div>
            </div>
            <!-- Tool Side Left End -->
            <!-- Tool Side Right Start-->
            <div class=" col-lg-5 p-4">
                <div class="right">
                    <div class="featured">
                        <div class="d-flex justify-content-between">
                            <p class="text_gray">Featured</p>
                            <p class="text-end">Get Featured</p>
                        </div>
                        @foreach ($featureProduct as $feature)
                            <div class="featured_tool d-flex gap-3 mt-3">
                                <div class="img_wrap">
                                    <img src="{{ getImage(getFilePath('coupon') . '/' . @$feature->image, getFileSize('coupon')) }}"
                                        alt="">
                                </div>
                                <div>
                                    <h4>{{ $feature->title }}</h4>
                                    <p class="mb-0">{{ Str::limit(strip_tags($feature->description), 75) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="network mt-5">
                        <div class="d-flex justify-content-between ">
                            <p class="text_gray mb-0 d-inline ">SaaS Driven Network</p>
                            <p class="mb-0 d-inline text-end">Learn more</p>
                        </div>
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="network_tool d-flex justify-content-between my-4 gap-3">
                                <div class="img_wrap">
                                    <img src="{{ getImage(getFilePath('coupon') . '/' . @$relatedProduct->image, getFileSize('coupon')) }}"
                                        alt="">
                                </div>
                                <div>
                                    <h4>{{ $relatedProduct->title }}</h4>
                                    <p class="mb-0">{{ Str::limit(strip_tags($relatedProduct->description), 75) }}</p>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="network_tool d-flex justify-content-between my-4 gap-3">
                            <div class="img_wrap">
                                <img src="{{ asset('core/public/images/square.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4>AI Forums</h4>
                                <p class="mb-0">A community to discuss AI, GPTs, SaaS and more.</p>
                            </div>
                        </div>
                        <div class="network_tool d-flex justify-content-between my-4 gap-3">
                            <div class="img_wrap">
                                <img src="{{ asset('core/public/images/square.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4>AI Forums</h4>
                                <p class="mb-0">A community to discuss AI, GPTs, SaaS and more.</p>
                            </div>
                        </div>
                        <div class="network_tool d-flex justify-content-between my-4 gap-3">
                            <div class="img_wrap">
                                <img src="{{ asset('core/public/images/square.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4>AI Forums</h4>
                                <p class="mb-0">A community to discuss AI, GPTs, SaaS and more.</p>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
            <!-- Tool Side Right end-->
        </div>
    </section>
@endsection
