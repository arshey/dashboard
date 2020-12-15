<?php $page = 'user';
include('../inc/header.php'); ?>

<div class="content-wrapper" style="background-color: #dfe6e9;">
  <section class="content-header">
    <div class="container-flui">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="text-center">Envoie de Message à Micaël DIE </h1>
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
                    <div class="mb-3">
                      <textarea class="textarea form-control" style="width: 100%; height: 200px;"></textarea>
                    </div>
                  </div>

                  <div class="modal-footer justify-content-between">
                    <input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Envoyer Message">
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
