@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1,'row_no'=>6])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1])->whereIn('row_no', [7,8,9,10])->get();
@endphp
<section>
    <div class="explotion-title mt-5" id="explotion-head">
        <h2 class="métiers text-center text-white text-uppercase"> {{ $heading->{"title_$language_code"} ?? '' }}</h2>
        <div class="container">
            <div class="row mt-4 top-mr">
                @foreach($cartds as $items)
                <div class="col-lg-3 col-sm-6 d-flex align-items-stretch mb-4" data-aos="flip-up" data-aos-duration="2000">
                    <div class="main-explotion-title">
                        <div class="explotion-head text-center">
                            <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="img" class="img-fluid">
                            <div class="explotion-speech bg-white py-4 px-2">
                                <h3 class="fw-bold text-uppercase">{{ $items->{"title_$language_code"} ?? '' }}</h3>
                                <p class="font-weight-normal text-center">{!! $items->{"details_$language_code"} ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
