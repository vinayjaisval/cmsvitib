
@php
    $language_code = \Helper::currentLanguage()->code;
    $heading = App\Models\Topic::where(['webmaster_id' =>9, 'row_no' => 1, 'status' => 1])->first();
    $data = App\Models\Topic::where(['webmaster_id' =>9, 'row_no' => 0, 'status' => 1])->get();
@endphp
<section>
    <div class="partners-title mt-5 py-5" id="partners-title">
        <div class="container">
            <div class="all-partners-meet text-center">
                <h2 class="fw-bold text-uppercase">{{ $heading->{"title_$language_code"} }}</h2>
            </div>
            <div class="partner-logo-body mt-5 d-flex justify-content-evenly">
                @foreach($data as $partners)
                    <img src="{{asset('public/uploads/topics/' . $partners->photo_file)}}" alt="12">
                @endforeach

            </div>
        </div>
    </div>
</section>
