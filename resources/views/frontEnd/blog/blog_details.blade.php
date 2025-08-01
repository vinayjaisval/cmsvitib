@php
$language_code = \Helper::currentLanguage()->code;
$heading = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1,'row_no'=>1])->get();
$cartds = App\Models\Topic::where(['webmaster_id'=> 33,'status'=>1])->whereIn('row_no', [1])->get();
@endphp
<section>
  <div class="blog-title mt-5">
    <div class="container ">
      <div class="row">
        <div class="col-lg-8">
          <div class="fw-bold h3 text-uppercase title ">VITIB BUSINESS CONNECT 2025 </div>
          <div class="blog-head-titles pb-3">
            <div class="first-blogs mb-2">
              <img src="img/skyvitib.png">
            </div>
            <p>La coopération ivoiro- indienne s’intensifie de plus en plus, en l’occurrence, dans
              les secteurs des TICs, de la santé, de l’agriculture, de l’exploitation minière et ce n’est
              surtout pas la société VITIB qui compte rester en marge de cette collaboration qui date depuis
              la création de la Zone Franche de la Biotechnologie, des Technologies de l’Information et de la Communication (ZBTIC).</p>
            <p>Dans le cadre de la mise en œuvre de son plan stratégique 2024- 2028, le VITIB avec à sa tête son Directeur Général,
              M. MEBETI DOSSO a organisé un roadshow à New Delhi (Inde) le mercredi 05 mars 2025 en vue de mobiliser l’expertise et les
              investissements indiens afin de développer un écosystème technologique durable dans le parc technologique du VITIB à Grand- Bassam. </p>
            <p>Ce roadshow a donc enregistré la présence significative de S.EM. Éric N’DRY, Ambassadeur de la Côte d’Ivoire venu avec une forte
              représentation de ladite institution, ainsi qu’une centaine d’opérateurs indiens clés rompus aux métiers de la haute technologie, aussi bien
              dans l’opérationnel que dans les investissements.</p>
            <p>Après des projections vidéo sur les atouts et merveilles que regorgent notre pays la Côte d’Ivoire, le Directeur
              Général du VITIB, M. MEBETI a présenté à l’assemblée les opportunités d’affaires offertes par le VITIB :
              «L'Inde a été un partenaire solide et de confiance dans notre démarche visant à faire du VITIB un pôle technologique
              de premier plan en Afrique.Avec ce roadshow, nous invitons les investisseurs indiens à se joindre à nous pour façonner
              l'avenir de la technologie et de l'innovation en Côte d'Ivoire.La Côte d'Ivoire est à un tournant et, avec les investissements appropriés, nous pouvons accélérer notre transformation en un centre technologique majeur en Afrique »</p>
            <p>La manifestation d’intérêt des opérateurs présents s’est fait entendre par la multiplicité des questions provenant des coins et recoins de la salle, sans repartir, bien évidemment, satisfaits par les réactions des panélistes composés de :</p>
            <ul class="listing-body">
              <li>M. MEBETI DOSSO, Directeur Général du VITIB</li>
              <li>M. Yann- Gabriel N’ZI, Directeur Technique du VITIB</li>
              <li>M. Santoch, Directeur Général de SKYLAB, compagnie indienne partenaire et co- organisatrice du roadshow en Inde</li>
              <li>M. SOME Richard, Représentant de la compagnie mauricienne EXCELLIA pour le développement de la Smart City du Parc technologique du VITIB</li>
              <li>M. Raheem ALIBHAI, Partenaire du représentant de EXCELLIA</li>
            </ul>
            <p>Notons qu’à la suite de ce roadshow, le VITIB (Village des Technologies de l’Information et de la Biotechnologie)
              a entamé une série de rencontres en Inde afin de promouvoir la Zone Franche de Grand-Bassam pour renforcer la coopération
              avec des acteurs clés du secteur en Inde et établir des partenariats stratégiques, facilitant le transfert de technologies
              , le développement de talents locaux et l’accélération de sa transformation numérique en Côte d’Ivoire et dans la sous-région.</p>
            <p>Pour plus d’actualités sur le VITIB, suivez-nous sur toutes nos plateformes.
              Besoin de plus d’informations, contactez-nous!
              📲 27 21 31 29 31 / 07 59 91 21 34 / 07 78 34 32 02
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="swiper mySwiper sw-swip">
            <div class="swiper-wrappers">
              <div class="swiper-slides">
                <img src="img/businees.jpeg">
              </div>
              <div class="swiper-slides mt-4">
                <img src="img/DSC_3754.JPG">
              </div>
              <div class="swiper-slides mt-4">
                <img src="img/DSC_3716.JPG">
              </div>
              <div class="swiper-slides mt-4">
                <img src="img/DSC_3775.JPG">
              </div>
            </div>
            <!-- Optional navigation -->
            <!--<div class="swiper-button-next"></div>-->
            <!--<div class="swiper-button-prev"></div>-->
            <!--<div class="swiper-pagination"></div>-->
          </div>
        </div>


      </div>
    </div>
  </div>
  
</section>

<section>

  <!-- Suggested Blogs Section -->
  <div class="suggested-blogs container" style="margin-top: 50px; padding: 20px; border-top: 1px solid #ccc;">
    <p>your blog content here...</p>
    <ul style="list-style: none; padding-left: 0;display:flex; gap:20px;">
      <li><a href="{{route('blog_details')}}" style="text-decoration: none; color: #007BFF;"><img src="img/skyvitib.png" width="100px"></a></li>
      <li><a href="blogdetails_meeting.html" style="text-decoration: none; color: #007BFF;"><img src="img/WhatsApp Image 19.jpeg" width="100px"></a></li>
      <li><a href="cesec.html" style="text-decoration: none; color: #007BFF;"><img src="./assets/image/WhatsApp Image 50.jpg" alt="img13" width="100px" height="65px"></a></li>
    </ul>
  </div>
</section>