@extends('frontEnd.layouts.master')

@section('content')
    <div class="home-page">
        <?php
        $title_var = "title_" . @Helper::currentLanguage()->code;
        $title_var2 = "title_" . config('smartend.default_language');
        $details_var = "details_" . @Helper::currentLanguage()->code;
        $details_var2 = "details_" . config('smartend.default_language');
        ?>

        @include('frontEnd.homepage.zone_france')
        @include('frontEnd.homepage.discover')
        @include('frontEnd.homepage.our_priorities')
        {{-- @include('frontEnd.homepage.row1') --}}
        @include('frontEnd.homepage.explore_the_universe')
        @include('frontEnd.homepage.main_historic_frame')
        @include('frontEnd.homepage.propos')
        @include('frontEnd.homepage.vision_mission_objectifs')
        @include('frontEnd.homepage.nos_partenaires_institutionnels')
        @include('frontEnd.homepage.nos_services')
        @include('frontEnd.homepage.pourquoi_investir')
        @include('frontEnd.homepage.installez_vous')
        @include('frontEnd.homepage.tech_events')
        @include('frontEnd.homepage.blog')
        @include('frontEnd.homepage.message')
        @include('frontEnd.homepage.logo_slider')





        {{-- @include('frontEnd.layouts.slider')
        @include('frontEnd.homepage.row1')
        @include('frontEnd.homepage.row2')
        @include('frontEnd.homepage.row9')
        @include('frontEnd.homepage.row3')

        @include('frontEnd.homepage.row4')
        @include('frontEnd.homepage.row5')
        @include('frontEnd.homepage.row6')
        @include('frontEnd.homepage.row7')
        @include('frontEnd.homepage.row8') --}}


        {{-- @include('frontEnd.layouts.popup',['Popup'=>@$Popup]) --}}
    </div>
@endsection
@push('after-styles')
    @if(Helper::GeneralSiteSettings("style_header") && Helper::GeneralSiteSettings("style_bg_type"))
        <style>
            .fixed-top-margin {
                margin-top: 0 !important;
            }


            .header-bg, .header-bg a {
                color: #444444;
            }

            @media (min-width: 968px) {

                .header-no-bg, .header-no-bg a, .topbar-no-bg, .topbar-no-bg a {
                    color: #fff;
                }

                .header-no-bg .navbar a, .topbar-no-bg .header-dropdown .btn {
                    color: #fff;
                }

                .dropdown-item {
                    color: #212529 !important;
                }

                .header-scrolled .navbar a, .header-scrolled .header-dropdown .btn {
                    color: #444444;
                }
            }

            .topbar-no-bg {
                box-shadow: 0 0 1px rgba(255, 255, 255, 0.5) !important;
            }
        </style>
    @endif
@endpush
