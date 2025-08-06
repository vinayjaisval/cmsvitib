<footer class="footer mb-0 mt-4" id="footer" style="background-color:rgb(213, 243, 248);">

    <div class="container">
        <div class="fotter-logo d-flex justify-content-start">
            <img src="{{ asset('public/assets/assets/image/logo/logo.png') }}" alt="VITIB Logo" class="footer-logo">
        </div>
    </div>

    <div class="container mt-4">
        <div class="footer-grid gap-4">
            <!-- Contact Info -->
            <div>
                <ul class="footer-contact list-unstyled">
                    @if(Helper::GeneralSiteSettings('contact_t1_' . Helper::currentLanguage()->code))
                    <li><i class="fas fa-map-marker-alt"></i>
                        {{ Helper::GeneralSiteSettings('contact_t1_' . Helper::currentLanguage()->code) }}
                    </li>
                    @endif

                    @if(Helper::GeneralSiteSettings('contact_t3'))
                    <li><i class="fas fa-phone"></i> Tel:
                        <a href="tel:{{ Helper::GeneralSiteSettings('contact_t3') }}">{{ Helper::GeneralSiteSettings('contact_t3') }}</a>
                    </li>
                    @endif

                    @if(Helper::GeneralSiteSettings('contact_t6'))
                    <li><i class="fas fa-envelope"></i>
                        Email: <a href="mailto:{{ Helper::GeneralSiteSettings('contact_t6') }}">{{ Helper::GeneralSiteSettings('contact_t6') }}</a>
                    </li>
                    @endif

                    <li><button type="button" class="newsletter-btn">Rejoignez-nous</button></li>
                </ul>
            </div>

            @if(Helper::GeneralWebmasterSettings("footer_menu_id") > 0)
            @php
            $MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("footer_menu_id"));
            @endphp
            <div>
                <ul class="footer-links list-unstyled">
                    @foreach($MenuLinks as $MenuLink)
                    <li>
                        <a href="{{ $MenuLink->url }}" target="{{ $MenuLink->target }}">
                            {!! $MenuLink->icon ? "<i class='$MenuLink->icon'></i>" : '' !!}
                            {{ $MenuLink->title }}
                        </a>
                    </li>
                    @if($MenuLink->sub)
                    @foreach($MenuLink->sub as $SubLink)
                    <li>
                        <a href="{{ $SubLink->url }}" target="{{ $SubLink->target }}">
                            &nbsp;&nbsp;{!! Helper::currentLanguage()->direction == "rtl" ? "&#8617;" : "&#8618;" !!}
                            {!! $SubLink->icon ? "<i class='$SubLink->icon'></i>" : '' !!}
                            {{ $SubLink->title }}
                        </a>
                    </li>
                    @endforeach
                    @endif
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="footer-section">
                <!-- <p class="subscribe-text">Inscrivez-vous à nos communications pour recevoir nos meilleures offres!</p> -->

                <div class="social-icons">
                    <span>Suivez-nous</span>
                    <div class="media-social mt-3">

                        @if(Helper::GeneralSiteSettings('social_link6'))
                        <a href="{{Helper::GeneralSiteSettings('social_link6')}}"><img src="{{ asset('public/assets/assets/image/Instagram_logo_2016.svg 1.png') }}" alt="Instagram"></a>
                        @endif

                        @if(Helper::GeneralSiteSettings('social_link1'))
                        <a target="_blank" href="{{Helper::GeneralSiteSettings('social_link1')}}"><img src="{{ asset('public/assets/assets/image/2021_Facebook_icon.svg 1.png') }}" alt="Facebook"></a>
                        @endif

                        @if(Helper::GeneralSiteSettings('social_link2'))
                        <a href="{{Helper::GeneralSiteSettings('social_link2')}}"><img src="{{ asset('public/assets/assets/image/Vector (1).png') }}" alt="Twitter"></a>
                        @endif

                        @if(Helper::GeneralSiteSettings('social_link4'))
                        <a href="{{Helper::GeneralSiteSettings('social_link4')}}"><img src="{{ asset('public/assets/assets/image/imgase-i.png') }}" alt="LinkedIn"></a>
                        @endif

                        @if(Helper::GeneralSiteSettings('social_link5'))
                        <a href="{{Helper::GeneralSiteSettings('social_link5')}}"><img src="{{ asset('public/assets/assets/image/youtube 1.png') }}" alt="YouTube"></a>
                        @endif
                    </div>
                    <div class="nous-point mt-3">
                        <ul>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>

                <form class="newsletter-form ">
                    <input type="email" class="newsletter-input" placeholder="info@vitib.ci">
                    <button type="submit" class="newsletter-btn">S'abonner</button>
                </form>
            </div>
        </div>
    </div>
    <div class="whatsupp">
        <div class="whats-chat">
            <a href="https://wa.me/+2250778343202">
                <img src="./assets/image/logo/WhatsApp.svg 1.png"></a>
        </div>
    </div>

    <div class="footer-bottom container-fluid text-center text-white py-3">
        <p>© VITIB 2025 | Tous droits réservés. Design par Skylabs Solution India Pvt. Ltd.</p>
    </div>
    <div class="scroll-top position-fixed bottom-0 end-0 m-3" id="scroll-top">
        <button class="btn text-white rounded-circle"><i class="fas fa-arrow-up"></i></button>
    </div>
</footer>
<script
    src="https://skybot.skylabsapp.com/script.js"
    data-bot-id="f2d5a212-be3c-405d-bf18-ece411d39845"
    data-api_key="skybot"
    data-chat-service="skybot"
    data-chat-width="450px"
    data-chat-height="600px"
    data-cust-id="1"
    data-cust-name="Vitib"
    type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.scroll-top').addClass('visible');
            } else {
                $('.scroll-top').removeClass('visible');
            }
        });

        $('.scroll-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>