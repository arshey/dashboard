<?php
$page = 'pub';
include('../inc/header.php');
?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>LISTE DES MESSAGES REÇUS</h1>
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
              <h3 class="card-title">
                  <a href="addPub.php" class="btn btn-primary"><i class="fa fa-plus mr-1"></i> Ajouter une nouvelle affiche</a>
              </h3>

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
                    <th>Nom</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>1</td>
                    <td>Remy de la Fosse</td>
                    <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Afficher l'image
                      </button>
                    </td>
                    <td>
                      <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                  <h4 class="modal-title">Affiche publicitaire de canal plus</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>
                    <img src="../../dist/img/CanalPlus.jpg" width="100%">
                  </p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include('../inc/footer.php'); ?>
