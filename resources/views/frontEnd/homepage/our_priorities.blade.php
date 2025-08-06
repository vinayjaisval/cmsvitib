@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 19,'row_no'=>4,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 19,'status'=>1])->whereIn('row_no', [1,2,3])->get();
@endphp

<section>
    <div class="priorities-title py-4" id="priorities-title">
        <div class="container">
            <div class="priority-head text-center mb-4">
                <h2 class="text-prior font-weight-bold text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
            </div>
            <div class="production-title d-flex gap-3 justify-content-center">
                @foreach($cartds as $items)
                    <div class="production-gif d-flex align-items-center rounded gap-3 {{ $loop->first ? 'active' : 'inactive' }}">
                        <img src="{{ asset('public/uploads/topics/' . $items->photo_file) }}">
                        <p class="{{ $loop->first ? 'active' : 'inactive' }}">{{ $items->{"title_$language_code"} }}</p>
                        <i class='fas fa-long-arrow-alt-right'></i>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
