@php
    $language_code =  @Helper::currentLanguage()->code;
    $discover  = App\Models\Topic::where(['webmaster_id'=> 18,'row_no'=>4,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 18,'status'=>1])->whereIn('row_no', [1,2,3])->get();
@endphp
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<section>
    <div class="bubble-title mt-4 py-5" id="bubble-title">
        <div class="container">
              <div class="row-count-bubble mt-5">
                <div class="row">
                     <div class="col-lg-4 " >
                     <div class="buble-head" data-aos="fade-up" data-aos-duration="3000">
                     <h3 class="text-start text-white fw-bold text-uppercase">{{ $discover->{"title_$language_code"} }}&nbsp;</h3>
                     <p class="text-start text-white font-weight-normal">{!! $discover->{"details_$language_code"} !!}
                    </p>
                   </div>
            <div class="plus-btn mt-4">
                <a href="">Voir Plus</a>
            </div>
          </div>
          <div class="col-lg-8">
          <div class="row">

                  @foreach($cartds as $items)
                    <div class="col-lg-4 ">
                        <div class="bubble-circle" >
                            <div class="circle-title rounded-circle p-5">
                                <h4 class="fw-bold text-center text-uppercase">{{ $items->{"title_$language_code"} }}</h4>
                                <ul class="listing-all mt-4">
                                   {!! $items->{"details_$language_code"} !!}

                                    {{-- <li class="font-weight-normal">Biotechnologie</li>
                                    <li class="font-weight-normal">&nbsp;Technologies de l’Information et de la
                                        Communication (TIC)</li> --}}

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
                </div>
                </div>
                <!--<div class="plus-title text-center mt-4">-->
                <!--    <button class="bg-white border-0 px-4 py-2 rounded">VIOR PLUS</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true, // animation only once
        duration: 1000, // global animation duration
    });
</script>
