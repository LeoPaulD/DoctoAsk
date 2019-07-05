<?php include('../header-footer/head.html'); ?>

<?php include('../header-footer/header.html'); ?>

    <!-- Contenu de la page -->
    <div class="contenu">
        <div class="col-12">
            <div>
                <h1 class="text-center m-4">Paiement offre</h1>
            </div>
        </div>
        <!-- 1 : Configuration du profil medecin -->
        <div class="container my-5">
            <div class="col-12 m-5"></div>
            <div class="col-10 mx-auto">

                <div class=" mx-auto p-4 profil-img mx-auto justify-content-center align-items-center">

                    <div class="justify-content-center align-items-center">
                        <img src="img/locked.png" alt="locked icon">
                    </div>
                </div>
            </div>
            <div>
                <p class="text-center m-4" >Vous avez choisi l'offre à 70€ par mois, vous pourrez configurer 25 réponses.</p>
            </div>
            <form action="">
                <div class="justify-content-center">
                    <div class="col-lg-10 mx-auto">
                    
                        <div class="row">
                            <div class="col-md-6 p-4">
                                <label class="col-12">Nom :</label>
                                <input class="inClass col-lg-12" type="text" placeholder="Entrer nom ..." autofocus name="nom">
                            </div>
                            <div class="col-md-6 p-4">
                                <label class="col-12">Prénom :</label>
                                <input type="text " class="inClass col-12" placeholder="Entrer prénom ..." name="prénom">
                            </div>
                            <div class="col-lg-12 p-4">
                                <label class="col-12">Numéro de carte :</label>
                                <input type="tel" class="inClass col-12" placeholder="" name="carte-credit">
                            </div>
                            <div class="col-lg-6 p-4">
                                <label class="col-12">Date d'expiration :</label>
                                <input  type="month" value="2018-11" id="mois-année" class="inClass col-12" name="carte-expiration">
                                
                            </div>
                            <div class="col-lg-6 p-4">
                                <label class="col-12">Cryptogramme CVV:</label>
                                <input type="tel" class="inClass col-12" name="cryptogramme cvv">
                            </div>
                            
                            <div class="col-12 mx-auto m-4 mb-5">
                                <div class="row">
                                    <div class="col-6 text-center my-2">
                                        <button class="bg-sub">Enregistrer</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

<?php include('../header-footer/footer.html'); ?>
