<?php
$page = 'admin';
include('../inc/header.php');
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Liste des administrateurs et éditeurs</h1>
           
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Liste des administrateurs et éditeurs</h3>
        <a href="register.php" type="button" class="btn btn-primary ml-2"> <i class="fas fa-plus pr-2"></i>
                  Ajouter un Utilisateur</a></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead class="text-center">
            <tr>
              <th>
                #
              </th>
              <th>
                Nom & Prénoms
              </th>
              <th>
                Administrateurs
              </th>
              <th>
                Statut
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td>
                #
              </td>

              <td>
                Vincent Férié
              </td>
              <td>
                <img alt="Avatar" class="table-avatar" src="../../dist/img/vince.jpg">
              </td>
              <td class="project-state">
                <span class="badge badge-success">Super Administrateur</span>
              </td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-pencil-alt">
                  </i>Modifier
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash">
                  </i>Supprimer
                </a>
              </td>
            </tr>


            <tr>
              <td>
                #
              </td>

              <td>
                Thierry Yao
              </td>
              <td>
                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
              </td>
              <td class="project-state">
                <span class="badge badge-info">Administrateur</span>
              </td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-pencil-alt">
                  </i>Modifier
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash">
                  </i>Supprimer
                </a>
              </td>
            </tr>
            <tr>
              <td>
                #
              </td>

              <td>
                Florian Honienka
              </td>
              <td>
                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
              </td>
              <td class="project-state">
                <span class="badge badge-warning">Editeur</span>
              </td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-pencil-alt">
                  </i>Modifier
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash">
                  </i>Supprimer
                </a>
              </td>
            </tr>
           </tbody>
        </table>
      </div>
    </div>
  </section>
</div>


<?php

include('../inc/header.php');

?>
