<?php
$TestimonialsLimit = 0; // 0 = all
$Testimonials = Helper::Topics(Helper::GeneralWebmasterSettings("home_content6_section_id"), 0, $TestimonialsLimit, 1);
?>
@if(count($Testimonials)>0)
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('EXCELLENT') }}</h2>
                <p>{{ __('frontend.homeTestimonialsDesc') }}</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php
                    $section_url = "";
                    ?>
                    @foreach($Testimonials as $Topic)
                        <?php
                        if ($Topic->$title_var != "") {
                            $title = $Topic->$title_var;
                        } else {
                            $title = $Topic->$title_var2;
                        }
                        if ($Topic->$details_var != "") {
                            $details = $details_var;
                        } else {
                            $details = $details_var2;
                        }
                        if ($section_url == "") {
                            $section_url = Helper::sectionURL($Topic->webmaster_id);
                        }
                        $topic_link_url = Helper::topicURL($Topic->id,"",$Topic);
                        $HomeSectionType = @$Topic->webmasterSection->type;
                        if (!@$require_mp3_player && $HomeSectionType == 3) {
                            $require_mp3_player = 1;
                        }
                        ?>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    @if($Topic->photo_file !="")
                                        <img class="testimonial-img"
                                             src="{{ URL::to('public/uploads/topics/'.$Topic->photo_file) }}" width="90" height="90"  loading="lazy"
                                             alt="{{ $title }}"/>
                                    @endif
                                    <h3>{{ $title }}</h3>
                                    {{--Additional Feilds--}}
                                    @include("frontEnd.topic.fields",["cols"=>12,"Fields"=>@$Topic->webmasterSection->customFields->where("in_listing",true)])
                                    @if(strip_tags($Topic->$details) !="")
                                        <p>
                                            <i class="fa-solid fa-quote-left quote-icon-left"></i>

                                            @if(Str::length(strip_tags($Topic->$details)) > 70)
                                                <span id="dots-{{ $Topic->id }}">{{ Str::limit(strip_tags($Topic->$details),70) }}</span>
                                                <span id="more-{{ $Topic->id }}" style="display: none;">
                                                    {!! strip_tags($Topic->$details) !!}
                                                </span>
                                                <button onclick="toggleReadMore({{ $Topic->id }})" class="btn-link">{{ __("ReadMore") }}</button>
                                            @else
                                                <span>{!! strip_tags($Topic->$details) !!}</span>
                                            @endif
                                            <i class="fa-solid fa-quote-right quote-icon-right"></i>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".testimonials-slider", {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1024: { slidesPerView: 3 },
                    768: { slidesPerView: 2 },
                    480: { slidesPerView: 1 }
                }
            });
        });
    </script>

<script>
    function toggleReadMore(id) {
        var dots = document.getElementById("dots-" + id);
        var moreText = document.getElementById("more-" + id);
        var btnText = event.target;

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            moreText.style.display = "none";
            btnText.innerHTML = "{{ __('ReadMore') }}";
        } else {
            dots.style.display = "none";
            moreText.style.display = "inline";
            btnText.innerHTML = "{{ __('ReadLess') }}";
        }
    }
</script>

@endif
