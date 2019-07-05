<?php include('../header-footer/head.html'); ?>

<?php include('../header-footer/header.html'); ?>

<!-- Contenu de la page -->
<section class="contenu">
    <div class="col-12">
        <div>
            <h1 class="text-center m-4">Connectez-vous !</h1>
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
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 p-4">
                            <!----Email-->
                            <label class="col-12">Identifiant :</label>
                            <input type="email" name="email" placeholder="E-mail" required autofocus class="inClass col-12">
                        </div>
                        <div class="col-md-6 p-4">
                            <!----Mot de passe-->
                            <label class="col-12">Mot de passe :</label>
                            <input type="password" class="inClass col-12" placeholder="Mot de passe">
                            <span class="float-right mt-1">
                                <a href="forgotpwd.php">Mot de passe oublié ?</a>
                            </span>
                            
                        </div>
                        <div class="col-12 mx-auto m-4 mb-5">
                            <div class="row">
                                <div class="col-md-6 text-center my-2">
                                    <a href="../config_chatbot/index.php">
                                    <button type="submit" class="bg-sub col-8">Se connecter</button>
                                    </a>
                                </div>
                                <div class="col-md-6 text-center my-2">
                                    <a href="../inscription/index.php" class="btn bg-sub primary-btn col-8">
                                        <p class="pt-2" title="S'inscrire">S'inscrire</p>
                                    </a>
                                </div>
                                <div class="col stay-connected">
                                    <input type="checkbox" class="mt-1 mr-2"><span>Rester connecté</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



</section>
<!-- FOOTER -->

<?php include('../header-footer/footer.html'); ?>