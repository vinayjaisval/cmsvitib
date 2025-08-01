

@php
    $language_code = \Helper::currentLanguage()->code;
    $heading = App\Models\Topic::where(['webmaster_id' =>20, 'row_no' => 5, 'status' => 1])->first();
    // dd($heading);
    $data = App\Models\Topic::where(['webmaster_id' =>20, 'status' => 1])->whereIn('row_no',['1','2','3','4'])->orderBy('id','DESC')->get();
@endphp

<section>
    <div class="elements-title-tech mt-5" id="elements-title-tech">
        <div class="">
            <div class="elements-head text-center py-2">
                <h2 class="font-weight-bold text-white text-uppercase">{!! $heading->{"title_$language_code"} ?? '' !!}</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="sip-title mt-3" id="sip-title">
        <div class="container">
            <div class="sip-meet-person">
                <div class="row">
                   @foreach($data as $dataItem)
                    <div class="col-lg-3">
                        <div class="sip-company-aloocated">
                            <img src="{{asset('public/uploads/topics/' . $dataItem->photo_file)}}" alt="{{$dataItem->{"title_$language_code"} ?? ''}}" width="100%" height="auto" loading="lazy">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script>
    var swiper = new Swiper('.swiper', {
    slidesPerView: 4,   // show 4 images at a time
    slidesPerGroup: 2,  // move 2 images when clicking next
    spaceBetween: 20,   // space between images
    loop: false,        // optional, set to true if you want infinite loop
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
