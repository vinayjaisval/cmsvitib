@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id' =>20, 'row_no' => 5, 'status' => 1])->first();
$Topics = App\Models\Topic::where('webmaster_id', 7)->orderBy('id', 'desc')->take(3)->get();
$Topics = App\Models\Topic::where(['webmaster_id' =>33, 'status' => 1])->whereIn('row_no', [2,3,4,5,6,7,8,9,10])
->take(3)->get();


@endphp


@if ($Topics->count() > 0)
<section>
    <div class="blog-title blur-blog mt-5 py-4" id="blog-title">
        <div class="text-center blog-center">
            <h2 class="fw-bold text-white">BLOG</h2>
        </div>
        <div class="container mt-4">
            <div class="row">
                @if ($Topics->count() > 0)
                @php
                $code = @Helper::currentLanguage()->code;
                $title_var = 'title_' . @Helper::currentLanguage()->code;
                $title_var2 = 'title_' . config('smartend.default_language');
                $seo_url_slug_var = 'seo_url_slug_' . @Helper::currentLanguage()->code;
                $seo_url_slug_var2 = 'seo_url_slug_' . config('smartend.default_language');
                @endphp

                @foreach ($Topics as $Topic)

                @php
                $title = $Topic->$title_var ?: $Topic->$title_var2;
                $topic_link_url = Helper::topicURL($Topic->id, "", $Topic);
                @endphp

                <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="linear">
                    <div class="blog-head bg-white p-2">
                        <a href="{{$topic_link_url}}">
                            <img src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}" alt="Blog Image"></a>

                        <div class="event-details">
                            <a href="{{$topic_link_url}}">
                                <h3 class="py-2 px-2 text-center">{{ $title }}</h3>
                            </a>
                        </div>
                        <div class="plus-title text-center">
                            <a href="{{$topic_link_url}}">
                                <button class=" border-0 px-4 py-2 rounded df">Voir Plus</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endif