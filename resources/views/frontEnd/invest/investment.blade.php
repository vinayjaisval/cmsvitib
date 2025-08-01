@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 32, 'status'=>1, 'row_no'=>3])->first();
$cartds = App\Models\Topic::where(['webmaster_id'=> 32, 'status'=>1])->whereIn('row_no', [4,5,6,7,8,9,10,11])->get();
@endphp
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<section>
    <div class="project-title-inv mt-5">
        <div class="project-head-plan text-center">
            <h1>{{ $heading->{'title_'.$language_code} ?? '' }}</h1>
        </div>

        <div class="container mt-5">
            <div class="row">
                @foreach($cartds as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div
                        class="head-plans" data-aos="flip-left" data-aos-duration="3000"
                        data-bs-toggle="modal"
                        data-bs-target="#projectModal"
                        data-title="{{ $item->{'title_'.$language_code} ?? '' }}"
                        data-details="{!! htmlspecialchars($item->{'details_'.$language_code} ?? '', ENT_QUOTES) !!}"
                        data-img="{{ URL::to('public/uploads/topics/'.$item->photo_file) }}">
                        <img src="{{ URL::to('public/uploads/topics/'.$item->photo_file) }}"
                            class="img-fluid"
                            alt="{{ $item->{'title_'.$language_code} ?? '' }}"
                            role="button">
                        <h4 class="text-center h5 mt-2">{{ $item->{'title_'.$language_code} ?? '' }}</h4>
                        <p class="text-center p-2">{!! $item->{'details_'.$language_code} ?? '' !!}</p>
                        <div class="text-end fw-bold px-3">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 p-3 border-0 shadow">
                <button type="button" class="btn-close ms-auto me-2 mt-2" data-bs-dismiss="modal"></button>
                <div class="d-flex flex-column flex-md-row align-items-center gap-4 px-3 pb-3">
                    <div class="flex-shrink-0">
                        <img id="modalImage" src="" class="img-fluid rounded-3" style="max-width: 280px;">
                    </div>
                    <div class="text-md-start text-center">
                        <h5 id="modalTitle" class="fw-bold mb-2"></h5>
                        <p id="modalDescription" class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    const projectModal = document.getElementById('projectModal');
    projectModal.addEventListener('show.bs.modal', function(event) {
        const trigger = event.relatedTarget;

        const title = trigger.getAttribute('data-title');
        const details = trigger.getAttribute('data-details');
        const img = trigger.getAttribute('data-img');

        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalDescription').innerHTML = details;
        document.getElementById('modalImage').src = img;
    });
</script>

<!-- Styling -->
<style>
    .head-plans img {
        cursor: pointer;
    }


    .head-plans img:hover {
        transform: scale(1.02);
        transition: transform 0.2s ease;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    }

    .btn-close {
        background-color: #eee;
        padding: 0.5rem;
        border-radius: 50%;
    }

    .modal-body img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true, // animation only once
        duration: 1000, // global animation duration
    });
</script>