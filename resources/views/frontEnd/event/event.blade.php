@php
$language_code = \Helper::currentLanguage()->code;
$cartds = App\Models\Topic::where(['webmaster_id'=> 34,'status'=>1])->whereIn('row_no', [1])->get();

@endphp
<div class="skylabs-wrapper" id="skylabs-wrapper">
    <section>
        @foreach ($cartds as $items)
        <div class="skylabs-title event-skylabs">
            <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="meeting" width="100%" height="auto">
        </div>
        @endforeach
    </section>
</div>