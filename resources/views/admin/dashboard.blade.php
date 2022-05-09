@extends('admin.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="row " style="padding-top: 55px;">
        <div>
            <h1 class="font" style="text-align: center;">{{ __('views.admin.dashboard.title2') }}</h1>        
        </div>

        <div>
            <img src="{{ url('assets/images/icon.png') }}" alt="logo" width="275px;" height="275px;" style="display: block;margin: auto;">
        </div>
    </div><br><br><hr><br>
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-cubes "></i> {{ __('views.admin.dashboard.count_2') }}</span>
            <div>
                <span class="count green">{{  $counts['users'] - $counts['users_inactive'] }}</span>
                {{-- <span class="count">/</span> --}}
                {{-- <span class="count red">{{ $counts['users_inactive'] }}</span> --}}
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-shopping-cart"></i> {{ __('views.admin.dashboard.count_5') }}</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-address-book-o"></i> {{ __('views.admin.dashboard.count_4') }}</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i> {{ __('views.admin.dashboard.count_0') }}</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-address-card"></i> {{ __('views.admin.dashboard.count_1') }}</span>
            <div>
                <span class="count green">{{  $counts['users'] - $counts['users_unconfirmed'] }}</span>
                <span class="count">/</span>
                <span class="count red">{{ $counts['users_unconfirmed'] }}</span>
            </div>
        </div>
       
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-lock"></i> {{ __('views.admin.dashboard.count_3') }}</span>
            <div>
                <span class="count green">{{  $counts['protected_pages'] }}</span>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <script type='text/javascript'>
        document.oncontextmenu = function(){return false}
    </script>
    {{-- <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div id="registration_usage" class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                    <h2>{{  __('views.admin.dashboard.sub_title_2') }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="" style="width:100%">
                        <tr>
                            <th></th>
                            <th>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                    <p class="">{{  __('views.admin.dashboard.sub_title_3') }}</p>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <p class="">{{  __('views.admin.dashboard.sub_title_4') }}</p>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <canvas class="canvasChart" height="140" width="140" style="margin: 15px 10px 10px 0">
                                </canvas>
                            </td>
                            <td>
                                <table class="tile_info">
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square aero"></i>
                                                <span class="tile_label">
                                                     {{ __('views.admin.dashboard.source_0') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_from"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square red"></i>
                                                <span class="tile_label">
                                                    {{ __('views.admin.dashboard.source_1') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_google"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square blue"></i>
                                                <span class="tile_label">
                                                    {{ __('views.admin.dashboard.source_2') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_facebook"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square grren"></i>
                                                <span class="tile_label">
                                                     {{ __('views.admin.dashboard.source_3') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_twitter"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    <script type='text/javascript'>
        document.oncontextmenu = function(){return false}
    </script>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
<style>
     .font {
        color: #2832A1;
        font-size: 50px;
        text-align: center;
        padding: 30px;
        text-shadow: 7px 4px 5px #fffe04;
    }
</style>