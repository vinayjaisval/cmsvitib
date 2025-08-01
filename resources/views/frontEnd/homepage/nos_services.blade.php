@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 25,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 25,'status'=>1])->whereIn('row_no', [2,3,4,5,6,7])->get();
@endphp
<section class="services-background section-spacing py-md-5" id="services-background">
    <div class="container ">
        <div class="services-heading text-center">
            <h2 class="text-white text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
            <p class="text-center text-white font-weight-normal mt-4">{!! $heading->{"details_$language_code"} ?? '' !!} </p>
        </div>
        <div class="services-container mt-5 ">
        @foreach($cartds as $items)
            <div class="services-card" data-aos="fade-up" data-aos-easing="ease-in-linear" data-aos-duration="2000">
                <div class="card-icon">
                    <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="Hosting Companies">
                </div>
                <h3 class="card-heading text-uppercase">{{ $items->{"title_$language_code"} ?? '' }}</h3>
            </div>
            @endforeach
        </div>
        <div class="plus-title text-center mt-4">
           <a href="{{ route('services') }}"> <button class="bg-white border-0 px-4 py-2 rounded text-uppercase">en savoir plus</button></a>
        </div>
    </div>
</section>
