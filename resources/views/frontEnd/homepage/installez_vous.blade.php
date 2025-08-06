@php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 24,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 24,'status'=>1])->whereIn('row_no', [2,3,4])->get();
@endphp

<section>
    <div class="our-advantages-title py-5 mt-4" id="our-advantages-title">
        <div class="our-title text-center text-white">
            <h3 class="text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h3>
            <p class="font-weight-normal">{!! $heading->{"details_$language_code"} ?? '' !!}</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="services-containers vitib-vh mt-4">
                    @foreach($cartds as $items)
                        <div class="services-card"  data-popup="popup1">
                            <div class="card-icon">
                                <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="feedback">
                            </div>
                            <h3 class="card-heading text-uppercase">{{ $items->{"title_$language_code"} ?? '' }}</h3>
                            <div class="triangle-right"></div>
                        </div>
                        <div class="popup-overlay" id="popup1">
                              <div class="popup">
                                <span class="close-icon">&times;</span>
                                <p>Le bénéfice du régime de la ZBTIC est soumis à l’obtention d’un agrément délivré par l’EPE (VITIB S.A). 
                                                    Les sociétés désireuses de s’implanter sur la zone franche en qualité d’Entreprises Utilisatrices doivent opérer dans
                                                    les domaines d’activités suivants</p>
                                <ul>
                                  <li>Biotechnologie</li>
                                  <li>Technologies de l’Information et de la Communication</li>
                                  <li>Banques et Établissements financiers d’appui aux investissements réalisés dans la Zone Franche</li>
                                </ul>
                              </div>
                            </div>
                        @endforeach
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  document.querySelectorAll('.services-card').forEach(card => {
    card.addEventListener('click', () => {
      const popupId = card.getAttribute('data-popup');
      document.getElementById(popupId).style.display = 'flex';
    });
  });

  document.querySelectorAll('.close-icon').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.closest('.popup-overlay').style.display = 'none';
    });
  });

  // Optional: close popup if clicking outside
  document.querySelectorAll('.popup-overlay').forEach(overlay => {
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        overlay.style.display = 'none';
      }
    });
  });
</script>

<!-- model -->






