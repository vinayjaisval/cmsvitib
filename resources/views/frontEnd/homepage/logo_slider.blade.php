@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 28, 'row_no' => 1, 'status' => 1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id' => 28, 'status' => 1])
                ->whereIn('row_no', range(1, 30)) 
                ->get();
@endphp


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<style>
    .partner-section {
        padding: 20px 0;
    }
    .crowsel-container {
        width: 100%;
        margin: auto;
        overflow: hidden;
    }
    .crowsel-wrapper {
        display: flex;
        align-items: center;
    }
    .crowsel-card {
        padding: 10px;
        box-sizing: border-box;
    }
    .partner-image img {
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
    }
</style>

<div class="partner-section" id="partner-section">
    <div class="crowsel-container">
        <div class="elements-title-tech" id="elements-title-tech">
            <div class="container">
                <div class="elements-heads text-center py-2">
                    <h2 class="font-weight-bold  text-uppercase">NOS ENTREPRISES AGRÉÉES</h2>
                    <p>Une centaine d’entreprises déjà installées et bénéficiant des avantages de la zone franche.<br>
                        Qu’attendez-vous pour  les rejoindre&nbsp;?</p>
                </div>
            </div>
        </div>
        <div class="crowsel-wrapper" id="dynamic-carousel">
            @foreach($cartds as $item)
                <div class="crowsel-card">
                    <div class="partner-image">
                        <img src="{{ asset('public/uploads/topics/' . $item->photo_file) }}" alt="Partner {{ $item->row_no }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- jQuery + Slick JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('#dynamic-carousel').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0, 
            speed: 2000, 
            cssEase: 'linear', 
            arrows: false,
            dots: false,
            infinite: true,
            pauseOnHover: false,
            variableWidth: true, 
            centerMode: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    });
</script>

