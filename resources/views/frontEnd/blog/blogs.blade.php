@php
    $language_code = \Helper::currentLanguage()->code;
    $cartds = App\Models\Topic::where(['webmaster_id'=> 33, 'status'=>1])
        ->whereIn('row_no', [2,3,4,5,6,7,8,9,10])
       
        ->get();
@endphp

<section>
    <div class="blog-title">
        <div class="container">
            <div class="row">
                @foreach($cartds as $item)
                    @php
                        $title = $item->{"title_$language_code"} ?? '';
                        $details = strip_tags($item->{"details_$language_code"} ?? '');
                        $topic_link_url = Helper::topicURL($item->id, "", $item);
                    @endphp

                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="blog-head-title">
                            <div class="first-blog">
                                <img src="{{ URL::to('public/uploads/topics/'.$item->photo_file) }}" class="img-fluid" alt="blog image">
                            </div>
                            <div class="comited-import-title px-2 py-2">
                                <h2 class="h6 fw-bold">{{ $title }}</h2>
                                <p>{{ \Illuminate\Support\Str::limit($details, 200) }}</p> <!-- limit to 200 chars -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>05 March 2025</span>
                                    <a href="{{ $topic_link_url }}">
                                        <button>Voir Plus</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
