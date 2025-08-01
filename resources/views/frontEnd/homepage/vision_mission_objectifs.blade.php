<?php
$TextBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_text_banners_section_id"));
?>
@if(count($TextBanners)>0)
    @foreach($TextBanners->slice(0,1) as $TextBanner)
        <?php
        try {
            $TextBanner_type = $TextBanner->webmasterBanner->type;
        } catch (Exception $e) {
            $TextBanner_type = 0;
        }
        ?>
    @endforeach
    <?php
    $title_var = "title_" . @Helper::currentLanguage()->code;
    $title_var2 = "title_" . config('smartend.default_language');
    $details_var = "details_" . @Helper::currentLanguage()->code;
    $details_var2 = "details_" . config('smartend.default_language');
    $file_var = "file_" . @Helper::currentLanguage()->code;
    $file_var2 = "file_" . config('smartend.default_language');
    $link_var = "link_" . @Helper::currentLanguage()->code;

    $col_width = 12;
    if (count($TextBanners) == 2) {
        $col_width = 6;
    }
    if (count($TextBanners) == 3) {
        $col_width = 4;
    }
    if (count($TextBanners) > 3) {
        $col_width = 3;
    }
    ?>
<section>
    <div class="mission-title-speech mt-2" id="mission-title-speech">
        <div class="container">
            <div class=" row">

                @foreach($TextBanners as $TextBanner)
                <?php
                if ($TextBanner->$title_var != "") {
                    $BTitle = $TextBanner->$title_var;
                } else {
                    $BTitle = $TextBanner->$title_var2;
                }
                if ($TextBanner->$details_var != "") {
                    $BDetails = $TextBanner->$details_var;
                } else {
                    $BDetails = $TextBanner->$details_var2;
                }
                if ($TextBanner->$file_var != "") {
                    $BFile = $TextBanner->$file_var;
                } else {
                    $BFile = $TextBanner->$file_var2;
                }
                ?>

                <div class=" col-lg-4 ">
                    <div class="bd" data-aos="zoom-in-up" data-aos-duration="3000">
                        <div class="bulb-title text-center p-2">
                            <img src="{{ URL::to('public/uploads/banners/'.$BFile) }}" alt="{{ URL::to('public/uploads/banners/'.$BFile) }}" loading="lazy">
                        </div>
                        <div class="bulb-mission ms-vsn text-center p-4">
                            <h4> {!! $BTitle !!} </h4>
                            <p>{!! nl2br($BDetails) !!}</p>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </div>
    </div>
</section>
@endif
