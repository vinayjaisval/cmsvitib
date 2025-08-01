 <section>
     <div class="expert-title counter-counts" is="expert-title">
         <div class="main-expert-title container">
             <div class="form-mtehod method-realtive bg-white py-5 px-4">
                 @if(session('success'))
                 <div class="alert alert-success mt-3">
                     {{ session('success') }}
                 </div>
                 @endif
                 <h2 class="envoyzt-title font-weight-normal">Envoyez-nous un message aujourd'hui</h2>
                 <form method="POST" action="{{ route('contact.store') }}">
                     @csrf
                     <div class="form-row">
                         <div class="form-group">
                             <label for="inputnom4">Nom</label>
                             <input type="text" class="form-control" id="inputnom4" name="nom" placeholder="Nom">
                         </div>
                         <div class="form-group mt-3">
                             <label for="inputPassword4">Numéro de téléphone</label>
                             <input id="phone" type="tel" class="form-control" name="phone" />
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <label for="inputAddress2">Ville</label>
                         <input type="text" class="form-control" id="inputAddress2" name="ville" placeholder="Ville">
                     </div>
                     <div class="form-group mt-3">
                         <label for="inputEmail4">E-mail</label>
                         <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="E-mail">
                     </div>

                     <div class="form-group mt-3">
                         <label for="exampleFormControlTextarea1">Message</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" placeholder="Message"></textarea>
                     </div>
                     <button type="submit" class="btn-submit submit-btn text-white">
                         Soumettre
                     </button>
                 </form>

             </div>

             <div class="team-invest">
                 <h2 class="pace-invest-chances mb-3">Nous sommes là pour <br> vous aider</h2>
                 <p>Que vous soyez une startup, un investisseur ou une entreprise, <br> notre équipe est prête à vous accompagner.
                     Contactez-nous <br> pour en savoir plus sur nos services, nos infrastructures <br> ou sur la manière d’implanter votre activité au sein <br> du VITIB Nous nous engageons à soutenir l’innovation et la croissance.</p>
                 <div class="address-title">
                     <div class="row backbone">
                         <div class="col-lg-4">
                             <div class="address-head text-center">
                                 <i class="fa-solid fa-location-dot"></i>
                                 <h4 class="mt-4">Adresse</h4>
                                 <span>B.P 605 Grand-Bassam</span>
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="address-head text-center">
                                 <i class="fa-solid fa-phone"></i>
                                 <h4 class="mt-4">Numéro de portable</h4>
                                 <span>+225 07 78 34 32 02</span>
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="address-head text-center">
                                 <i class="fa-solid fa-envelope"></i>
                                 <h4 class="mt-4">Email</h4>
                                 <span>info@vitib.ci</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>