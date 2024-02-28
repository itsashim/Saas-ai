@php

    $blog = getContent('blog.content', true);

    $blogs = getContent('blog.element', false, 3);

@endphp

<div class="hr_line"></div>

<section class="pt-80 pb-80 blog_sec">

    <div class="mx-auto" style="max-width: 1200px">
        <div class="row " style="width: 100%">
            <div class="col-lg-5 pe-0 pe-3-sm">
                <div class="section-header">

                    <h2 class="section-title text-white mb-4 text-center text-lg-start">
                        {{ __($blog->data_values->heading) }}</h2>

                    {{-- Main Blog Start --}}
                    @foreach ($blogs as $index => $blog)
                        @if ($index === 2)
                            {{-- Display only the third blog entry --}}
                            <div class="col-lg-12 d-none d-lg-block">
                                <div class="blog-item">
                                    <div class="blog-item__thumb blog_main">
                                        <img src="{{ getImage('assets/images/frontend/blog/thumb_' . $blog->data_values->blog_image, '425x425') }}"
                                            alt="image">
                                    </div>
                                    <div class="blog-item__content">
                                        <div class="blog_tags">
                                            <span class="tag d-inline-block">Article</span>
                                        </div>
                                        <h4 class="title mb-0">
                                            <a
                                                href="{{ route('blog.details', [slug($blog->data_values->title), $blog->id]) }}">
                                                {{ __($blog->data_values->title) }}
                                            </a>
                                        </h4>
                                        <span
                                            class="mb-2 blog_date">{{ showDateTime($blog->created_at, 'd-m-Y') }}</span>
                                        <p class="mt-3 blog_para text-white ">
                                            @php
                                                echo strLimit(strip_tags($blog->data_values->description), 130);
                                            @endphp
                                        </p>
                                        <a href="{{ route('blog.details', [slug($blog->data_values->title), $blog->id]) }}"
                                            class="read-more-btn mt-3">
                                            @lang('Read More')
                                            <img src="{{ asset('assets/images/icons/left-dashdash.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div><!-- blog-item end -->
                            </div>
                        @endif
                    @endforeach
                    {{-- Main Blog End --}}
                </div>
            </div>
            <div class="col-lg-7 ps-5">
                <div class="row flex-column gy-4 justify-content-center">

                    @foreach ($blogs as $blog)
                        <div class="col-lg-12">

                            <div class="blog-item row">

                                <div class="blog-item__thumb col-md-6">

                                    <img src="{{ getImage('assets/images/frontend/blog/thumb_' . $blog->data_values->blog_image, '425x425') }}"
                                        alt="image">

                                </div>

                                <div class="blog-item__content col-md-6">



                                    <h4 class="title mb-0"><a
                                            href="{{ route('blog.details', [slug($blog->data_values->title), $blog->id]) }}">{{ __($blog->data_values->title) }}</a>
                                    </h4>
                                    <span class="mb-2 blog_date">{{ showDateTime($blog->created_at, 'd-m-Y') }}</span>
                                    {{-- <i class="far fa-calendar-alt me-1"></i> --}}
                                    <p class="mt-3 blog_para">

                                        @php

                                            echo strLimit(strip_tags($blog->data_values->description), 130);

                                        @endphp

                                    </p>

                                    <a href="{{ route('blog.details', [slug($blog->data_values->title), $blog->id]) }}"
                                        class="read-more-btn mt-3">@lang('Read More') <img
                                            src="{{ asset('assets/images/icons/left-dashdash.png') }}"
                                            alt=""></a>

                                </div>

                            </div><!-- blog-item end -->

                        </div>
                    @endforeach

                </div>
            </div>
            <a href="{{ route('blog') }}" class="btn text-white  btn-md flex-shrink-0 mx-auto ">@lang('View All')</a>


        </div>
    </div>




</section>
