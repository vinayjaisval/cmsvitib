@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 24,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 24,'status'=>1])->whereIn('row_no', [2,3,4])->get();
@endphp

<section>
    <div class="our-advantages-title py-5 mt-4" id="our-advantages-title">
        <div class="our-title text-center text-white">
            <h3 class="text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h3>
            <p class="font-weight-normal">{!! $heading->{"details_$language_code"} ?? '' !!}</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="services-containers vitib-vh mt-4">
                    @foreach($cartds as $items)
                        <div class="services-card">
                            <div class="card-icon">
                                <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="feedback">
                            </div>
                            <h3 class="card-heading text-uppercase">{{ $items->{"title_$language_code"} ?? '' }}</h3>
                            <div class="triangle-right"></div>
                        </div>
                        @endforeach
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- model -->






