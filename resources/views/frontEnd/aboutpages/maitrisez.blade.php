

@php
$language_code = \Helper::currentLanguage()->code;
$data = App\Models\Topic::where(['webmaster_id' => 23, 'row_no' => 2, 'status' => 1])->first();
@endphp
<section>
    <div class="zbtic-title mt-5">
        <div class="maitriz-title">
            <h1 class="text-center fw-bold">MAITRISEZ NOTRE ENVIRONNEMENT</h1>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="zbtic-text text-center">
                        <!--<img src="assets/image/logo/logo.png" alt="VITIB Logo">-->
                        <h3 class="text-center">ZBTIC</h3>
                    </div>
                    <div class="text-int mt-5 p-4">

                        <p>Ce signe désigne la Zone Franche de la Biotechnologieet
                            des Technologies de l’Information et de la Communication institué parla
                            La loi n° 2004-429. C’est en 2004 qu’elle a été créée pour héberger des entreprises
                            dans nos secteurs éligibles et agrées.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="zbtic-text text-center">
                        <img src="{{asset('public/assets/assets')}}/image/logo/logo.png" alt="VITIB Logo">
                    </div>
                    <div class="text-int mt-4 p-4">
                        <!--<h3 class="text-center">VITIB</h3>-->
                        <p>Le Décret N° 2007-01 du 03 Janvier 2007désignant le
                            VITIB SA commel’Entreprise de Promotion et d’Exploitation (EPE) administrant
                            la ZBTIC.Le VITIB désigne le Village des Technologies de l’Information et de la
                            Communication..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="zbtic-text text-center">
                        <!--<img src="assets/image/logo/logo.png" alt="VITIB Logo">-->
                        <h3 class="text-center">UEP-ZBTIC</h3>
                    </div>
                    <div class="text-int mt-5 p-4">

                        <p>L’arrêté 245/MPTIC/MEF du 10 août 2012créant l’Unité
                            d’Exécution du Projetde la ZBTIC (UEP-ZBTIC) avec comme attribution la
                            gestion opérationnelledes fonds et du projet, sous la supervision d’un
                            Comité de Pilotageinterministériel (CP-ZBTIC)..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>