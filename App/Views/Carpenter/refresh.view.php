<?php /* @var \App\Models\Carpenter[] $data */
/** @var \App\Core\IAuthenticator $auth */
$layout = "no";
?>

<div class="row ">
    <?php foreach ($data as $item) { ?>
    <div class="card carpenterCard">
        <h5 class="card-title"><?=$item->getName()?></h5>
        <img class="card-img-top" src="<?=$item->getPicture()?>" alt="Card image cap">
    </div>
    <?php }?>
</div>