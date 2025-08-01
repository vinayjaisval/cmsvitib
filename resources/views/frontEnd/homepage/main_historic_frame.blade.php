<!-- @php
    $language_code = \Helper::currentLanguage()->code;
    $file  = App\Models\Topic::where(['webmaster_id'=> 22,'row_no'=>1,'status'=>1])->first();

@endphp

<section>
    <div class="history-title" id="history-title">
        <div class="historic-head text-center fw-bold">
       
        </div>
        <div class="main-historic-frame">
            <img src="{{ asset('public/uploads/topics/' . $file->photo_file) }}">
        </div>
    </div>
</section> -->
