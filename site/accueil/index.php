<?php include('../header-footer/head.html'); ?>

<?php include('../header-footer/header.html'); ?>

<section class="contenu">
      <!-- Page d'accueil  -->
      <div class="first">
        <div class="container">
          <div class="row">
            <!-- Image mascotte -->
            <div class="col-6 col-md-4 mx-auto">
              <img src="../src/img/personnage-femme.png" alt="mascotte doctoask">
            </div>
          </div>
          <div class="row">
            <div class="col-10 mx-auto">
              <h1 class="accroche mx-auto">Bonjour, Comment puis-je vous aider&nbsp;?</h1>
            </div>
          </div>
          <!-- Barre de recherche -->
          <div class="row">
            <div class="input-group mb-3 search col-8 mx-auto">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Rechercher un medecin" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
          <!-- Boutons -->
          <div class="row justify-content-center">
              <div class="col-7 col-lg-3 d-flex">
                  <a href="../annuaire/index.php" class="btn bg-sub-light m-2 mx-auto">
                    Annuaire médical
                  </a>
              </div>
              <div class="col-8 col-lg-3 d-flex">
                  <a href="../connexion/index.php" class="btn bg-sub-light m-2 mx-auto">
                    Êtes-vous praticien ?
                  </a>
              </div>
          </div>
          <div class="row">
              <p class="col-12 text-center">Hey, par ici !</p>
              <i class="fas fa-angle-down fa-3x bounce arrow mx-auto"></i>
          </div>
        </div>
      </div>
      <!-- Didactitiel -->
      <div class="dictaticiel">
        <div class="container">
          <div class="row">
            <div class="col-4 mx-auto">
              <img src="../src/img/loader.gif" alt="mascotte doctoask">
            </div>
          </div>

          <div class="row">
            <button type="button" class="btn bg-sub-light mx-auto">
              Accéder à mon dictaticiel
            </button>
          </div>
        </div>
      </div>

      <div class="guide mb-5">
        <div class="container-fluid">
          <!-- Notre mission -->
          <div class="row">
            <div class="col-12 col-md-6 pl-4 pr-4">
              <h1 class="mx-4 mb-0">Notre mission<br><span>DoctoAsk, l'assistant de votre médecin, afin d'obtenir des renseignement en quelques clics !</span></h1>
              <p class="mx-4">
                DoctoAsk permet aux médecins de fournir des réponses simples aux questions les plus courantes de leurs patients, tout en restant concentrés sur les tâches les plus importantes de leur travail quotidien. Plus besoin de devoir rechercher sur internet ou d’appeler son cabinet pour obtenir des informations sur votre médecin, grâce à DoctoAsk, vous obtiendrez rapidement vos réponses !
              </p>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
              <img src="../src/img/bg-accueil/background-para.jpg" alt="">
            </div>
          </div>
          <!-- Trouver votre médecin -->
          <div class="row">
            <div class="col-12 col-md-6 ">
              <h1 class="mx-4 mb-0">Trouver votre médecin en quelques clics.<br><span>À votre disposition 24/7</span></h1>
              <p class="mx-4">
                Votre médecin est déjà sur l’application ? Consultez l’annuaire ou saisissez son nom dans la barre de recherche afin d’acceder à son chatbot, vous pourrez ainsi lui poser vos questions.
                Toutes les réponses sont certifiées par votre practicien, il n’existe pas de source plus sûre !
                Si celui-ci n’est pas encore sur l’application, invitez le à nous découvrir grâce à son adresse mail.
              </p>
              <div class="">
                <button type="button" class="btn bg-sub mt-4">
                  Explorer l'annuaire médicale
                </button>
              </div>

            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
              <img src="../src/img/bg-accueil/bg-trouver.jpeg" alt="">
            </div>
          </div>
          <!-- Agissez -->
          <div class="row">
            <div class="col-12 col-md-6 ">
              <h1 class="mx-4 mb-0">Agissez en tant que membre DoctoAsk<br><span>Et facilitez-vous la vie</span></h1>
              <p class="mx-4">
                Grâce à nous, vous ne perdrez plus de temps à répondre toujours là même chose aux même questions.
  Notre application vous permettra de saisir ces questions ainsi que leur réponse pour que vos patients trouvent facilement l’information souhaitée, sans vous déranger pendant vos heures de travail.
              </p>
              <div class="">
                <button type="button" class="btn bg-sub mt-4">
                  En savoir plus
                </button>
              </div>

            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
              <img src="../src/img/bg-accueil/bg-agire.jpg" alt="">
            </div>
          </div>

        </div>
      </div>


    </section>

<?php include('../header-footer/footer.html'); ?>
