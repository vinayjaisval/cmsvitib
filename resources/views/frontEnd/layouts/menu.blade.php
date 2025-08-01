@if(Helper::GeneralWebmasterSettings("header_menu_id") >0)
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
// Get list of main menu links
$MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("header_menu_id"));
?>
@if(count($MenuLinks)>0)
   {{-- {{dd($MenuLinks)}} --}}

<nav class="navbar navbar-expand-lg " id="navbar">
    <div class="container-fluid navbar-container">

        @if(Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code) !="")
        <a class="navbar-brand" href="index.html">
            <img src="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" alt="{{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}">
        </a>
        @else
          <a class="navbar-brand" href="index.html">
           <img alt="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_logo_" . @Helper::currentLanguage()->code)) }}" src="{{ URL::to('public/uploads/settings/nologo.png') }}">
         </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                @foreach($MenuLinks as $key => $MenuLink)
                 <li class="nav-item">
                    <a class="nav-link" href="{{ @$MenuLink->url }}" target="{{ @$MenuLink->target }}">{!! (@$MenuLink->icon)?"<i class='".@$MenuLink->icon."'></i> ":"" !!} {{ @$MenuLink->title }}</a>
                 </li>
                @endforeach
                @if($key == (count($MenuLinks)-1))
                 <li class="nav-item mx-2">
                    <a href="{{ @$MenuLink->url }}" target="{{ @$MenuLink->target }}" class="register-btn">{!! (@$MenuLink->icon)?"<i class='".@$MenuLink->icon."'></i> ":"" !!} {{ @$MenuLink->title }}</a>
                 </li>
                @endif



                {{-- <li class="nav-item">
                    <a class="nav-link active" href="about.html">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="service.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="agreement.html">Agrément</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="invest.html">Invest in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                 <li class="nav-item">
                        <a class="nav-link" href="active.html">Biotechnologie</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="event.html">Evènements</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contactez-nous</a>
                </li> --}}
                {{-- <li class="nav-item mx-2">
                    <a href="form.html" class="register-btn">Inscrivez-vous</a>
                </li> --}}
            @if(count(Helper::languagesList()) >1)
                <div class="dropdown header-dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownLangBtn"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        @if(@Helper::currentLanguage()->icon !="")
                            <img
                                src="{{ asset('public/assets/dashboard/images/flags/'.@Helper::currentLanguage()->icon.".svg") }}"
                                alt="{{ @Helper::currentLanguage()->title }}" loading="lazy">
                        @endif
                        {{ @Helper::currentLanguage()->title }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLangBtn">
                        @foreach(Helper::languagesList() as $ActiveLanguage)
                            <a href="{{ Helper::languageURL($ActiveLanguage->code, @$page_type , @$page_id) }}"
                               class="dropdown-item">
                                @if($ActiveLanguage->icon !="")
                                    <img
                                        src="{{ asset('public/assets/dashboard/images/flags/'.$ActiveLanguage->icon.".svg") }}"
                                        alt=" {{ $ActiveLanguage->title }}" loading="lazy">
                                @endif
                                {{ $ActiveLanguage->title }}
                            </a>
                        @endforeach
                    </ul>
                </div>
            @endif

            </ul>
        </div>
    </div>
</nav>


{{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>--}}

 <script>
            document.addEventListener("DOMContentLoaded", function () {
                const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
                const currentUrl = window.location.href;

                navLinks.forEach(link => {
                    // Keep active class if matches current URL
                    if (link.href === currentUrl) {
                        link.classList.add("active");
                    }

                    // Add click handler to set active manually
                    link.addEventListener("click", function () {
                        navLinks.forEach(nav => nav.classList.remove("active"));
                        this.classList.add("active");
                    });
                });
            });
        </script>

<!-- Bootstrap 5 JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endif
@endif
