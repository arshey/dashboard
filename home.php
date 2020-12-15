<?php $page = 'home'; include('inc/header.php'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">MIAIE - EMPLOIE</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <a href="pages/emploi/">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-suitcase"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Offres D'emplois</span>
                <span class="info-box-number">
                  4
                </span>
              </div>
            </div>
          </a>
        </div>       
        <div class="col-12 col-sm-6 col-md-3">
          <a href="pages/emploi/jobconsulted.php">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Emplois consultés</span>
                <span class="info-box-number">4</span>
              </div>
            </div>
          </a>
        </div>
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
          <a href="pages/users/">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Nombre d'inscrits</span>
                <span class="info-box-number">23</span>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-12 col-sm-6 col-md-3">
          <a href="pages/mailbox/">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-comments"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Messages</span>
              <span class="info-box-number">1</span>
            </div>
          </div>
        </div>
        </a>
      </div>
      

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Récapitulatif des visites sur les 6 derniers mois</h5>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>1 Juin 2020 - 30 Décembre 2020</strong>
                  </p>
                  <div class="chart">
                    <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
        
      <div class="row"> 
        <div class="col-12">  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Derniers membres inscrits</h3>
              <div class="card-tools">
                <span class="badge badge-danger">1 Nouveau Membre</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body p-0">
              <ul class="users-list clearfix">
                <li>
                  <img src="dist/img/cp1.png" alt="User Image" width="100px">
                  <a class="users-list-name" href="#">Die Micael</a>
                  <span class="users-list-date">13 Jan</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Connection par Continent</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="200"></canvas>
                  </div>
                </div>
                <div  class="col-8">
                    <div class="card-footer bg-white p-0">
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                          <a href="#" class="nav-link text-danger">
                            Afrique
                            <span class="float-right text-danger">
                              22 <i class="fa fa-users"></i> </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-success">
                            Europe
                            <span class="float-right text-success">
                              25 <i class="fa fa-users"></i> </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-warning">
                            Asie
                            <span class="float-right text-warning">
                              18 <i class="fa fa-users"></i> </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-info">
                            Amérique
                            <span class="float-right text-info">
                              23 <i class="fa fa-users"></i> </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-primary">
                            Antartique
                            <span class="float-right text-primary">
                              8 <i class="fa fa-users"></i> </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link text-secondary">
                            Océanie
                            <span class="float-right text-secondary">
                              6 <i class="fa fa-users"></i> </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>
      
    </div>
  </section>
</div>

<?php
include('inc/footer.php');
?>
