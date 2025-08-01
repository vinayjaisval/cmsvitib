 @php
    $language_code = \Helper::currentLanguage()->code;
    $data = App\Models\Topic::where(['webmaster_id' => 23, 'row_no' => 1, 'status' => 1])->first();
@endphp

<!-- <section>
    <div class="proposal-title" id="proposal-title">
        <div class="container">
            <div class="main-proposal">
                <div class="row organization-info">
                    <div class="col-lg-5 px-md-0">
                        <img src="{{ asset('public/uploads/topics/' . $data->photo_file) }}" alt="{{ $data->{"title_$language_code"} }}" class="img-fluid" height="100%" width="100%">
                    </div>
                    <div class="col-lg-7 px-md-0">
                        <div class="organization-content mx-md-0">
                            <h2 class="organization-title-main text-white fw-bold p-2 px-2">{{ $data->{"title_$language_code"} }}</h2>
                            <p class="px-3">{!! $data->{"details_$language_code"} !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  -->
<section>
        <div class="proposal-title mt-5" id="proposal-title">
            <div class="container">
                <div class="main-proposal">
                    <div class="row organization-info ">
                        <div class="col-lg-5 px-md-0">
                            <img src="{{ asset('public/uploads/topics/' . $data->photo_file) }}" alt="{{ $data->{'title_$language_code'} }}" class=""> 
                        </div>
                        <div class="col-lg-7 px-md-0">
                            <div class="organization-content mx-md-0">
                                <h2 class="organization-title-main text-white fw-bold p-2 px-2 " data-aos="fade-up" data-aos-duration="2000">{{ $data->{"title_$language_code"} }}</h2>
                                <!-- <p class="px-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">Le VITIB est une société anonyme qui exploite la Zone Franche de
                                {!! $data->{"details_$language_code"} !!}</p> -->
                                <p class="px-3 aos-init" data-aos="fade-up" data-aos-duration="2500">
                                {!! $data->{"details_$language_code"} !!}
                                </p>
                                <!-- <p class="px-3 aos-init" data-aos="fade-up" data-aos-duration="3000">Né d'une initiative gouvernementale, le VITIB ambitionne de faire de la
                                    Côte d'Ivoire
                                    la
                                    vitrine technologique de l'Afrique de l'Ouest. Grâce à son environnement fiscal
                                    attractif
                                    et à ses infrastructures modernes, les investisseurs accèdent à un marché de 300
                                    millions
                                    de consommateurs en Afrique de l'Ouest (UEMOA et CEDEAO), offrant ainsi des
                                    perspectives de croissance exceptionnelles.</p>
                                <p class="px-3 aos-init" data-aos="fade-up" data-aos-duration="2500">Rejoignez le hub technologique de référence en Afrique et participez à
                                    l'économie du
                                    futur.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
