<div class="sidebar bg--dark">
    <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
    <div class="sidebar__inner">
        <div class="sidebar__logo">
            <a href="{{route('admin.dashboard')}}" class="sidebar__main-logo"><img src="{{getImage(getFilePath('logoIcon') .'/logo_2.png')}}" alt="@lang('image')"></a>
        </div>

        <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
            <ul class="sidebar__menu">
                <li class="sidebar-menu-item {{menuActive('admin.dashboard')}}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link ">
                        <i class="menu-icon las la-home"></i>
                        <span class="menu-title">@lang('Dashboard')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.category.index')}}">
                    <a href="{{route('admin.category.index')}}" class="nav-link ">
                        <i class="menu-icon las la-bars"></i>
                        <span class="menu-title">@lang('Category')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.coupon*',3)}}">
                        <i class="menu-icon lab la-product-hunt"></i>
                        <span class="menu-title">@lang('Tools')</span>
                        @if(0 < $pendingCouponCount)
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.coupon*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.all')}} ">
                                <a href="{{ route('admin.coupon.all') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.pending')}} ">
                                <a href="{{ route('admin.coupon.pending') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Pending')</span>
                                    @if($pendingCouponCount)
                                        <span class="menu-badge pill bg--danger ms-auto">{{$pendingCouponCount}}</span>
                                    @endif
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.active')}} ">
                                <a href="{{ route('admin.coupon.active') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Active')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.expired')}} ">
                                <a href="{{ route('admin.coupon.expired') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Expired')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.rejected')}} ">
                                <a href="{{ route('admin.coupon.rejected') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Rejected')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.today')}} ">
                                <a href="{{route('admin.coupon.today')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Featured Tools')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.coupon.topdeal')}} ">
                                <a href="{{route('admin.coupon.topdeal')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Most Popular')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            {{--
            <!--Admin Store-->
            <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.store*',3)}}">
                        <i class="menu-icon las la-store"></i>
                        <span class="menu-title">@lang('Store')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.store*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.store.all')}} ">
                                <a href="{{ route('admin.store.all') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.store.active')}} ">
                                <a href="{{ route('admin.store.active') }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Active')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.store.featured')}} ">
                                <a href="{{route('admin.store.featured')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Featured')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

            {{--
            <!--Admin Package-->
            <li class="sidebar-menu-item {{menuActive('admin.package.index')}}">
                    <a href="{{route('admin.package.index')}}" class="nav-link ">
                        <i class="menu-icon las la-chart-bar"></i>
                        <span class="menu-title">@lang('Package')</span>
                    </a>
                </li> --}}

                <li class="sidebar-menu-item {{menuActive('admin.advertisement.index')}}">
                    <a href="{{route('admin.advertisement.index')}}" class="nav-link ">
                        <i class="menu-icon las la-ad"></i>
                        <span class="menu-title">@lang('Advertisements')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.users*',3)}}">
                        <i class="menu-icon las la-users"></i>
                        <span class="menu-title">@lang('Manage Users')</span>

                        @if($bannedUsersCount > 0 || $emailUnverifiedUsersCount > 0 || $mobileUnverifiedUsersCount > 0)
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.users*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.users.active')}} ">
                                <a href="{{route('admin.users.active')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Active Users')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.users.banned')}} ">
                                <a href="{{route('admin.users.banned')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Banned Users')</span>
                                    @if($bannedUsersCount)
                                        <span class="menu-badge pill bg--danger ms-auto">{{$bannedUsersCount}}</span>
                                    @endif
                                </a>
                            </li>

                            <li class="sidebar-menu-item  {{menuActive('admin.users.email.unverified')}}">
                                <a href="{{route('admin.users.email.unverified')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Email Unverified')</span>

                                    @if($emailUnverifiedUsersCount)
                                        <span class="menu-badge pill bg--danger ms-auto">{{$emailUnverifiedUsersCount}}</span>
                                    @endif
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.users.mobile.unverified')}}">
                                <a href="{{route('admin.users.mobile.unverified')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Mobile Unverified')</span>
                                    @if($mobileUnverifiedUsersCount)
                                        <span
                                            class="menu-badge pill bg--danger ms-auto">{{$mobileUnverifiedUsersCount}}</span>
                                    @endif
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.users.all')}} ">
                                <a href="{{route('admin.users.all')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All Users')</span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item {{menuActive('admin.users.notification.all')}}">
                                <a href="{{route('admin.users.notification.all')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Notification to All')</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

        {{--    
        <!--Admin Payment Gateway-->
        <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.gateway*',3)}}">
                        <i class="menu-icon las la-credit-card"></i>
                        <span class="menu-title">@lang('Payment Gateways')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.gateway*',2)}} ">
                        <ul>

                            <li class="sidebar-menu-item {{menuActive('admin.gateway.automatic.*')}} ">
                                <a href="{{route('admin.gateway.automatic.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Automatic Gateways')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.gateway.manual.*')}} ">
                                <a href="{{route('admin.gateway.manual.index')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Manual Gateways')</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li> --}}

         {{-- 
         <!--Admin Payments-->
         <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.deposit*',3)}}">
                        <i class="menu-icon las la-file-invoice-dollar"></i>
                        <span class="menu-title">@lang('Payments')</span>
                        @if(0 < $pendingDepositsCount)
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.deposit*',2)}} ">
                        <ul>

                            <li class="sidebar-menu-item {{menuActive('admin.deposit.pending')}} ">
                                <a href="{{route('admin.deposit.pending')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Pending Payments')</span>
                                    @if($pendingDepositsCount)
                                        <span class="menu-badge pill bg--danger ms-auto">{{$pendingDepositsCount}}</span>
                                    @endif
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.deposit.approved')}} ">
                                <a href="{{route('admin.deposit.approved')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Approved Payments')</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.deposit.successful')}} ">
                                <a href="{{route('admin.deposit.successful')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Successful Payments')</span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item {{menuActive('admin.deposit.rejected')}} ">
                                <a href="{{route('admin.deposit.rejected')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Rejected Payments')</span>
                                </a>
                            </li>


                            <li class="sidebar-menu-item {{menuActive('admin.deposit.initiated')}} ">

                                <a href="{{route('admin.deposit.initiated')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Initiated Payments')</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item {{menuActive('admin.deposit.list')}} ">
                                <a href="{{route('admin.deposit.list')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All Payments')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.ticket*',3)}}">
                        <i class="menu-icon la la-ticket"></i>
                        <span class="menu-title">@lang('Support Ticket') </span>
                        @if(0 < $pendingTicketCount)
                            <span class="menu-badge pill bg--danger ms-auto">
                                <i class="fa fa-exclamation"></i>
                            </span>
                        @endif
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.ticket*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.ticket.pending')}} ">
                                <a href="{{route('admin.ticket.pending')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Pending Ticket')</span>
                                    @if($pendingTicketCount)
                                    <span
                                    class="menu-badge pill bg--danger ms-auto">{{$pendingTicketCount}}</span>
                                    @endif
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.ticket.closed')}} ">
                                <a href="{{route('admin.ticket.closed')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Closed Ticket')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.ticket.answered')}} ">
                                <a href="{{route('admin.ticket.answered')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Answered Ticket')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.ticket')}} ">
                                <a href="{{route('admin.ticket')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('All Ticket')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                  {{--
                  <!--Admin Reports-->
                  <li class="sidebar-menu-item sidebar-dropdown">
                                <a href="javascript:void(0)" class="{{menuActive('admin.report*',3)}}">
                                    <i class="menu-icon la la-list"></i>
                                    <span class="menu-title">@lang('Report') </span>
                                </a>
                                <div class="sidebar-submenu {{menuActive('admin.report*',2)}} ">
                                    <ul>
                                        <li class="sidebar-menu-item {{menuActive(['admin.report.login.history','admin.report.login.ipHistory'])}}">
                                            <a href="{{route('admin.report.login.history')}}" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">@lang('Login History')</span>
                                            </a>
                                        </li>
            
                                        <li class="sidebar-menu-item {{menuActive('admin.report.notification.history')}}">
                                            <a href="{{route('admin.report.notification.history')}}" class="nav-link">
                                                <i class="menu-icon las la-dot-circle"></i>
                                                <span class="menu-title">@lang('Notification History')</span>
                                            </a>
                                        </li>
            
                                    </ul>
                                </div>
                            </li> --}}
                            

                <li class="sidebar__menu-header">@lang('Settings')</li>

                <li class="sidebar-menu-item {{menuActive('admin.setting.index')}}">
                    <a href="{{route('admin.setting.index')}}" class="nav-link">
                        <i class="menu-icon las la-life-ring"></i>
                        <span class="menu-title">@lang('General Setting')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.setting.logo.icon')}}">
                    <a href="{{route('admin.setting.logo.icon')}}" class="nav-link">
                        <i class="menu-icon las la-images"></i>
                        <span class="menu-title">@lang('Logo & Favicon')</span>
                    </a>
                </li>

              {{--
              <!--Admin Extensions-->
              <li class="sidebar-menu-item {{menuActive('admin.extensions.index')}}">
                        <a href="{{route('admin.extensions.index')}}" class="nav-link">
                            <i class="menu-icon las la-cogs"></i>
                            <span class="menu-title">@lang('Extensions')</span>
                        </a>
                    </li> --}}
                    
                    

          {{--
          <!--Admin Language-->
          <li class="sidebar-menu-item  {{menuActive(['admin.language.manage','admin.language.key'])}}">
                    <a href="{{route('admin.language.manage')}}" class="nav-link"
                       data-default-url="{{ route('admin.language.manage') }}">
                        <i class="menu-icon las la-language"></i>
                        <span class="menu-title">@lang('Language') </span>
                    </a>
                </li> --}}

                <li class="sidebar-menu-item {{menuActive('admin.seo')}}">
                    <a href="{{route('admin.seo')}}" class="nav-link">
                        <i class="menu-icon las la-globe"></i>
                        <span class="menu-title">@lang('SEO Manager')</span>
                    </a>
                </li>

           {{--
           <!--Admin Notification Settings-->
           <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.setting.notification*',3)}}">
                        <i class="menu-icon las la-bell"></i>
                        <span class="menu-title">@lang('Notification Setting')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.setting.notification*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.setting.notification.global')}} ">
                                <a href="{{route('admin.setting.notification.global')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Global Template')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.setting.notification.email')}} ">
                                <a href="{{route('admin.setting.notification.email')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Email Setting')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.setting.notification.sms')}} ">
                                <a href="{{route('admin.setting.notification.sms')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('SMS Setting')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.setting.notification.templates')}} ">
                                <a href="{{route('admin.setting.notification.templates')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Notification Templates')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                <li class="sidebar__menu-header">@lang('Frontend Manager')</li>

            {{--            
            <!--Frontend manager manage template-->
            <li class="sidebar-menu-item {{menuActive('admin.frontend.templates')}}">
                            <a href="{{route('admin.frontend.templates')}}" class="nav-link ">
                                <i class="menu-icon la la-html5"></i>
                                <span class="menu-title">@lang('Manage Templates')</span>
                            </a>
                        </li>  --}}

                <li class="sidebar-menu-item {{menuActive('admin.frontend.manage.*')}}">
                    <a href="{{route('admin.frontend.manage.pages')}}" class="nav-link ">
                        <i class="menu-icon la la-list"></i>
                        <span class="menu-title">@lang('Manage Pages')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.frontend.sections*',3)}}">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title">@lang('Manage Section')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.frontend.sections*',2)}} ">
                        <ul>
                            @php
                               $lastSegment =  collect(request()->segments())->last();
                            @endphp
                            @foreach(getPageSections(true) as $k => $secs)
                                @if($secs['builder'])
                                    <li class="sidebar-menu-item  @if($lastSegment == $k) active @endif ">
                                        <a href="{{ route('admin.frontend.sections',$k) }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">{{__($secs['name'])}}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>
                
                {{--
                <!--Extra section-->

                <li class="sidebar__menu-header">@lang('Extra')</li>

                <li class="sidebar-menu-item {{menuActive('admin.maintenance.mode')}}">
                    <a href="{{route('admin.maintenance.mode')}}" class="nav-link">
                        <i class="menu-icon las la-robot"></i>
                        <span class="menu-title">@lang('Maintenance Mode')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.setting.cookie')}}">
                    <a href="{{route('admin.setting.cookie')}}" class="nav-link">
                        <i class="menu-icon las la-cookie-bite"></i>
                        <span class="menu-title">@lang('GDPR Cookie')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.system*',3)}}">
                        <i class="menu-icon la la-server"></i>
                        <span class="menu-title">@lang('System')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.system*',2)}} ">
                        <ul>
                            <li class="sidebar-menu-item {{menuActive('admin.system.info')}} ">
                                <a href="{{route('admin.system.info')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Application')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.system.server.info')}} ">
                                <a href="{{route('admin.system.server.info')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Server')</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item {{menuActive('admin.system.optimize')}} ">
                                <a href="{{route('admin.system.optimize')}}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">@lang('Cache')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-menu-item {{menuActive('admin.setting.custom.css')}}">
                    <a href="{{route('admin.setting.custom.css')}}" class="nav-link">
                        <i class="menu-icon lab la-css3-alt"></i>
                        <span class="menu-title">@lang('Custom CSS')</span>
                    </a>
                </li>

                <li class="sidebar-menu-item  {{menuActive('admin.request.report')}}">
                    <a href="{{route('admin.request.report')}}" class="nav-link"
                       data-default-url="{{ route('admin.request.report') }}">
                        <i class="menu-icon las la-bug"></i>
                        <span class="menu-title">@lang('Report & Request') </span>
                    </a>
                </li> 
                --}}
                
            </ul>
            <div class="text-center mb-3 text-uppercase">
                <span class="text--primary">{{__(systemDetails()['name'])}}</span>
                <span class="text--success">@lang('V'){{systemDetails()['version']}} </span>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->

@push('script')
    <script>
        if($('li').hasClass('active')){
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            },500);
        }
    </script>
@endpush
