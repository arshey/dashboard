<?php $page = 'companies';
include('../inc/header.php'); ?>

<div class="content-wrapper" style="background-color: #dfe6e9;">
  <section class="content-header">
    <div class="container-flui">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-center">AJOUT D'UNE NOUVELLE ENTREPRISE </h1>
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
                      <span class="input-group-text" id="">Nom</span>
                    </div>
                    <input type="text" name="entreprise" class="form-control" placeholder="Ministère de l'Intégration Africaine et des Ivoiriens de l'Extérieur">
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Localisation</span>
                    </div>
                    <input type="text" name="map" class="form-control" placeholder="Yamoussoukro - Côte d'Ivoire">
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Telephone</span>
                    </div>
                    <input type="tel" name="tel" class="form-control" placeholder="+ 1 23 45 67 89 00">
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">E-mail</span>
                    </div>
                    <input type="mail" name="mail" class="form-control" placeholder="email@exemple.com" aria-label="email">
                  </div>

                  <div class="form-group">
                    <label>Description de l'Entreprise</label>
                    <div class="mb-3">
                      <textarea class="textarea form-control" style="width: 100%; height: 200px;"></textarea>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="secteur">Secteur</label>
                    </div>
                    <select class="custom-select" id="secteur">
                      <option selected disabled>Choisir le statut</option>
                      <option value="prive">Privé</option>
                      <option value="public">Public</option>
                      <option value="international">International</option>
                    </select>
                  </div>


                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" >Logo</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="logo">
                      <label class="custom-file-label" for="logo">Choississez le logo de l'Entreprise</label>
                    </div>
                  </div>

                  <div class="modal-footer justify-content-between">
                    <input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Enregistrer l'entreprise">
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
