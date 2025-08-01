@php
    $language_code =  @Helper::currentLanguage()->code;
    $discover  = App\Models\Topic::where(['webmaster_id'=> 29,'row_no'=>4,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 29,'status'=>1])->whereIn('row_no', [1])->get();
@endphp
<section>
        <div class="about-title" id="about-exit">
            @foreach($cartds as $items)
            <div class="about-body">
                <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="21">
                <div class="about-text fw-bold">  
                    <h4 class="fw-bold"> {{ $items->{"title_$language_code"} ?? '' }}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>