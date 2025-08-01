
@php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [1,2,4,3])->get();
@endphp
@php
    $language_code =  @Helper::currentLanguage()->code;
    $discover  = App\Models\Topic::where(['webmaster_id'=> 29,'row_no'=>4,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [4])->get(); 
@endphp
<section>
    <div class="technologies-title mt-5">
        <div class="container">
            <div class="row overflow-hidden">
            @foreach($cartds as $items)

                <div class="col-lg-6">
                    <div class="new-abstraction">
                        <h1 class="fw-bold">{{ $items->{"title_$language_code"} ?? '' }} </h1>
                        <p>L’agrément VITIB, c’est votre passeport vers un environnement fiscalement avantageux, techniquement
                            équipé et stratégiquement positionné pour accélérer votre croissance en Afrique de l’Ouest.</p>
                        <p>En intégrant la Zone Franche de Biotechnologies et des TIC (ZBTIC), vous bénéficiez d’avantages uniques</p>
                        <p>0% de droits de douanes à l’importation et à l’exportation.
                            0% d’impôts sur les revenus pendant les 5 premières années. <br>
                            Exonération totale de la patente.<br>
                            1% d’impôts sur le chiffre d’affaires à partir de la 6ème année avec possibilités de remise d’impôt jusqu’à 50%.<br>
                            0% de taxe à valeur ajoutée sur les facteurs de production : consommations d’électricité, d’eau et de produits pétroliers<br>
                            Liberté de transfert des fonds sur les salaires et sur les dividendes distribués<br>
                            Guichet unique pour l’assistance au traitement rapide des opérations administratives.<br>
                            Titre de séjour pour les étrangers et leurs familles.<br>
                            Aucune limite sur les investissements étrangers et locaux </p>
                        <p>Prêt à rejoindre les entreprises qui construisent l’économie numérique et scientifique de demain ?
                            Téléchargez notre formulaire et débutez vos démarches.


                        </p>
                    </div>
                    <section>

                        <div class="vn-red container mt-4" style="text-align:start; padding:0;">
                            <a href="{ URL::to('public/assets/assets')}}//image/gif/Formulaire de demande d'agrément VITIB_V 6.5 (1).pdf.zip" download="">
                                <img src="{{ URL::to('public/assets/assets')}}/image/d1.svg" alt="Download PDF">
                            </a>
                        </div>
                    </section>
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