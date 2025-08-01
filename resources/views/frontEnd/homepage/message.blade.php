<!-- @php
    $language_code = \Helper::currentLanguage()->code;
    $heading  = App\Models\Topic::where(['webmaster_id'=> 27,'row_no'=>1,'status'=>1])->first();
    $cartds  = App\Models\Topic::where(['webmaster_id'=> 27,'status'=>1])->whereIn('row_no', [2,3,4])->get();
@endphp
<section>
    <div class="form-action temporailt-awe mt-4" id="form-action">
        <div class="container npus-ino">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-mtehod bg-white py-5 px-4">
                        <h2 class="envoyzt-title font-weight-normal">Envoyez-nous un message aujourd'hui</h2>

                        < Form Start -->
                        <!-- <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="inputnom4">Nom</label>
                                    <input type="text" name="name" class="form-control" id="inputnom4" placeholder="Nom" required>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="inputPhone">Numéro de téléphone</label>
                                    <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="(+225)">
                                </div>
                            </div>

                            <div class="form-group mt-2">
                                <label for="inputCity">Ville</label>
                                <input type="text" name="city" class="form-control" id="inputCity" placeholder="Ville">
                            </div>

                            <div class="form-group mt-2">
                                <label for="inputEmail4">E-mail</label>
                                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="E-mail" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <button type="submit" class="btn-submit submit-btn text-white">
                                Soumettre
                            </button>
                        </form> -->
                        <!-- Form End -->

                    <!-- </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-details-righr px-5">
                        <h3 class="from-fdcg font-weight-normal">
                            Contactez-nous dès aujourd'hui et notre équipe vous assistera!
                        </h3>
                        <div class="btn-devfg mt-4">
                            <button class="text-center text-white py-2 px-2 rounded">Contactez-nous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- </section>


<section>
    <div class="elements-title-tech mt-5 pt-4" id="elements-title-tech">
        <div class="container">
            <div class="elements-heads text-center py-2">
                <h2 class="font-weight-bold  text-uppercase">{{ $heading->{"title_$language_code"} ?? '' }}</h2>
                <p>{!! $heading->{"details_$language_code"} ?? '' !!}</p>
            </div>
        </div>
    </div>
</section>  -->

