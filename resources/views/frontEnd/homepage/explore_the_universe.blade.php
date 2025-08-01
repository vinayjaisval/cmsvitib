<!-- <?php
 $home_page_id = Helper::GeneralWebmasterSettings("home_content4_section_id");
?>
@if($home_page_id >0)
<?php
  $HomePage = Helper::Topic(Helper::GeneralWebmasterSettings("home_content4_section_id"));
?>
@if(!empty($HomePage))
@if(@$HomePage->$details_var !="")
<section class="">
    <div class="first-explore py-4" id="first-explore">
        <div class="leader-ship-head text-center">
            <h2 class="text-leader-head text-white mx-auto fw-bold py-2">{{ @$HomePage->{"title_" . @Helper::currentLanguage()->code} }}</h2>
            <div class="leadership-title">
                <p> {!! @$HomePage->$details_var !!}</p>
            </div>
        </div>
    </div>
</section>
@endif
@endif
@endif

{{-- <section>
    <div class="first-explore py-4" id="first-explore">
        <div class="container">
            <div class="leader-ship-head text-center">
                <h2 class="text-leader-head text-white mx-auto fw-bold py-2">EXPLOREZ L’UNIVERS</h2>
                <div class="leadership-title">
                    <h2 class="font-weight-normal mt-4">Plus de 17 ans de leadership et d'innovation.
                    </h2>

                    <p>Avec plus de 17 ans de leadership dans l'industrie, VITIB est à l'avant-garde de l'innovation et du développement économique en Côte d'Ivoire. Notre expertise et notre engagement ont contribué à façonner un écosystème prospère pour les entreprises des secteurs de la technologie, de la biotechnologie et de l'industrie, faisant de nous un partenaire de confiance pour les entreprises souhaitant se développer en Afrique.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}} -->
