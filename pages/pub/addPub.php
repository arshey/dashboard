<?php $page = 'pub';
include('../inc/header.php'); ?>

<div class="content-wrapper" style="background-color: #dfe6e9;">
  <section class="content-header">
    <div class="container-flui">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-center">Enregistrement d'Affiche Publicitaire </h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card shadow-lg mb-5">

            <div class="card-header">
              <a href="index.php" class="btn btn-secondary ml-2">
                <i class="fa fa-chevron-left pr-2" aria-hidden="true"></i> Abandonner
              </a>
            </div>

            <form method="POST" enctype="multipart/form-data">
              <div class="card-body table-responsive p-0">

                <div class="card-body">

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Nom de l'affiche</span>
                    </div>
                    <input type="text" name="nom" class="form-control" placeholder="Affiche de canal+">
                  </div>


                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" >Image</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="logo">
                      <label class="custom-file-label" for="logo">Téléchargez l'image en question</label>
                    </div>
                  </div>

                  <div class="modal-footer justify-content-between">
                    <input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Enregistrer l'image">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<?php

include('../inc/footer.php');

?>
