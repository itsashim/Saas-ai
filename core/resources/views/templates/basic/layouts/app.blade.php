<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->siteName(__($pageTitle)) }}</title>
    @include('partials.seo')
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/global/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/lib/slick.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/main.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/custom.css') }}">
    @stack('style-lib')

    @stack('style')

    <link rel="stylesheet"
        href="{{ asset($activeTemplateTrue . 'css/color.php') }}?color={{ $general->base_color }}&secondColor={{ $general->secondary_color }}">
</head>

<body>
    @stack('fbComment')
    @yield('panel')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slick  slider js -->
    <script src="{{ asset($activeTemplateTrue . 'js/lib/slick.min.js') }}"></script>
    <!-- wow js  -->
    <script src="{{ asset($activeTemplateTrue . 'js/lib/wow.min.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue . 'js/lib/jquery.countdown.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset($activeTemplateTrue . 'js/app.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'js/custom.js') }}"></script>

    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')

    <!--Ads Cross Start-->
    <script>
        $(".ads_cross").on('click', function() {
            $(".ads_sec").css("display", "none");
        });
    </script>
    <!--Ads Cross End-->

    {{-- Ion Icons start --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- Ion Icons End --}}

    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{ route('home') }}/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                if (element['type'] != 'checkbox') {
                    element = $(element);
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('{{ route('cookie.accept') }}', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.copy-btn').on('click', function(e) {
                e.preventDefault();
                var copyText = document.getElementById("coupon-text");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");

                $(this).tooltip('show')
                    .attr('data-bs-original-title', 'Copied')
                    .tooltip('show');

                notify('success', 'Copied');

            });

            $('.copy-btn').on('mouseout', function(e) {
                $(this).attr('data-bs-original-title', 'Copy to clipboard');
            });

        })(jQuery);
    </script>

</body>

</html>
