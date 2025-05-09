<?php
require(__DIR__ . '/../src/bdd/Bdd.php');

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RedAeroport - Inscription </title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<body id="page-top" style="background-image:url('../assets/img/img.png'); ">
<?php
require_once 'PopUp.php';
if(isset($_GET['parametre'])){
    if($_GET['parametre']=="mdp"){
        $pop = new PopUp();
        $pop->showPopup("Les mots de passes ne correspondent pas");
    }
    else if($_GET['parametre']=="champsVides"){
        $pop = new PopUp();
        $pop->showPopup("Veuillez remplir tout les champs");
    }    else if($_GET['parametre']=="doublon"){
        $pop = new PopUp();
        $pop->showPopup("Email déjà existant");
    }
}

?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">RedAeroport - Accueil </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">

                <form action="../src/traitement/gestionInscription.php" method="post">
                    <div class="titreInscription">
                        <h3><u style="font-family: 'Helvetica Neue'"><strong>INSCRIPTION</strong></u></h3>
                    </div>

                    <div class="input-group mb-3" style="margin-top: 10px;">
                        <span class="input-group-text">👤</span>
                        <div class="form-floating">
                            <input name="nom" type="text" class="form-control rounded-email" id="floatingInputGroup1" placeholder="Nom">
                            <label for="floatingInputGroup1">Nom</label>
                        </div>
                    </div>

                    <div class="input-group mb-3" style="margin-top: 10px;">
                        <span class="input-group-text">👤</span>
                        <div class="form-floating">
                            <input name="prenom" type="text" class="form-control" id="floatingInputGroup2" placeholder="Prenom" style="width: 100%;" size="30">
                            <label for="floatingInputGroup1">Prénom</label>
                        </div>
                    </div>

                    <div class="input-group mb-3" style="margin-top: 10px;">
                        <span class="input-group-text">📧</span>
                        <div class="form-floating">
                            <input name="email" type="text" class="form-control" id="floatingInputGroup2" placeholder="Email" style="width: 100%;" size="30">
                            <label for="floatingInputGroup1">E-mail</label>
                        </div>
                    </div>
                    <div class="input-group mb-3" style="margin-top: 10px;">
                        <span class="input-group-text">🔒</span>
                        <div class="form-floating">
                            <input name="mdp" type="password" class="form-control" id="floatingInputGroup2" placeholder="Mot de passe" style="width: 100%;" size="30">
                            <label for="floatingInputGroup1">Mot de passe</label>
                        </div>
                    </div>
                    <div class="input-group mb-3" style="margin-top: 10px;">
                        <span class="input-group-text">🔒</span>
                        <div class="form-floating">
                            <input name="mdpC" type="password" class="form-control" id="floatingInputGroup2" placeholder="Mot de passe" style="width: 100%;" size="30">
                            <label for="floatingInputGroup1">Confirmation mot de passe</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" style="margin-top: 10px;"" type="submit">S'Inscrire</button>
                    </div>
                </form>
                <div class="lienConnexion" style="margin-top: 10px;">
                    Vous avez déjà un compte ? Je souhaite <a href="connexion.php" class="header-button">Me connecter</a> !
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<!-- Projects-->
<!-- Signup-->

<!-- Contact-->
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5"></div></footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>