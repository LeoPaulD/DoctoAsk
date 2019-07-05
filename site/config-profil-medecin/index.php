<?php include('../header-footer/head.html'); ?>

<?php include('../header-footer/header.html'); ?>

<!-- Contenu de la page -->
<div class="contenu">
    <div class="col-12">
        <div>
            <h1 class="text-center m-4">Edition : Mes informations</h1>
        </div>
    </div>
    <!-- 1 : Configuration du profil medecin -->
    <div class="container  my-5">

        <div class="col-10 mx-auto pt-5 pb-5">

            <div class=" mx-auto p-4 profil-img mx-auto justify-content-center align-items-end" style="background-image : url(img/drAsk.jpg)">

                <div class="justify-content-center align-items-center">
                    <img src="img/photo-camera.png" alt="modifier image">
                </div>
            </div>
        </div>

        <form action="" method="POST">
            <div class="justify-content-center">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 p-4">
                            <label class="col-12">Nom :</label>
                            <input class="inClass col-lg-12" type="text" placeholder="Votre nom...">
                        </div>
                        <div class="col-md-6 p-4">
                            <label class="col-12">Prénom :</label>
                            <input type="text" class="inClass col-12" placeholder="Votre prénom...">
                        </div>
                        <div class="col-lg-6 p-4">
                            <label class="col-12">Titre :</label>
                            <input type="text" class="inClass col-12" placeholder="Nom du chatbot...">
                        </div>
                        <div class="col-lg-6 p-4">
                            <label class="col-12">Spécialité :</label>
                            <input type="text" class="inClass col-12" placeholder="Spécialité excercée...">
                        </div>
                        <div class="col-12 p-4">
                            <label for="horaires" class="col-12">Horaires :</label>
                            <textarea name="horaires" class="inClass col-12" id="" cols="30" placeholder="Ex: Votre médecin est ouvert du lundi au vendredi de 9 h à 20 h et le samedi de 10 h à 14h ..."
                                rows="4"></textarea>
                        </div>
                        <div class="col-lg-6 p-4">
                            <label class="col-12">Rue :</label>
                            <input class="inClass col-lg-12" type="text" placeholder="Rue...">
                        </div>
                        <div class="col-md-6 p-4">
                            <label class="col-12">Ville</label>
                            <input type="text" class="inClass col-12" placeholder="Ville...">
                        </div>
                        <div class="col-md-6 p-4">
                            <label class="col-12">Code Postal :</label>
                            <input type="text" class="inClass col-12" placeholder="Code Postal...">
                        </div>
                        <div class="col-lg-6 p-4">
                            <label class="col-12">Pays :</label>
                            <input type="text" class="inClass col-12" placeholder="Pays...">
                        </div>
                        <div class="col-12 p-4">
                            <h3 class="text-center">Présentation du médecin et de son cabinet</h3>
                        </div>

                        <div class="col-12 p-4">
                            <label for="description" class="col-12">Description :</label>
                            <textarea name="description" class="inClass col-12" id="" cols="30" rows="7" placeholder="Ex : Le Docteur Ask vous accueille dans son cabinet à Bordeaux.Elle reçoit les enfants et les adultes pour tous types de soins médicaux généraux (consultation, contrôle annuel, vaccination, bilan de santé).
La praticienne assure le suivi et la vaccination des nourrissons et des enfants. Elle offre également un accompagnement et des conseils en allaitement maternel.
Enfin, elle propose un suivi gynécologique de base avec la prescription de moyens de contraception et la réalisation de frottis ...."></textarea>
                        </div>
                        <div class="col-12 p-4">
                            <h3 class="text-center">Modalités de paiements</h3>
                        </div>
                        <div class="col-md-6 p-4">
                            <label class="col-12">Tarifs consultations en € :</label>
                            <input type="number" class="inClass col-12" value="25">
                        </div>
                        <div class="col-md-6 p-4">
                            <label class="col-12 " for="secteur">Secteur :</label>
                            <select class="custom-select col-12 inClass" id="secteur">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-md-6 p-4">
                            <label class=" col-12" for="carte_vitale">Carte vitale accepté :</label>
                            <select class="custom-select col-12 inClass" id="carte_vitale">
                                <option value="1">Oui</option>
                                <option value="2">NOn</option>
                            </select>
                        </div>

                        <div class="col-12 p-4">
                            <h5 class="">Présentation du médecin et de son cabinet</h5>
                        </div>
                        <div class="col-md-6 p-4">
                            <label class=" col-12" for="carte_vitale">Carte banquaire :</label>
                            <select class="custom-select col-12 inClass" id="carte_vitale">

                                <option value="1">Oui</option>
                                <option value="2">NOn</option>

                            </select>
                        </div>
                        <div class="col-md-6 p-4">
                            <label class=" col-12" for="carte_vitale">Chèque :</label>
                            <select class="custom-select col-12 inClass" id="carte_vitale">

                                <option value="1">Oui</option>
                                <option value="2">NOn</option>

                            </select>
                        </div>
                        <div class="col-md-6 p-4">
                            <label class=" col-12" for="carte_vitale">Espèce :</label>
                            <select class="custom-select col-12 inClass" id="carte_vitale">

                                <option value="1">Oui</option>
                                <option value="2">NOn</option>

                            </select>
                        </div>
                        <div class="col-12 p-4">
                            <h3 class="text-center">Pour aller plus loin</h3>
                        </div>
                        <div class="col-12 p-4">
                            <label class="col-12">Votre site web :</label>
                            <input type="url" class="inClass col-12" placeholder="Ex : http://www.doctoask.com/ ... ">
                        </div>
                        <div class="col-12 p-4">
                            <label class="col-12">Votre page doctolib :</label>
                            <input type="url" class="inClass col-12" placeholder="Ex : http://www.doctolib.fr/medecin-generaliste/DrAsk ... ">
                        </div>
                        <div class="col-12 mx-auto m-4 mb-5  ">
                            <div class="row  ">
                                <div class="col-md-6 mx-auto text-center my-2">
                                    <button type="submit" class="bg-sub col-8">Enregistrer</button>
                                </div>
                                <div class="col-md-6 mx-auto text-center my-2">
                                    <a href="../offres/index.php ">
                                        <button class="bg-sub col-8 mx-auto">Modifier mon offre</button>
                                    </a>
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