

@php
    $language_code = \Helper::currentLanguage()->code;
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [1,2,4,3])->get();
@endphp
@php
    $language_code =  @Helper::currentLanguage()->code;
    $discover  = App\Models\Topic::where(['webmaster_id'=> 29,'row_no'=>4,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 31,'status'=>1])->whereIn('row_no', [3])->get(); 
@endphp
<div class="container">
    <div class="row mt-5 direction overflow-hidden ">
    @foreach($cartds as $items)
    <div class="col-lg-6">
                    <div class="agree-img">
                         <img src="{{ URL::to('public/uploads/topics/'.$items->photo_file) }}" alt="mark">
                    </div>
                    
                </div>

        <div class="col-lg-6">
            <div class="new-abstraction">
                <h1 class="fw-bold">{{ $items->{"title_$language_code"} ?? '' }} </h1>
                <sapn><strong>Vous êtes acteur de l’innovation technologique ? </strong> </sapn>
                <p>Le VITIB vous ouvre les portes de la ZBTIC, un environnement unique, dédié aux entreprises à fort potentiel technologique.
                    Pour bénéficier du régime fiscal, douanier et réglementaire compétitif de la Zone Franche de Grand-Bassam, votre activité
                    doit relever de l’un des secteurs stratégiques suivants.</p>
                <p class="fw-bold"> <strong>Biotechnologie</strong> </p>
                <p>Vous innovez dans la santé, l'agriculture ou l'environnement ? Rejoignez un écosystème qui favorise la recherche, le développement et l’industrialisation de solutions biotech.
                    Installez vos laboratoires, vos unités de production ou vos centres R&amp;D au sein de notre hub technologique, dans un cadre sécurisé,
                    connecté et compétitif. Découvrez ici la liste des activités biotechnologiques éligibles.<!-- Trigger Button -->
                    <a href="javascript:void(0);" class="popupLink" id="openPopup">Voir Plus</a>
                    <!-- Modal Structure -->
                </p>
                <p class="fw-bold">Technologies de l’Information et de la Communication (TIC) </p>

                <p> Startups, PME, ou multinationales du numérique : boostez votre croissance dans un hub conçu pour vous. <br>

                    Développement logiciel, services IT, cybersécurité, IA, cloud, data centers… notre <br>

                    parc technologique est l’espace idéal pour déployer vos projets technologiques à grande échelle. </p>
            </div>
        </div>

        @endforeach
    </div>
</div>

<!-- model -->

<div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="popupContent">
                <p>L’article 1er de la Loi n° 2004-429 instituant le régime de la Zone franche de la
                    Biotechnologie et des Technologies de l’Information et de la Communication en Côte
                    d’Ivoire (ZBTIC) définit les activités relevant de la Biotechnologie comme les activités
                    destinées à promouvoir, développer, la microbiologie technique et la biotechnique de
                    l'environnement, la biotechnologie des cellules animales et végétales, la pharmacie,
                    l'ingénierie biotechnologique, la biotechnologie moléculaire, la bioinformatique, les
                    techniques biochimiques et d'une manière générale les sciences du vivant. <br>
                    Ces activités telles que définit par l’article sus cité, mettent en œuvre des
                    compétences multidisciplinaires, incluant la biologie, la chimie, la physique, et
                    l’informatique, dans le but de relever des défis économiques, sanitaires et
                    environnementaux. <br>
                    Pour une meilleure appréciation des activités éligibles à l’agrément du VITIB SA, il
                    nous appartient de définir les domaines clés dans lesquels ses activités se
                    repartissent :</p>
                <div class="listing-list">
                    <h4>Santé et biopharmacie</h4>
                    <ul>
                        <li> <strong>Développement de médicaments </strong> : Vaccins, thérapies géniques, anticorps
                            monoclonaux, et thérapies cellulaires.</li>
                        <li> <strong>Diagnostic médical </strong> : Tests de dépistage, biomarqueurs, technologies
                            génétiques (comme CRISPR pour l’édition génomique).</li>

                        <li> <strong>Recherche sur les maladies </strong> : Étude des pathologies humaines pour
                            développer des solutions préventives ou curatives.</li>
                    </ul>
                    <h4>Agroalimentaire</h4>
                    <ul>
                        <li> <strong>Amélioration des cultures </strong> : Création d’organismes génétiquement modifiés
                            (OGM), résistance aux maladies, amélioration des rendements..</li>
                        <li> <strong>Biopesticides et biofertilisants </strong> : Utilisation de micro-organismes pour
                            réduire l’usage de produits chimiques..</li>

                        <li> <strong>Production alimentaire </strong> : Fermentation (comme la production de levure, de
                            fromage, de vin ou de bière) et ingrédients fonctionnels (probiotiques, enzymes
                            alimentaires)</li>
                    </ul>
                    <h4>Environnement</h4>
                    <ul>
                        <li> <strong>Bioremédiation</strong> : Décontamination des sols, des eaux ou de l’air à l’aide de
                            micro-organismes.</li>
                        <li> <strong>Traitement des déchets </strong> : Valorisation des déchets organiques en biogaz ou
                            compost.</li>

                        <li> <strong>Énergies renouvelables </strong> : Production de biocarburants (bioéthanol,
                            biodiesel).</li>
                    </ul>

                    <h4>Industrie</h4>
                    <ul>
                        <li> <strong>Biotechnologie blanche </strong> : Production de bioplastiques, enzymes
                            industrielles, et produits chimiques verts</li>
                        <li> <strong>Biofabrication </strong> : Création de matériaux bio-inspirés comme des fibres textiles
                            ou des biomatériaux pour l’impression 3D.</li>

                        <li> <strong>Optimisation des procédés industriels </strong> : Réduction des impacts
                            environnementaux grâce à des procédés biologiques.</li>
                    </ul>

                    <h4>Recherche fondamentale et génomique</h4>
                    <ul>
                        <li> <strong>Séquençage de l’ADN</strong> : Cartographie des génomes humains, animaux ou végétauxs</li>
                        <li> <strong>Bio-informatique</strong> : Analyse et modélisation des données biologiques.</li>

                        <li> <strong>Biologie synthétique</strong> : Conception et construction de systèmes biologiques
                            artificiels</li>
                    </ul>
                    <h4>Cosmétiques et bien-être</h4>
                    <ul>
                        <li> <strong>Ingrédients actifs naturels</strong> : Utilisation d’extraits biologiques pour les soins
                            de la peau et des cheveux</li>
                        <li> <strong>Produits bioactifs</strong> : Utilisation de micro-algues ou de bactéries pour des
                            formulations innovantes.</li>


                    </ul>

                    <h4>Sécurité et défense</h4>
                    <ul>
                        <li> <strong>Détection des agents pathogènes </strong> : Capteurs biologiques pour détecter les
                            agents biologiques ou chimiques</li>
                        <li> <strong>Développement d’antidotes </strong>: Recherche pour contrer les armes biologiques
                            ou chimiques.</li>


                    </ul>
                    <p>Il est à noter, selon l’article 6 de la Loi n° 2004-429, “les activités de transfert, de
                        manipulation d’utilisation et de commercialisation d’organismes génétiquement
                        modifiés (OGM) et d’organismes vivants modifiés (OVM) sont soumises à
                        l’autorisation préalable des autorités compétentes de l’Etat de Côte d’Ivoire.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>



<script>
    document.getElementById('openPopup').addEventListener('click', function() {
        let myModal = new bootstrap.Modal(document.getElementById('popupModal'));
        myModal.show();
    });
</script>