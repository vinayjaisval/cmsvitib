@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 32,'status'=>1,'row_no'=>2])->get();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 32,'status'=>1])->whereIn('row_no', [2])->get();
@endphp
<div class="invest-title mt-5">
        
        <div class="container mt-5">
        @foreach($cartds as $items)
            <div class="row">
                <div class="col-lg-5">
                    <div class="invest-bussiness">
                        <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="invest-bussiness-heading">
                       <h2>{{ $items->{"title_$language_code"} ?? '' }}</h2>
                       <p>{!! $items->{"details_$language_code"} ?? '' !!}</p>
                       
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>