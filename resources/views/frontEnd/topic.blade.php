@extends('frontEnd.layouts.master')

@section('content')
@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1,'row_no'=>1])->get();
$cartds = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1])->whereIn('row_no', [1])->get();
@endphp
<section>
    <div class="about-title" id="about-exit">
        @foreach($cartds as $items)
        <div class="about-body">
            <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="21">
            <div class="about-text fw-bold">
                <h4 class="fw-bold">{{ $items->{"title_$language_code"} ?? '' }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div>
    <?php
    $title_var = "title_" . @Helper::currentLanguage()->code;

    $title_var2 = "title_" . config('smartend.default_language');
    $details_var = "details_" . @Helper::currentLanguage()->code;
    $details_var2 = "details_" . config('smartend.default_language');
    if ($Topic->$title_var != "") {
        $title = $Topic->$title_var;
    } else {
        $title = $Topic->$title_var2;
    }
    if ($Topic->$details_var != "") {
        
        $details = $details_var;
    } else {
        $details = $details_var2;
    }
    $section = "";
    try {
        if ($Topic->section->$title_var != "") {
            $section = $Topic->section->$title_var;
        } else {
            $section = $Topic->section->$title_var2;
        }
    } catch (Exception $e) {
        $section = "";
    }


    $webmaster_section_title = "";
    $category_title = "";
    $page_title = "";
    $category_image = "";

    if (@$WebmasterSection != "none") {
        if (@$WebmasterSection->$title_var != "") {
            $webmaster_section_title = @$WebmasterSection->$title_var;
        } else {
            $webmaster_section_title = @$WebmasterSection->$title_var2;
        }
        $page_title = $webmaster_section_title;
        if (@$WebmasterSection->photo != "") {
            $category_image = URL::to('public/uploads/topics/' . @$WebmasterSection->photo);
        }
    }
    if (!empty($CurrentCategory)) {
        if (@$CurrentCategory->$title_var != "") {
            $category_title = @$CurrentCategory->$title_var;
        } else {
            $category_title = @$CurrentCategory->$title_var2;
        }
        $page_title = $category_title;
        if (@$CurrentCategory->photo != "") {
            $category_image = URL::to('public/uploads/sections/' . @$CurrentCategory->photo);
        }
    }

    $attach_file = @$Topic->attach_file;
    if (@$Topic->attach_file != "") {
        $file_ext = strrchr($Topic->attach_file, ".");
        $file_ext = strtolower($file_ext);
        if (in_array($file_ext, [".jpg", ".jpeg", ".png", ".gif", ".webp"])) {
            $category_image = URL::to('public/uploads/topics/' . @$Topic->attach_file);
            $attach_file = "";
        }
    }
    ?>

    <div>
        <div class="row g-0 m-0">
            <?php
            $cols_lg = 3;
            $cols_md = 4;
            if ($Categories->count() > 1) {
                $cols_lg = 4;
                $cols_md = 6;
            }
            if ($Topic->photos->count() == 3) {
                $cols_lg = 4;
                $cols_md = 4;
            }
            if ($Topic->photos->count() == 2) {
                $cols_lg = 6;
                $cols_md = 6;
            }
            ?>
           
            <!-- @foreach($Topic->photos as $photo)

            <div id="page-cover" class="page-cover" style="width: 100%;height: 200px;
                    text-align: center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-image: url('{{ URL::to('public/uploads/topics/'.$photo->file) }}');background-color: {{ Helper::GeneralSiteSettings("style_color2") }}">
                <div class="page-title-cover">
                    <h1 class="web-test">{{ $title }}</h1>

                </div>
            </div>



            @endforeach -->
            <section id="content">

                <div class=" topic-page">
                    <div class="row">
                        @if($Categories->count() >1)
                        @include('frontEnd.layouts.side')
                        @endif
                        <div
                            class="col-lg-{{($Categories->count()>1)? "9":"12"}} col-md-{{($Categories->count()>1)? "7":"12"}} col-sm-12 col-xs-12">
                            <article class="mb-5">
                                @if($WebmasterSection->type==2 && $Topic->video_file!="")

                               
                                    {{--video--}}
                                <div class="post-video">

                                    <div class="video-container">
                                        @if($Topic->video_type ==1)
                                        <?php
                                        $Youtube_id = Helper::Get_youtube_video_id($Topic->video_file);
                                        ?>
                                        @if($Youtube_id !="")
                                        {{-- Youtube Video --}}
                                        <iframe allowfullscreen class="video-iframe"
                                            src="https://www.youtube.com/embed/{{ $Youtube_id }}?autoplay=1&mute=1"
                                            allow="autoplay">
                                        </iframe>
                                        @endif
                                        @elseif($Topic->video_type ==2)
                                        <?php
                                        $Vimeo_id = Helper::Get_vimeo_video_id($Topic->video_file);
                                        ?>
                                        @if($Vimeo_id !="")
                                        {{-- Vimeo Video --}}
                                        <iframe allowfullscreen class="video-iframe"
                                            src="https://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0">
                                        </iframe>
                                        @endif

                                        @elseif($Topic->video_type ==3)
                                        @if($Topic->video_file !="")

                                        {{-- Embed Video --}}

                                        {!! $Topic->video_file !!}

                                        @endif

                                        @else
                                        <video class="video-js" controls autoplay preload="auto" width="100%"
                                            height="500"
                                            poster="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}"
                                            data-setup="{}">
                                            <source src="{{ URL::to('public/uploads/topics/'.$Topic->video_file) }}"
                                                type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading
                                                to a
                                                web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                                    HTML5 video</a>
                                            </p>
                                        </video>
                                        @endif

                                    </div>
                                </div>
                                    @elseif($WebmasterSection->type==3 && $Topic->audio_file!="")
                                    
                                    {{--audio--}}
                                    <div class="post-audio">

                                        @if($Topic->photo_file !="")
                                        <img src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}" loading="lazy"
                                            alt="{{ $title }}" />
                                        @endif
                                        <div class="audio-player">
                                            <audio crossorigin preload="none">
                                                <source
                                                    src="{{ URL::to('public/uploads/topics/'.$Topic->audio_file) }}"
                                                    type="audio/mpeg">
                                            </audio>
                                        </div>
                                    </div>
                                    <br>
                                    @elseif(count($Topic->photos)>5)
                                    
                                    {{--photo slider--}}
                                   <div>
                                        @if($WebmasterSection->title_status)
                                        <div class="post-heading">
                                            <h1>
                                                @if($Topic->icon !="")
                                                <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                                @endif
                                                {{-- {{ $title }} --}}
                                            </h1>
                                        </div>
                                        @endif

                                            @if($Topic->photo_file !="")
                                            <div class="post-image mb-2">
                                                <a href="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}"
                                                    class="galelry-lightbox" title="{{ $title }}">
                                                    <img loading="lazy"
                                                        src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}"
                                                        alt="{{ $title }}" class="post-main-photo">
                                                </a>
                                            </div>
                                            @endif



                                </div>

                               
                                @else

                                
                                {{--one photo--}}

                                <section>
                                    <div class="blog-title mt-5">
                                        <div class="container ">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    @if($WebmasterSection->title_status)
                                                    <div class="fw-bold h3 text-uppercase title "> {{ $title }} </div>
                                                    @endif
                                                    <div class="blog-head-titles pb-3">
                                                        <div class="first-blogs mb-2">

                                                            @if($Topic->photo_file !="")
                                                            <img src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}" loading="lazy"
                                                                alt="{{ $title }}" title="{{ $title }}" class="post-main-photo" />

                                                            @endif
                                                        </div>
                                                        
                                                        <p>{{ str_replace('&nbsp;', ' ', strip_tags($Topic->$details)) }}</p>

                                                       
                                                       
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="swiper mySwiper sw-swip">
                                                        <div class="swiper-wrappers">

                                                        @foreach($Topic->photos as $photo)
                                                            <div class="swiper-slides mt-4">
                                                                @if($Topic->photo_file !="")
                                                                <img src="{{ URL::to('public/uploads/topics/'.$photo->file) }}" loading="lazy"
                                                                    alt="{{ $title }}" title="{{ $title }}" class="post-main-photo" />

                                                                @endif
                                                            </div>
                                                        @endforeach
                                                        
                                                           
                                                           

                                                            
                                                        </div>
                                                        <!-- Optional navigation -->
                                                        <!--<div class="swiper-button-next"></div>-->
                                                        <!--<div class="swiper-button-prev"></div>-->
                                                        <!--<div class="swiper-pagination"></div>-->
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </section>

                               

                                @php
                                $language_code = \Helper::currentLanguage()->code;
                                $heading = App\Models\Topic::where(['webmaster_id' =>20, 'row_no' => 5, 'status' => 1])->first();
                                $Topics = App\Models\Topic::where('webmaster_id', 7)->orderBy('id', 'desc')->take(3)->get();
                                $Topics = App\Models\Topic::where(['webmaster_id' =>33, 'status' => 1])->take(3)->get();
                                @endphp

                                <section>

                                    <!-- Suggested Blogs Section -->
                                    <div class="suggested-blogs container" style="margin-top: 50px; padding: 20px; border-top: 1px solid #ccc;">
                                        <p>your blog content here...</p>
                                        <ul style="list-style: none; padding-left: 0;display:flex; gap:20px;">
                                            @if ($Topics->count() > 0)
                                            @php
                                            $code = @Helper::currentLanguage()->code;
                                            $title_var = 'title_' . @Helper::currentLanguage()->code;
                                            $title_var2 = 'title_' . config('smartend.default_language');
                                            $seo_url_slug_var = 'seo_url_slug_' . @Helper::currentLanguage()->code;
                                            $seo_url_slug_var2 = 'seo_url_slug_' . config('smartend.default_language');
                                            @endphp

                                            @foreach ($Topics as $Topic)

                                            @php
                                            $title = $Topic->$title_var ?: $Topic->$title_var2;
                                            $topic_link_url = Helper::topicURL($Topic->id, "", $Topic);
                                            @endphp
                                            <li><a href="{{$topic_link_url}}" style="text-decoration: none; color: #007BFF;"><img src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}" width="100px" height="65px"></a></li>
                                            


                                            @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </section>

                                <!-- <div class="post-image">
                                    @if($WebmasterSection->title_status)
                                    <div class="post-heading">
                                        <h1>
                                            @if($Topic->icon !="")
                                            <i class="fa {!! $Topic->icon !!} "></i>&nbsp;
                                            @endif
                                            {{ $title }}
                                        </h1>
                                    </div>
                                    @endif
                                    @if($Topic->photo_file !="")
                                    <img src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}" loading="lazy"
                                        alt="{{ $title }}" title="{{ $title }}" class="post-main-photo" />
                                    <br>
                                    @endif
                                </div>
                                @endif

                                @include("frontEnd.topic.fields",["cols"=>6,"Fields"=>@$Topic->webmasterSection->customFields->where("in_page",true)])

                                <div class="article-body">
                                 <p> {!! str_replace('"#','"'.Request::url().'#',$Topic->$details) !!}</p>  
                                </div> -->

                                @if($attach_file !="")
                                <?php
                                $file_ext = strrchr($Topic->attach_file, ".");
                                $file_ext = strtolower($file_ext);
                                ?>
                                <div class="bottom-article">
                                    <a href="{{ URL::to('public/uploads/topics/'.$Topic->attach_file) }}" target="_blank">
                                        <strong>
                                            {!! Helper::GetIcon(URL::to('public/uploads/topics/'),$Topic->attach_file) !!}
                                            &nbsp;{{ __('frontend.downloadAttach') }}</strong>
                                    </a>
                                </div>
                                @endif
                            </article>
                            <!-- @include("frontEnd.topic.files") -->

                            <!-- @include("frontEnd.topic.maps") -->

                            <!-- @include("frontEnd.topic.tags") -->

                            @if($WebmasterSection->type == 7)
                            <a href="{!! Helper::sectionURL($Topic->webmaster_id) !!}"
                                class="btn btn-lg btn-secondary"
                                style="width: 100%"><i
                                    class="fa-solid fa-reply"></i> {{ __('backend.clickToNewSearch') }}
                            </a>
                            @else
                            <!-- @include("frontEnd.topic.share") -->
                            @endif

                            @include("frontEnd.topic.comments")

                            @if(@$Topic->form_id >0)
                            <br>
                            @include('frontEnd.form',["FormSectionID"=>@$Topic->form_id])
                            @elseif($WebmasterSection->order_status)
                            @include("frontEnd.topic.order")
                            @endif

                            <!-- @include("frontEnd.topic.related") -->
                            @include('frontEnd.homepage.logo_slider')


                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('frontEnd.layouts.popup',['Popup'=>@$Popup])
        @endsection
        @if (@in_array(@$WebmasterSection->type, [2]))
        @push('before-styles')
        <link rel="stylesheet"
            href="{{ URL::asset('public/assets/frontend/vendor/video-js/css/video-js.min.css') }}?v={{ Helper::system_version() }}" />
        @endpush
        @push('after-scripts')
        <script
            src="{{ URL::asset('public/assets/frontend/vendor/video-js/js/video-js.min.css') }}?v={{ Helper::system_version() }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                GreenAudioPlayer.init({
                    selector: '.audio-player',
                    stopOthersOnPlay: true,
                    showTooltips: true,
                });
            });
        </script>
        @endpush
        @endif
        @if (@in_array(@$WebmasterSection->type, [3]))
        @push('before-styles')
        <link rel="stylesheet"
            href="{{ URL::asset('public/assets/frontend/vendor/green-audio-player/css/green-audio-player.min.css') }}?v={{ Helper::system_version() }}" />
        @endpush
        @push('after-scripts')
        <script
            src="{{ URL::asset('public/assets/frontend/vendor/green-audio-player/js/green-audio-player.min.js') }}?v={{ Helper::system_version() }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                GreenAudioPlayer.init({
                    selector: '.audio-player',
                    stopOthersOnPlay: true,
                    showTooltips: true,
                });
            });
        </script>
        @endpush
        @endif