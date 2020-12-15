<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b class=" text-warning">Administration</b> <br> Outil de la Valorisation des Ivoiriens de
        l'Extérieur </a>
    </div>
    
    <div class="card text-center">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Connectez-vous</p>

        <img src="dist/img/elephant.png" alt="" width="50%">

        <form action="home.php" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="mail" placeholder="Votre mail" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-12 text-center">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Se souvenir de moi
                </label>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-12 text-center">
              <button type="submit" name="submit" class="btn btn-warning btn-block">Connexion</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>
