@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 34,'status'=>1,'row_no'=>4])->first();
$cartds = App\Models\Topic::where(['webmaster_id'=> 34,'status'=>1])->whereIn('row_no', [5,6,7,8,9,10,11,12])->get();
@endphp
<section>
    <div class="sponsers-title mt-5" id="sponsers-title">
        <div class="all-spansers-meet">
            <span>Who Help Us</span>
            <h2 class="paltinum-meet">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
        </div>

        <div class="logo-title row">
            @foreach($cartds->chunk(4) as $chunk)
            <div class="row w-100 mb-3 mt-1 d-flex align-items-center">
                @foreach($chunk as $items)
                <div class="col-md-3 col-sm-4 col-6 text-center">
                    <div class="logo-sponsors">
                        <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="ekon" class="img-fluid">
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>