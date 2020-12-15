<?php
$page = 'emploi';
include('../inc/header.php');
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>LISTE DES EMPLOIS </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listes des emplois
                <a href="addJob.php" type="button" class="btn btn-primary ml-2"> <i class="fas fa-plus pr-2"></i>
                  Ajouter un emploi</a></h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Recherche">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th>ID</th>
                    <th>Titre de l'emploi</th>
                    <th>Type</th>
                    <th>Date <br> d'ouverture</th>
                    <th>Date de <br> fermeture</th>
                    <th>Etat</th>
                    <th>Libellé</th>
                    <th>l'émetteur</th>
                    <th>Secteur d'activité</th>
                    <th>Catégorie</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>1</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>CDD</td>
                    <td>11-7-2020</td>
                    <td>11-7-2020</td>
                    <td><span class="badge badge-success">Publié</span></td>
                    <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Ouvrir le libellé
                      </button>
                    </td>
                    <td>
                      Onu
                    </td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem ipsum dolor</td>
                    <td>
                      <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>CDD</td>
                    <td>11-7-2020</td>
                    <td>11-7-2020</td>
                    <td><span class="badge badge-warning">fin bientôt</span></td>
                    <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Ouvrir le libellé
                      </button>
                    </td>
                    <td>
                      DGIA
                    </td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem ipsum dolor</td>
                    <td>
                      <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>CDI</td>
                    <td>11-7-2020</td>
                    <td>11-7-2020</td>
                    <td><span class="badge badge-danger">Retiré</span></td>
                    <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Ouvrir le libellé
                      </button>
                    </td>
                    <td>
                      BNETD
                    </td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem ipsum dolor</td>
                    <td>
                      <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>CDI</td>
                    <td>11-7-2020</td>
                    <td>11-7-2020</td>
                    <td><span class="badge badge-success">Publié</span></td>
                    <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Ouvrir le libellé
                      </button>
                    </td>
                    <td>
                      Emploi Jeune
                    </td>
                    <td>Lorem, ipsum.</td>
                    <td>Lorem ipsum dolor</td>
                    <td>
                      <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Libellé de l'emploi N°...</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe qui dolore sequi accusamus porro
                    rerum provident, aspernatur debitis doloremque quasi ipsa sapiente suscipit modi natus aliquid
                    maxime ea similique laborum!
                    Voluptas ea dolorem debitis possimus sequi quis corrupti expedita repudiandae nesciunt optio
                    doloribus architecto ipsum odio unde dignissimos voluptatibus commodi, quidem repellendus fugit
                    nam animi tempora, veniam, voluptate tenetur! Perferendis!
                    Cupiditate amet qui illum omnis eaque neque beatae praesentium vitae ullam optio dolorum soluta
                    mollitia magni, porro non doloremque voluptate consequatur sapiente rem? Nesciunt dignissimos
                    tenetur sapiente magnam perspiciatis numquam.
                  </p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include('../inc/footer.php'); ?>
