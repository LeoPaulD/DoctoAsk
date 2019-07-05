<?php include('../header-footer/head.html'); ?>

<?php include('../header-footer/header.html'); ?>

    <div class="contenu">
        <div class="col-12">
            <div>
                <h1 class="text-center m-4">Annuaire praticiens</h1>
            </div>
        </div>
        <!----Contenu de la page-->
        <div id="filtreMobile" class="container fixed-bottom col-12 col-lg-4">
            <div class="row">
              <div class="col-12">
                <p><i class="fas fa-sliders-h"></i> Filtre</p>
              </div>
            </div>
            <div id="champs" class="row">
              <div class="col-12 pt-3">
                <form>
                  <p>Choix de la ville</p>
                  <div class="form-group">
                    <input type="text" class="form-control inClass" id="champVille"  placeholder="Entrez une ville...">
                  </div>
                  <p>Spécialité</p>
                  <div class="row">
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Généraliste</span></label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Neurologue</span></label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Ophtalmologue</span></label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Pneumologue</span></label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Psychiatre</span></label>
                      </div>

                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Chirurgien</span></label>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Kinésithérapeute</span></label>
                      </div>

                    </div>
                    <div class="col-6">
                      <div class="checkbox">
                        <label><input type="checkbox" value=""><span>Dentiste</span></label>
                      </div>
                    </div>
                  </div>
                  <p class="pt-2">Moyen de paiment</p>
                  <div>
                    <select class="form-control col-12 col-md-6 mx-auto" id="moyenPaiement">
                      <option>...</option>
                      <option>Carte</option>
                      <option>Chèque</option>
                      <option>Liquide</option>
                    </select>
                  </div>

                  <div class="form-group my-3">
                    <button type="submit" class="btn btn-primary col-12 bg-sub">Rechercher</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

        <!-- 1 : Les Annonces -->
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class=" col-lg-4 col-md-6 p-3">
                        <div class="col-12">
                            <div class="fiche shadow  bg-white rounded">
                                <div class="img-medecin align-items-end mx-auto " style="background-image : url(img/bertrand.jpg);">
                                    <div class=" pt-3 pl-4">
                                        <p><b>Dr Bertrand</b><br>Paris</p>
                                    </div>

                                </div>
                                <div class="">
                                  <a href="../profil/" class="search-icon" title="Profil médecin">
                                    <i class="fas fa-search"></i>
                                  </a>
                                    <p class="pt-3 pl-4"><b>Spécialités</b> </p>
                                    <span class="badge  ml-4 mb-4">Chirurgien</span>
                                    <span class="badge  ml-4 mb-4">Neurologue</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="col-12">
                            <div class="fiche shadow  bg-white rounded">
                                <div class="img-medecin align-items-end mx-auto " style="background-image : url(img/saintonge.jpg);">
                                    <div class=" pt-3 pl-4">
                                        <p><b>Dr Saintonge</b><br>Bordeaux</p>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../profil/"class="search-icon">
                                      <i class="fas fa-search"></i>
                                    </a>
                                    <p class="pt-3 pl-4"><b>Spécialités</b> </p>
                                    <span class="badge  ml-4 mb-4">Généraliste</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="col-12">
                            <div class="fiche shadow  bg-white rounded">
                                <div class="img-medecin align-items-end mx-auto " style="background-image : url(img/leclerc.jpg);">
                                    <div class=" pt-3 pl-4">
                                        <p><b>Dr Leclerc</b><br>Bordeaux</p>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../profil/"class="search-icon">
                                      <i class="fas fa-search"></i>
                                    </a>
                                    <p class="pt-3 pl-4"><b>Spécialités</b> </p>
                                    <span class="badge  ml-4 mb-4">Généraliste</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="col-12">
                            <div class="fiche shadow  bg-white rounded">
                                <div class="img-medecin align-items-end mx-auto " style="background-image : url(img/leclerc.jpg);">
                                    <div class=" pt-3 pl-4">
                                        <p><b>Dr Leclerc</b><br>Bordeaux</p>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../profil/"class="search-icon">
                                      <i class="fas fa-search"></i>
                                    </a>
                                    <p class="pt-3 pl-4"><b>Spécialités</b> </p>
                                    <span class="badge  ml-4 mb-4">Généraliste</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="col-12">
                            <div class="fiche shadow  bg-white rounded">
                                <div class="img-medecin align-items-end mx-auto " style="background-image : url(img/leclerc.jpg);">
                                    <div class=" pt-3 pl-4">
                                        <p><b>Dr Leclerc</b><br>Bordeaux</p>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../profil/"class="search-icon">
                                      <i class="fas fa-search"></i>
                                    </a>
                                    <p class="pt-3 pl-4"><b>Spécialités</b> </p>
                                    <span class="badge  ml-4 mb-4">Généraliste</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 p-3">
                        <div class="col-12">
                            <div class="fiche shadow  bg-white rounded">
                                <div class="img-medecin align-items-end mx-auto " style="background-image : url(img/leclerc.jpg);">
                                    <div class=" pt-3 pl-4">
                                        <p><b>Dr Leclerc</b><br>Bordeaux</p>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="../profil/"class="search-icon">
                                      <i class="fas fa-search"></i>
                                    </a>
                                    <p class="pt-3 pl-4"><b>Spécialités</b> </p>
                                    <span class="badge  ml-4 mb-4">Généraliste</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


    </section>

<?php include('../header-footer/footer.html'); ?>

<script type="text/javascript"></script>
