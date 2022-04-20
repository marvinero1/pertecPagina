<div class="col-md-3 left_col pt-2">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;padding-top: 5px;">
            <a href="{{ route('admin.dashboard') }}" class="site_title">
                <img src="{{url('/assets/images/icon.png')}}" alt="Logo" width="50px;" height="50px;">
                <span>Pertec S.R.L ©</span>
            </a>
        </div><br><br><br>

        <div class="clearfix"></div><br>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ auth()->user()->avatar }}" alt="perfil" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2>{{ auth()->user()->name }}</h2>
            </div>
        </div><br/>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>{{ __('views.backend.section.navigation.sub_header_0') }}</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_0_1') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>{{ __('views.backend.section.navigation.sub_header_1') }}</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin.producto.index') }}">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_4') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users') }}">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_5') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_1') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.restore') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_3') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.permissions') }}">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_2') }}
                        </a>
                    </li>
                </ul>
            </div>
            {{-- <div class="menu_section">
                <h3>{{ __('views.backend.section.navigation.sub_header_2') }}</h3>
                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-list"></i>
                            {{ __('views.backend.section.navigation.menu_2_1') }}
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ route('log-viewer::dashboard') }}">
                                    {{ __('views.backend.section.navigation.menu_2_2') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('log-viewer::logs.list') }}">
                                    {{ __('views.backend.section.navigation.menu_2_3') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> --}}
            {{-- <div class="menu_section">
                <h3>{{ __('views.backend.section.navigation.sub_header_3') }}</h3>
                <ul class="nav side-menu">
                  <li>
                      <a href="http://l64.cc/nlaff/VXZPYHCTC" target="_blank" title="Online Software License Management"><i class="fa fa-external-link" aria-hidden="true"></i>Labs64 NetLicensing</a>
                  </li>
                  <li>
                      <a href="https://www.labs64.com/guidechimp/" target="_blank" title="Interactive Guided Product Tours"><i class="fa fa-external-link" aria-hidden="true"></i>GuideChimp</a>
                  </li>
                </ul>
            </div> --}}
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
