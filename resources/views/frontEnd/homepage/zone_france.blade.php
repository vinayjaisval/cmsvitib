<?php
$SliderBanners = Helper::BannersList(Helper::GeneralWebmasterSettings("home_banners_section_id"));
?>
@if(count($SliderBanners)>0)
@foreach($SliderBanners->slice(0,1) as $SliderBanner)
<?php
try {
  $SliderBanner_type = $SliderBanner->webmasterBanner->type;
} catch (Exception $e) {
  $SliderBanner_type = 0;
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
?>
@if($SliderBanner_type==1)
@php($i=0)
@foreach($SliderBanners as $SliderBanner)
<?php
if ($SliderBanner->$title_var != "") {
  $BTitle = $SliderBanner->$title_var;
} else {
  $BTitle = $SliderBanner->$title_var2;
}
$BDetails = $SliderBanner->$details_var;
if ($SliderBanner->$file_var != "") {
  $BFile = $SliderBanner->$file_var;
} else {
  $BFile = $SliderBanner->$file_var2;
}
?>



<section>
  <div class="skylabs-title" style="display: inline-block;">
    <div class="skylabs-title-inner-img">
      <img src="{{ URL::to('public/uploads/banners/'.$BFile) }}" alt="{{ URL::to('public/uploads/banners/'.$BFile) }}" width="100%" height="auto">
      <div class="absolute-define">
        <div class=" container">

          <!-- @if($BDetails != "" || $SliderBanner->$link_var != "")
                @if($BTitle != "")
                    <h2 class="text-uppercase"><em>{{ $BTitle }}</em></h2>
                @endif
                @if($BDetails != "")
               <?= $BDetails ?>
                @endif
            @endif -->
          <div class=" d-flex gap-4 justify-content-center count-wrap" id="counter">
            <div class="counter-title item text-center text-white">

              <span class="counter count" data-number="5000">3000</span>
              <p>employés</p>
            </div>
            <div class="counter-title item text-center text-white">

              <span class="counter count" data-number="90">90</span>
              <p>Entreprises</p>
            </div>
            <div class="counter-title item text-center text-white">

              <span class="counter count" data-number="624">624</span>
              <p>hectares de terrain</p>
            </div>
            <div class="counter-title item text-center text-white">

              <span class="counter count percentage" data-percentage="37">37%</span>
              <p>de terrain disponible</p>
            </div>
            <div class="counter-title item text-center text-white">
              <div class="d-flex justify-content-center gap-2 align-items-center">
                <span class="counter count" data-number="16000">16000</span><span>m<sup>2</sup></span>
              </div>
              <p>2 De Bureaux</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@php($i++)
@endforeach
@endif
@endif