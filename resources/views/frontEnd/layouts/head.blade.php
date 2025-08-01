<meta charset="utf-8">
<title>{{(@$PageTitle !="")? @$PageTitle:Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code)}}</title>
<meta name="description" content="{{(@$PageDescription !="")? @$PageDescription:Helper::GeneralSiteSettings("site_desc_" . @Helper::currentLanguage()->code)}}" />
<meta name="keywords" content="{{(@$PageKeywords !="")? @$PageKeywords:Helper::GeneralSiteSettings("site_keywords_" . @Helper::currentLanguage()->code)}}" />
<meta name="author" content="{{ URL::to('') }}" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
{{-- <link href="{{ URL::asset('public/assets/frontend/vendor/fontawesome/css/all.min.css') }}?v={{ Helper::system_version() }}" rel="stylesheet" media/>
<link href="{{ URL::asset('public/assets/frontend/vendor/fontawesome/css/font-awesome.min.css') }}?v={{ Helper::system_version() }}" rel="stylesheet" media />
<link href="{{ URL::asset('public/assets/frontend/vendor/animate.css/animate.min.css') }}?v={{ Helper::system_version() }}" rel="stylesheet">
<link href="{{ URL::asset('public/assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}?v={{ Helper::system_version() }}" rel="stylesheet" />
<link href="{{ URL::asset('public/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}?v={{ Helper::system_version() }}" media rel="stylesheet" />

<link rel="stylesheet" href="{{ URL::asset('public/assets/frontend/vendor/glightbox/css/glightbox.min.css') }}?v={{ Helper::system_version() }}">
<link rel="stylesheet" href="{{ URL::asset('public/assets/frontend/vendor/swiper/swiper-bundle.min.css') }}?v={{ Helper::system_version() }}">

<link rel="stylesheet" href="{{ URL::asset('public/assets/frontend/vendor/owl-carousel/assets/owl.carousel.min.css') }}?v={{ Helper::system_version() }}">
<link rel="stylesheet" href="{{ URL::asset('public/assets/frontend/vendor/owl-carousel/assets/owl.theme.default.min.css') }}?v={{ Helper::system_version() }}"> --}}

{{-- <link href="{{ URL::asset('public/assets/frontend/css/style.css') }}?v={{ Helper::system_version() }}" rel="stylesheet"/> --}}


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('public/assets/assets/css/style.css')}}">



@if( @Helper::currentLanguage()->direction=="rtl")
<link href="{{ URL::asset('public/assets/frontend/css/rtl.css') }}?v={{ Helper::system_version() }}" rel="stylesheet" />
@endif

<!-- Favicon and Touch Icons -->
@if(Helper::GeneralSiteSettings("style_fav") !="")
<link href="{{ URL::asset('public/uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" rel="shortcut icon"
    type="image/png">
@else
<link href="{{ URL::asset('public/uploads/settings/nofav.png') }}" rel="shortcut icon" type="image/png">
@endif
@if(Helper::GeneralSiteSettings("style_apple") !="")
<link href="{{ URL::asset('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon">
<link href="{{ URL::asset('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
    sizes="72x72">
<link href="{{ URL::asset('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
    sizes="114x114">
<link href="{{ URL::asset('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
    sizes="144x144">
@else
<link href="{{ URL::asset('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon">
<link href="{{ URL::asset('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ URL::asset('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ URL::asset('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="144x144">
@endif

<meta property='og:title'
    content='{{@$PageTitle}} {{(@$PageTitle =="")? Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code):""}}' />
@if(@$Topic->photo_file !="")
<meta property='og:image' content='{{ URL::asset('public/uploads/topics/'.@$Topic->photo_file) }}' />
@elseif(Helper::GeneralSiteSettings("style_apple") !="")
<meta property='og:image'
    content='{{ URL::asset('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}' />
@else
<meta property='og:image'
    content='{{ URL::asset('public/uploads/settings/nofav.png') }}' />
@endif
<meta property="og:site_name" content="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}">
<meta property="og:description" content="{{@$PageDescription}}" />
<meta property="og:url" content="{{ url()->full()  }}" />
<meta property="og:type" content="website" />

<link rel="canonical" href="{{ url()->current() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
{{-- Google Tags and google analytics --}}
@if(@Helper::GeneralWebmasterSettings("google_tags_status") && @Helper::GeneralWebmasterSettings("google_tags_id") !="")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src="assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', '{!! @Helper::GeneralWebmasterSettings("google_tags_id") !!}');
</script>
 <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 300) {
                    $('.scroll-top').addClass('visible');
                } else {
                    $('.scroll-top').removeClass('visible');
                }
            });

            $('.scroll-top').click(function () {
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
    </script>
<script
    src="https://skybot.skylabsapp.com/script.js"
    data-bot-id="f2d5a212-be3c-405d-bf18-ece411d39845"
    data-api_key="skybot"
    data-chat-service="skybot"
    data-chat-width="450px"
    data-chat-height="600px"
    data-cust-id = "1"
    data-cust-name = "Vitib"
    type="text/javascript"
  ></script>
  
   
      <script>
    var swiper = new Swiper('.swiper', {
    slidesPerView: 2,   // show 4 images at a time
    slidesPerGroup: 2,  // move 2 images when clicking next
    spaceBetween: 20,   // space between images
    loop:true,        // optional, set to true if you want infinite loop
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



<script>
  AOS.init();
</script>

<script>
  const input = document.querySelector("#phone");
  window.intlTelInput(input, {
    preferredCountries: [ "ci","ng", "gh", "bj", "bf"], // West Africa
    initialCountry: "ci", // default
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
  });
</script>

  <script>
      const openPopup = document.getElementById('openPopup');
  const closePopup = document.getElementById('closePopup');
  const popupOverlay = document.getElementById('popupOverlay');

 openPopup.addEventListener('click', () => {
  popupOverlay.style.display = 'flex';
  document.getElementById('mainContent').style.filter = 'blur(5px)';
});

closePopup.addEventListener('click', () => {
  popupOverlay.style.display = 'none';
  document.getElementById('mainContent').style.filter = 'none';
});
</script>

<script>
  document.querySelectorAll('.services-card').forEach(card => {
    card.addEventListener('click', () => {
      const popupId = card.getAttribute('data-popup');
      document.getElementById(popupId).style.display = 'flex';
    });
  });

  document.querySelectorAll('.close-icon').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.closest('.popup-overlay').style.display = 'none';
    });
  });

  // Optional: close popup if clicking outside
  document.querySelectorAll('.popup-overlay').forEach(overlay => {
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        overlay.style.display = 'none';
      }
    });
  });
</script>

<!-- End Google Tag Manager -->
@endif