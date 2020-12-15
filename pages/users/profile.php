<?php 
$page = 'user';
include('../inc/header.php');
?>


<div class="content-wrapper">
  <section class="content-header" style="margin-bottom:2%">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil de Micaël DIE</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

          <div class="card card-primary card-outline shadow-lg">
            <div class="card-body box-profile">

              <div class="text-center">
                <img class="rounded-circle" src="../../dist/img/cp1.png" alt="User profile picture" width="20%" style="margin-top:-10%">
              </div>

              <h1 class="text-center">Micaël Die</h1>

              <h2 class="text-muted text-center">Software Engineer</h2>

              <br>

              <div class="card card-primary">

                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                    B.S. in Computer Science
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Pays</strong>

                  <p class="text-muted">Canada, Toronto</p>

                  <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> Catégorie</strong>

                  <p class="text-muted">Computer science</p>

                  <hr>

                  <strong><i class="fa fa-phone mr-1"></i> Télephone</strong>

                  <p class="text-muted">+ 1 234567890</p>

                  <hr>

                  <strong><i class="fas fa-user mr-1"></i> Genre</strong>

                  <p class="text-muted">Féminin</p>

                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i> Expériences professionnel</strong>

                  <p class="text-muted">6 ans</p>

                  <hr>

                  <strong><i class="fa fa-birthday-cake mr-1"></i> Date de naissance</strong>

                  <p class="text-muted">8 mai 1982</p>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
  </section>
</div>
<?php
include('../inc/footer.php');
?>