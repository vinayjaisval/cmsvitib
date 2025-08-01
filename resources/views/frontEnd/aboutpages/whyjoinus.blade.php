<!-- @php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1])->whereIn('row_no', [5])->first();
  
@endphp
<section>
        <div class="about-us-second mt-5" id="about-us-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-second">
                            <h1 class="heading-text fw-bold text-uppercase">
                            {{ $cartds->{"title_$language_code"} ?? '' }}
                            </h1>
                            <p class="font-weight-normal">{!! $cartds->{"details_$language_code"} ?? '' !!}</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-second-head">
                            <img src="{{asset('public/assets/assets')}}/image/img11.png" alt="img11"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section>
        <div class="about-us-second mt-5" id="about-us-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-second-head">
                            <img src="{{asset('public/assets/assets')}}/img/vitib2.png" alt="img11"> 
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-second">
                            <h1 class="heading-text fw-bold text-uppercase">
                                POURQUOI NOUS REJOINDRE
                            </h1>
                            <p class="font-weight-normal">Le VITIB est une société anonyme chargée de développer et de gérer la Zone Franche de Biotechnologie et des Technologies de l'Information et de la Communication (ZBTIC), le premier Parc Technologique d’Afrique de l’Ouest, situé en Côte d’Ivoire, dans la ville historique de Grand-Bassam.
                             </p>
                            <p class="font-weight-normal">S'étendant 624 hectares, la ZBTIC est organisée en trois zones (A, B et C), pensées pour accueillir les entreprises innovantes dans les domaines des Technologies de l’Information et de la Communication et de la Biotechnologie.
                            </p>
                            <p class="font-weight-normal">Porté par une initiative gouvernementale, le VITIB ambitionne de faire de la Côte d’Ivoire la vitrine technologique de l'Afrique de l'Ouest. Grâce à son environnement fiscal exceptionnel et ses infrastructures modernes, il offre aux investisseurs un accès privilégié à un marché régional de plus de 300 millions de consommateurs (UEMOA et CEDEAO). </p>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>