<?php /** @var \App\Core\IAuthenticator $auth */ ?>
<?php /* @var \App\Models\Houses $data */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b555355c37.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">

    <title>Home</title>
</head>

<div class="bodysize ">
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div>
                Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
                Táto časť aplikácie je prístupná len po prihlásení.
            </div>
        </div>
    </div>
</div>
<br>
<?php if($auth->getLoggedUserName() == 'admin' ){?>
<div class="row bodysize body">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edituj ponuku</h5>
                <p class="card-text">Pridavaj a odoberaj domy z ponuky.</p>
                <a href="?c=houses&a=add" class="btn btn-primary">Pridavaj Ponuku</a>
                <a href="?c=home" class="btn btn-danger">Odoberaj/Edituj ponuku</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edituj krajiny</h5>
                <p class="card-text">Pridavaj a odoberaj krajiny z ponuky.</p>
                <a href="?c=sale&a=add" class="btn btn-primary">Pridavaj krajiny</a>
                <a href="?c=sale" class="btn btn-danger">Odoberaj/Edituj krajiny</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edituj Stolarske vyrobky</h5>
                <p class="card-text">Pridavaj a odoberaj vyrobky z ponuky.</p>
                <a href="?c=carpenter&a=add" class="btn btn-primary">Pridavaj vyrobky</a>
            </div>
        </div>
    </div>
</div>
<?php }?>
</div>
