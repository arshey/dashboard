<?php
$page = 'message';
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
                    <th>Nom & Prenoms</th>
                    <th>mail</th>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>1</td>
                    <td>Remy de la Fosse</td>
                    <td>remy@gmail.com</td>
                    <td>Demande d'informations</td>
                    <td>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Ouvrir le Message
                      </button>
                    </td>
                    <td>
                      <a href="sendMessage.php" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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
                  <h4 class="modal-title">Message de Remy de la Fosse</h4>
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
