<!-- @php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1])->whereIn('row_no', [3])->first();
  
@endphp
<section>
        <div class="about-us-second mt-4" id="about-us-second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-second-head">
                            <img src="{{asset('public/assets/assets')}}/image/img16.png" alt="img16">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-second">
                            <h1 class="heading-text fw-bold text-uppercase">
                            {{ $cartds->{"title_$language_code"} ?? '' }}
                            </h1>
                            <p class="font-weight-normal">{!! $cartds->{"details_$language_code"} ?? '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<section>
    <div class="about-us-second mt-5" id="about-us-second">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6">
                    <div class="text-second">
                        <h1 class="heading-text fw-bold text-uppercase">
                            notre Histoire
                        </h1>
                        <p class="font-weight-normal">Notre histoire est de faire de la ZBTIC non seulement le hub africain de la biotechnologie et des technologies de l’information mais aussi un gisement d’emplois qualifiés pour la jeunesse ivoirienne en particulier et celle de l’Afrique en général.</p>
                        <p class="font-weight-normal">La vision clairement affichée de l’État est de faire du Parc Technologique de Grand- Bassam (Côte d’Ivoire), la vitrine technologique de la sous-région ouest- africaine, le premier dédié aux TIC et à la Biotechnologie.
                        </p>
                        <p class="font-weight-normal">Avec cette initiative, s’ouvre aux futures entreprises utilisatrices, un vaste marché régional, notamment les marchés de l’Afrique et de l’espace francophone.
                            Grâce à la politique d’ouverture du gouvernement ivoirien, et profitant de la croissance soutenue de l’économie ivoirienne boostée par le dynamisme du secteur des TIC en Côte d’Ivoire, tout investisseur qui s’installe au VITIB s’offre de belles perspectives de croissance tant sur le marché africain qu’à l’international.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sip-title mt-3" id="sip-title">
                        <div class="sip-meet-person">
                            <div class="swiper swiper-initialized swiper-horizontal">
                                <div class="swiper-wrapper" id="swiper-wrapper-e49aca8622b9ae3d" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-3962px, 0px, 0px); transition-delay: 0ms;">

                                    <!-- Add more slides if needed -->
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="15 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="14">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2023</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>VITIB déploie un nouveau plan stratégique à l’horizon 2028</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="16 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="15">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2024</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Smart City confiée à un développeur&nbsp;: 62 ha de terrains mis à location
                                                    Technopole Coréen sur la zone B de la ZBTIC&nbsp;: 4 ha de terrains mis à location
                                                    Année de distinctions&nbsp;: DG + 02 agents décorés</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="1 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="0">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2004</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Loi instituant le régime de la zone franche de la Biotechnologie, des technologies de l’information et de la Communication</p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="2 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="1">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2006</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Décret de d’application de la loi instituant le régime de la ZBTIC
                                                    Décret de création de la zone franche de Grand - Bassam
                                                    Mise en place de VITIB S.A, société de gestion et d’exploitation de la zone franche</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="3 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="2">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2007</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Mandat de délégation de maitrise d’ouvrage
                                                    Convention de concession entre l’Etat de côte d’ivoire et VITIB SA entre le Ministère de la construction, le Ministère des finances et VITIB SA
                                                    Learn More
                                                    Décret d’approbation de la convention de concession &nbsp;Etat de Côte d’Ivoire- VITIB S.A.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="4 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="3">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2008</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Installation du Comité de purge des droits coutumiers pour l’exploitation des terres
                                                    Relevé topographique et étude des sols sur le site de le ZBTIB</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="5 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="4">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2009</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Accord de financement : Prêts Exim Bank de l'Inde, BOAD/BIDC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="6 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="5">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2012</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Restructuration du Parc technologique&nbsp;: Une dizaine d’entreprises retenues
                                                    Suspension des prêts BOAD – BIDC / Exim Bank (Inde)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="7 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="6">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2013</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Déblocage de tous les prêts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="8 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="7">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2014</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Inauguration du parc technologique Mahatma GANDHI (site A)
                                                    Lancement officiel des travaux d’aménagement de la zone franche de Grand-Bassam
                                                    Début des travaux sur 180 ha de la zone on shore de la nouvelle technopole (site B)
                                                    Implantation du hub pharmaceutique (02 industries indiennes installées)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="9 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="8">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2016</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Implantation du hub pharmaceutique (02 industries indiennes installées)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="10 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="9">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2017</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Plan de masse de la ZBTIC "Smart City"</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border" role="group" aria-label="11 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="10">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2018</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Implantation de quatre (4) data centres</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border swiper-slide-prev" role="group" aria-label="12 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="11">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2019</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Inauguration du nouveau siège du VITIB (site B)
                                                    3 000 m² loués en 5 mois par 04 firmes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border swiper-slide-active" role="group" aria-label="13 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="12">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2020</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>Progression du cœur de métier (TIC et Biotechnologie) de 25% en moyenne par an</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slide-wrapper-border swiper-slide-next" role="group" aria-label="14 / 16" style="width: 263px; margin-right: 20px;" data-swiper-slide-index="13">
                                        <div class="swiper-title">
                                            <div class="swiper-text">
                                                <p>2021</p>
                                            </div>
                                            <div class="swiper-description">
                                                <p>VITIB organise sa première édition de «&nbsp;Invest in VITIB&nbsp;»</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-0606af6e10101df31d" aria-disabled="false" style="color:#000;"></div>
                                <div class="swiper-button-prev" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-0606af6e10101df31d" aria-disabled="true" style="color:#000;"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>