@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 27,'row_no'=>1,'status'=>1])->first();
$cartds = App\Models\Topic::where(['webmaster_id'=> 27,'status'=>1])->get();
@endphp


<!-- 
<section>
    <div class="elements-title-tech mt-5 pt-4" id="elements-title-tech">
        <div class="container">
            <div class="elements-heads text-center py-2">
                <h2 class="font-weight-bold  text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
                <p>{!! $heading->{"details_$language_code"} ?? '' !!}</p>
            </div>
        </div>
    </div>
</section>  -->
<section>
  <div class="partner-sec mt-5 " id="partner-section">
    <div class="slider-bg-blue">
      <div class="">
        <p class="partner-title text-center fw-bold text-white text-uppercase">CE QUE DISENT NOS
          ENTREPRISES AGRÉÉES</p>
      </div>
      <div class="swipers mySwipers container-fluid swiper-initialized swiper-horizontal swiper-backface-hidden" id="dynamic-carousel">
        <div class="swiper-wrapper" id="swiper-wrapper-13a45df3971535af" aria-live="polite">

          @foreach($cartds as $item)
          @php
          $title = $item->{"title_$language_code"} ?? '';
          $details = strip_tags($item->{"details_$language_code"} ?? '');
          $topic_link_url = Helper::topicURL($item->id, "", $item);
          @endphp
          <div class="bg-white swiper-slide rounded" role="group" aria-label="9 / 9" style="width: 437px; margin-right: 20px;">
            <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
              <div class="partner-image cazosel-img d-flex gap-5">
                <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                <div class="trext-carousel">
                  <h2>{{ $title }}</h2>
                  <div class="media-star d-flex">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
              </div>

            </div>
            <div class="heqaading-slider text-center">
              <p>{{ \Illuminate\Support\Str::limit($details, 200) }}</p>
            </div>
          </div>


          @endforeach     
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-13a45df3971535af" aria-disabled="false"></div>
      <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-13a45df3971535af" aria-disabled="true"></div>

    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper', {
    slidesPerView: 2, // show 4 images at a time
    slidesPerGroup: 2, // move 2 images when clicking next
    spaceBetween: 20, // space between images
    loop: true, // optional, set to true if you want infinite loop
    autoplay: {
      delay: 2000, // time in ms between slide transitions (e.g., 2000ms = 2s)
      disableOnInteraction: false, // keep autoplay running after user interaction
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<script>
  var swiper = new Swiper('.mySwipers', {
    slidesPerView: 4,
    slidesPerGroup: 2,
    spaceBetween: 20,
    loop: false,
    // autoplay: {
    //   delay: 2000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 15
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 3,
        slidesPerGroup: 2,
        spaceBetween: 20
      }

    }
  });
</script>