

@php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [1,2,4,3])->get();
@endphp
@php
    $language_code =  @Helper::currentLanguage()->code;
    $discover  = App\Models\Topic::where(['webmaster_id'=> 29,'row_no'=>4,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [2])->get(); 
@endphp
<section>
<!--        <div class="form-check container  d-flex justify-content-end gap-2 mt-3"> -->
<!--         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
<!--         <label class="form-check-label" for="flexCheckDefault">-->
<!--         J'accepte les termes et conditions.-->
<!--  </label>-->
<!--</div>-->
        <div class="vn-red container mt-4" style="text-align: end;">
          <a href="assets/image/gif/Formulaire de demande d'agrément VITIB_V 6.5 (1).pdf.zip" download="">
           <img src="{{ URL::to('public/assets/assets')}}/image/d1.svg" alt="Download PDF">
           </a>
        </div>
</section>


<section>
    <div class="agreement-new-title mt-3">
        <div class="container">
            <div class="row overflow-hidden">
            @foreach($cartds as $items)
                <div class="col-lg-6">
                    <div class="new-abstraction">
                        <h1 class="fw-bold aos-init aos-animate" data-aos="fade-right" data-aos-duration="2000">{{ $items->{"title_$language_code"} ?? '' }}</h1>
                        <p>Vous souhaitez vous implanter dans la Zone Franche Technologique de Grand- Bassam ?
                        Le VITIB vous propose des solutions flexibles et adaptées à vos ambitions. Que vous soyez une startup,
                        une PME innovante ou une multinationale, nous avons une formule pour vous.</p>
                        <sapn><strong>Option 1 : Terrain nu – Construisez à votre image</strong> </sapn>
                        <p>Bénéficiez d’un terrain nu à partir de 5 000m  pour 1500f CFA/m , mis à disposition sous bail emphytéotique
                        et construisez vos propres infrastructures selon vos besoins pour un environnement de travail sur-mesure</p>
                              <sapn><strong>Option 2 : Location de bureaux  </strong> </sapn>
                              <p>Profitez de nos espaces à bureaux prêts à l’emploi pour démarrer rapidement vos activités. 
                              Cette solution clé en main convient parfaitement aux entreprises en phase de démarrage ou en expansion. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="agree-img">
                         <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="mark">
                    </div>
                    
                </div>
                
                @endforeach
            </div>
        </div>
    </div>
</section>