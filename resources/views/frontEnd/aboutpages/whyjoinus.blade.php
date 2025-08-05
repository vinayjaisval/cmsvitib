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

    
@php
$language_code = \Helper::currentLanguage()->code;
$data = App\Models\Topic::where(['webmaster_id' => 23, 'row_no' => 2, 'status' => 1])->first();
@endphp
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
                            {{ $data->{"title_$language_code"} }}
                            </h1>
                            <p class="font-weight-normal"> {{ strip_tags($data->{"details_$language_code"}) }}

                             </p>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>