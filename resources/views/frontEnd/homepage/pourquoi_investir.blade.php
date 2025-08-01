@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 26,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 26,'status'=>1])->whereIn('row_no', [2,3,4])->get();
@endphp
<section>
    <div class="listing-title py-5" id="listing-title">
        <div class="list-head">
            <h2 class="fw-bold text-center text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
        </div>
        <div class="container">
            <div class="list-body mt-4">
                <div class="">
                    <ul>
                        <div class="d-flex gap-5 fgx-flex">
                            <div class="list-pr">
                                <li>{!! $heading->{"details_$language_code"} ?? '' !!}</li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
</section>
