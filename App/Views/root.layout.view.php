<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="js/myScript.js"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="?c=home"><img src="img/logo.jpg" alt="Logo" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="?c=home#Onas">O nas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="?c=info">Technicke Informacie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="?c=obsah">Obsah dodavky</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="?c=contact">Kontakt</a>
                </li>
                <?php if ($auth->isLogged()) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="?c=auth&a=logout">Odhlasit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="?c=admin">Admin</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="?c=auth&a=login">Prihlasenie</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer class="footer">
    <div class="footer-left">
        <img src="img/logo.jpg" height="80" width="80" alt="Logo">
        <p class="links">
            <a href="?c=info" class="prvy">Technicke Informacie</a>
            <a href="?c=obsah">Obsah Dodavky</a>
            <a href="?c=contact" >Kontakt</a>
        </p>
        <p class="links">
            Drevodomy Slovakia s.r.o
        </p>
    </div>
    <div class="footer-center">
        <i class="fa-solid fa-map-location fa-2x"></i>
        <p><span class="paddingLeft">Kysucke nove mesto</span><span class="paddingLeft">Horna skotna 2054</span></p><br>
        <i class="fa-solid fa-phone fa-2x"></i>
        <p><span>0907 881 726</span></p><br>
        <!--        <i class="fa-solid fa-fax fa-2x"></i>-->
        <!--        <p><span>+421 414 213 535</span></p><br>-->
        <i class="fa-solid fa-envelope fa-2x"></i>
        <p class="paddingLeft"><span>drevodomy@drevodomyslovakia.sk</span></p>
    </div>

</footer>
</body>
</html>
