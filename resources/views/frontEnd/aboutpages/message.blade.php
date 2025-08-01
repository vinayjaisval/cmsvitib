<!-- @php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 27,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 27,'status'=>1])->whereIn('row_no', [2,3,4])->get();
@endphp



<section>
    <div class="elements-title-tech mt-5 pt-4" id="elements-title-tech">
        <div class="container">
            <div class="elements-heads text-center py-2">
                <h2 class="font-weight-bold  text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
                <p>{!! $heading->{"details_$language_code"} ?? '' !!}</p>
            </div>
        </div>
    </div>
</section> -->
<section>
    <div class="partner-sec mt-5 " id="partner-section">
        <div class="slider-bg-blue">
            <div class="">
             <p class="partner-title text-center fw-bold text-white text-uppercase">CE QUE DISENT NOS 
               ENTREPRISES AGRÉÉES</p></div>
            <div class="swipers mySwipers swiper-initialized swiper-horizontal swiper-backface-hidden" id="dynamic-carousel">
             <div class="swiper-wrapper" id="swiper-wrapper-13a45df3971535af" aria-live="polite">
             <div class="bg-white swiper-slide rounded swiper-slide-active" role="group" aria-label="1 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>Kouame Christiano Gnamien</h2>
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
                    <p>Je confirme, ce lieu est vraiment le village de la technologie. Ce lieu abrite non
                    seulement la première usine de fabrication d'ordinateur, le data sinter d'orange mais
                    aussi des terrains de sport et une belle piscine</p>
                </div>
                </div>
                 <div class="bg-white swiper-slide rounded swiper-slide-next" role="group" aria-label="2 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>Yannick Stephane TRA</h2>
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
                    <p>Ce lieu est très reposant, éloigné de la ville et de tout ses vacarmes. Environnement fleuris et coloré.</p>
                </div>
                </div>
                 <div class="bg-white swiper-slide rounded" role="group" aria-label="3 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>Yed Cyrille Tchetche</h2>
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
                    <p>J'apprécie l'endroit à cause de son espace étendu, c'est vraiment reposant</p>
                </div>
                </div>
                 <div class="bg-white swiper-slide rounded" role="group" aria-label="4 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>Gildas Assande</h2>
                           <!--<span>Auditor</span>-->
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
                    <p>Village technologique ayant en son sein plusieurs entreprises
                    spécialisées dans les nouvelles technologies, l'informatique, les biotechnologies et autres.</p>
                </div>
                </div>
                 <div class="bg-white swiper-slide rounded" role="group" aria-label="5 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>yves kalou</h2>
                           <!--<span>Auditor</span>-->
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
                    <p>Cadre agréable pour implanter son entreprise. L'endroit est éloigné
                    des brouhaha de la ville. L'accès est facile avec la présence de l'autoroute</p>
                </div>
                </div>
                  <div class="bg-white swiper-slide rounded" role="group" aria-label="6 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>TA BI WILLIAM</h2>
                           <!--<span>Auditor</span>-->
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
                    <p>Il est riche en enseignement et tres équipé</p>
                </div>
                </div>
                  <div class="bg-white swiper-slide rounded" role="group" aria-label="7 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>Root Droid</h2>
                           <!--<span>Auditor</span>-->
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
                <div class="heqaading-slider  text-center">
                    <p>Le fameux village des technologie et de l'informatique de cote d'Ivoire
                    sis a grand bassam au sud du pays. Travaux en cours et si la réalisation est
                    identique a ce qui a été dit et dessiné alors la nous aurons de quoi nous réjouir 
                    pour ces édifices.</p>
                </div>
                </div>
                  <div class="bg-white swiper-slide rounded" role="group" aria-label="8 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>2 Deux 5</h2>
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
                    <p>Un endroit beau et tranquil disposant d'infrastructures tel
                    que l'hôtel, le court de tennis, terrain de basket et la piscine
                    olympique mais qui a besoin d'un coup de neuf. </p>
                </div>
                </div>
                  <div class="bg-white swiper-slide rounded" role="group" aria-label="9 / 9" style="width: 437px; margin-right: 20px;">
               <div class="crowsel-card px-5 d-flex bg-inherit justify-content-between">
                 <div class="partner-image cazosel-img d-flex gap-5">
                     <!--<img src="assets/image/swiper/partner (1).png" alt="Partner1">-->
                      <div class="trext-carousel">
                           <h2>Constant N'zi</h2>
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
                    <p>Le village des technologies est accessible à tous pour un environnement idéal</p>
                </div>
                </div> 
             </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                   <!-- Add Arrows -->
          <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-13a45df3971535af" aria-disabled="false"></div>
          <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-13a45df3971535af" aria-disabled="true"></div>
          
        </div>
    </div>
    </section>