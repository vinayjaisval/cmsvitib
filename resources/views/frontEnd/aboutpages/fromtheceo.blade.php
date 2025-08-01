@php
$language_code = \Helper::currentLanguage()->code;
$cartds = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1])->whereIn('row_no', [2])->first();

@endphp
<section class="hero--section py-md-4 mt-4" id="hero--section">

    <div class=" container-fluid ">
        <div class="d-flex justify-content-end">
            <div class="col-md-9  director-card general-director text-white">
                <h2 class="director-heading  text-white">{{ $cartds->{"title_$language_code"} ?? '' }}</h2>
                <p class=" mb-3">{!! $cartds->{"details_$language_code"} ?? '' !!}
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-md-6 position-relative relative-nigerian">
                <div class="director-circle position-relative mx-auto">
                    <img src="{{asset('public/assets/assets')}}/img/Grouping.png" alt="General Director" class="man-image">
                </div>
            </div>
        </div>
    </div>
</section>