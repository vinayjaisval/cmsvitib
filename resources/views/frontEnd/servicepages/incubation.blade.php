@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 30,'status'=>1,'row_no'=>5])->get();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 30,'status'=>1])->whereIn('row_no', [5])->get();
@endphp
<section>
     <div class="invest-title mt-5">
        <div class="container mt-5">
            @foreach($cartds as $items)
            <div class="row">
                <div class="col-lg-6">
                    <div class="invest-bussiness-heading">
                       <h2 class="text-uppercase fw-bold">{{ $items->{"title_$language_code"} ?? '' }}</h2>
                       <p  class="cp-text">{!! $items->{"details_$language_code"} ?? '' !!}</p>
                    </div>
                     <div class="plus-title mt-4">
                 <a href="{{ url('form') }}">
                <button class="bg-white border-0 mb-2 shadow py-2 px-3 rounded text-uppercase fw-bold">Souscrire à l’offre</button></a>
            </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="3000" data-aos-easing="linear">
                    <div class="invest-bussiness">
                        <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 </section>