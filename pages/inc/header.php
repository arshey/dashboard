<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>MIAIE-EMPLOIE</title>

  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav">
        <li class="nav-item w-50">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <!-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form> -->

    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="home.php" class="brand-link text-center">
        <span class="brand-text font-weight-light">Administrateur</span>
      </a>
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/vince.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="" class="d-block">Vincent Férié</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
              <a href="../../home.php" class="nav-link <?= ($page === "home") ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Tableau de Bord
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../emploi/" class="nav-link <?= ($page === "emploi") ? 'active' : '' ?>">
                <i class="nav-icon fas fa-suitcase"></i>
                <p>
                  Emplois
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../users/" class="nav-link <?= ($page === "user") ? 'active' : '' ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Inscrits
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../companies/" class="nav-link <?= ($page === "companies") ? 'active' : '' ?>">
                <i class="nav-icon fa fa-building"></i>
                <p>
                  Entreprises
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../pub/" class="nav-link <?= ($page === "pub") ? 'active' : '' ?>">
                <i class="nav-icon fa fa fa-film"></i>
                <p>
                  Gestion de Pubs
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../admin/" class="nav-link <?= ($page === "admin") ? 'active' : '' ?>">
                <i class="nav-icon fa fa-lock"></i>
                <p>
                  Administrateurs
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../mailbox/" class="nav-link <?= ($page === "message") ? 'active' : '' ?>">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Messagerie
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../../" class="nav-link" onclick="return confirm('Voulez vous vraiment vous déconnectez ?')">
                <i class="nav-icon fas fa-user-times" aria-hidden="true"></i>
                <p>
                  Déconnexion
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
