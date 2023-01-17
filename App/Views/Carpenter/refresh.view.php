<?php /* @var \App\Models\Carpenter[] $data */
/** @var \App\Core\IAuthenticator $auth */
$layout = "no";
?>
<script src="js/myScript.js"></script>
<div class="row ">
    <?php foreach ($data as $item) { ?>
    <div class="card carpenterCard">
        <h5 class="card-title"><?=$item->getName()?></h5>
        <img class="card-img-top" src="<?=$item->getPicture()?>" alt="Card image cap">
        <?php if($auth->getLoggedUserName() == 'admin' ){?>
            <a href="#" class="btn btn-danger" onclick="return confirmDeleteCarpenter (<?=$item->getId()?>)">Delete</a>
        <?php }?>
    </div>
    <?php }?>
</div>

