<?php include('../header-footer/head.html'); ?>

<?php include('../header-footer/header.html'); ?>

<!-- Contenu de la page -->
<section class="contenu">
    <div class="col-12">
        <div>
            <h1 class="text-center m-4">Praticien&nbsp;? Inscrivez-vous&nbsp;!</h1>
        </div>
    </div>
    <!-- 1 : Configuration du profil medecin -->
    <div class="container">

        <div class="mx-auto p-4 profil-img mx-auto justify-content-center align-items-center col-12">
            <div class="justify-content-center align-items-center">
                <img src="../src/img/logo.png" alt="logo doctoask">
            </div>
        </div>

        <form action="" method="POST">
            <div class="justify-content-center">
                <div class="col-lg-12  mx-auto">
                    <div class="row">
                        <div class="row inscription">
                            <div class="col-md-12 font-italic mt-3 text-center requis">
                                Les champs marqués de * sont requis.
                            </div>
                            <div class="col-md-6 ml-2 mt-5">
                                    <input type="radio" name="genre" value="male" checked><span> Monsieur</span>
                                    <input type="radio" name="genre" value="female"><span> Madame</span>
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Nom-->
                                <label class="col-12">Nom&nbsp;:</label>
                                <input type="text" name="nom" placeholder="Votre nom*" required autofocus class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Prénom-->
                                <label class="col-12">Prénom&nbsp;:</label>
                                <input type="text" name="prenom" placeholder="Votre prénom*" required class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Spécialité-->
                                <label class="col-12">Spécialité&nbsp;:</label>
                                <input type="text" name="specialite" placeholder="Spécialité excercée*" required class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Email-->
                                <label class="col-12">Adresse e-mail&nbsp;:</label>
                                <input type="email" name="email" placeholder="Votre e-mail*" required  class="inClass col-12">
                            </div>
                        </div>
                        <div class="row cabinet">
                            <div class="container mt-4">
                                <h2 class="text-center">Adresse du cabinet</h2>
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Cabinet - rue-->
                                <label class="col-12">Rue&nbsp;:</label>
                                <input type="text" name="rue" placeholder="Rue*" required class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Cabinet - ville -->
                                <label class="col-12">Ville&nbsp;:</label>
                                <input type="text" name="ville" placeholder="Ville*" required class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Cabinet - code postal-->
                                <label class="col-12">Code postal&nbsp;:</label>
                                <input type="text" name="codepostal" placeholder="Code postal*" required class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Cabinet - pays-->
                                <label class="col-12">Pays&nbsp;:</label>
                                <input type="email" name="pays" placeholder="Pays*" required  class="inClass col-12">
                            </div>
                        </div> 
                        <div class="row inscription">
                            <div class="container mt-4">
                                <h2 class="text-center">Informations complémentaires</h2>
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Téléphone-->
                                <label class="col-12">Téléphone&nbsp;:</label>
                                <input type="text" name="telephone" placeholder="Numéro de téléphone*" required class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Fax-->
                                <label class="col-12">Fax&nbsp;:</label>
                                <input type="text" name="fax" placeholder="Fax" class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Site web-->
                                <label class="col-12">Site web&nbsp;:</label>
                                <input type="text" name="siteweb" placeholder="Site web" class="inClass col-12">
                            </div>
                            <div class="col-md-6 p-4">
                                <!----Lien doctolib-->
                                <label class="col-12">Lien Doctolib&nbsp;:</label>
                                <input type="email" name="doctolib" placeholder="Lien Doctolib"  class="inClass col-12">
                            </div>
                        </div>
                        <div class="col-10 mx-auto m-4 mb-5">
                            <div class="row">
                                <div class="col mb-3 ml-3">
                                    <input type="checkbox" class="mt-1 mr-2" required><span>J'ai lu et j'accepte les <a href="../CGU/index.php" target="_blank">conditions générales d'utilisation*</a></span><br>
                                    <input type="checkbox" class="mt-1 mr-2" checked required><span>J'accepte de recevoir la newsletter de <a href="../accueil/index.php" target="_blank">DoctoAsk</a></span>
                                </div>
                                <div class="col-md-6 text-center mt-2 mb-4">
                                    <button type="submit" title="S'inscrire" class="btn bg-sub primary-btn col-8">Suivant</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


<script src="js/classie.js"></script>
</section>
<!-- FOOTER -->

<?php include('../header-footer/footer.html'); ?>