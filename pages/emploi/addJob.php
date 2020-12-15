<?php $page = 'emploi'; include('../inc/header.php'); ?>

<div class="content-wrapper" style="background-color: #dfe6e9;">
  <section class="content-header">
    <div class="container-flui">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-center">AJOUT D'UN NOUVEL EMPLOI </h1>
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
                  <div class="form-group">
                    <label for="inputName">Titre de l'emploi</label>
                    <input type="text" id="inputName" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Nombre de Poste(s)</label>
                    <input type="number" name="nbre" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Description du poste</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Le contenu ici" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Type de contrat</label>
                    <select class="form-control" name="" id="">
                      <option>C.D.I</option>
                      <option>C.D.D</option>
                      <option>Stage</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Date de début</label>
                    <input type="date" name="debut" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Date de fin</label>
                    <input type="date" name="fin" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Catégories</label>
                    <select class="form-control" name="categorie" style="width: 100%;">
                      <option disabled="" selected="" value=""> choisir le domaine de compétence </option>
                      <option value="Administration">Administration</option>
                      <option value="Agriculture">Agriculture</option>
                      <option value="Agriculture/Elevage/Peche"> Agriculture/Elevage/Peche</option>
                      <option value="Agroalimentaire">Agroalimentaire</option>
                      <option value="Agropastoral">Agropastoral</option>
                      <option value="Architecture-Design">Architecture-Design </option>
                      <option value="Art-Culture-Loisirs">Art-Culture-Loisirs</option>
                      <option value="Audiovisuel-Multimedia">Audiovisuel-Multimedia</option>
                      <option value="Automobile">Automobile</option>
                      <option value="Autre">Autre</option>
                      <option value="Banque-Assurance">Banque-Assurance</option>
                      <option value="Biens de consommation">Biens de consommation</option>
                      <option value="BTP (Batment Travaux Publics)">BTP (Batment Travaux Publics)</option>
                      <option value="BTP-Construction">BTP-Construction</option>
                      <option value="Commerce">Commerce</option>
                      <option value="Communication/Telecommunication">Communication/Telecommunication</option>
                      <option value="Edition Imprimerie">Edition Imprimerie</option>
                      <option value="Education">Education</option>
                      <option value="Elevage">Elevage</option>
                      <option value="Energie-Eau">Energie-Eau</option>
                      <option value="Enseignement-Formation">Enseignement-Formation</option>
                      <option value="Finance/Economie/Statist.Assur./Banque">Finance/Economie/Statist.Assur./Banque </option>
                      <option value="Grande Distribution">Grande Distribution</option>
                      <option value="41">Hotellerie-Restauration</option>
                      <option value="8">Hotellerie/Restauration</option>
                      <option value="27">Industrie</option>
                      <option value="11">Industrie /Materiaux Souples et Associes/Mines</option>
                      <option value="13">Industrie du Bois</option>
                      <option value="9">Industrie/Chimie/Agro./Energie</option>
                      <option value="10">Industrie/Electricite/Electronique/Electromecanique/Maintenance</option>
                      <option value="12">Industrie/Mecanique/Metallurgique</option>
                      <option value="Informatique">Informatique</option>
                      <option value="Loisirs/Spectavles/Métiers d'Art">Loisirs/Spectacles/Metiers d'Art</option>
                      <option value="16">Medical</option>
                      <option value="29">NTIC</option>
                      <option value="21">Sans secteur</option>
                      <option value="42">Sante</option>
                      <option value="17">Services</option>
                      <option value="28">Services</option>
                      <option value="43">Sport</option>
                      <option value="44">Tourisme</option>
                      <option value="45">Transport</option>
                      <option value="18">Transport/Approvisionnement/Logistique</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="inputProjectLeader">Expérience</label>
                    <input type="number" class="form-control" name="expr">
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control">
                      <option selected disabled>Choisir le statut</option>
                      <option value="A distance">A distance</option>
                      <option value="mis temps">Mis temps</option>
                      <option value="plein temps">Plein temps</option>
                      <option value="interim">Intérim</option>
                    </select>
                  </div>

                  <div class="form-group">
                     <label>Entreprise</label>
                    <select class="form-control">
                      <option disabled="" selected="" value="allCountries">Entreprise</option>
                      <option value="CEDEAO">CEDEAO</option>
                      <option value="UEMOA">UEMOA</option>
                      <option value="Cours de Justice">Cours de Justice</option>
                    </select>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" >Fichiers</span>
                    </div>
                      
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="logo">
                      <label class="custom-file-label" for="logo">Joindre des fichiers à l'emploi pour le téléchargement</label>
                    </div>
                  </div>

                  <div class="modal-footer justify-content-between">
                    <input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Enregistrer l'emploi">
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
