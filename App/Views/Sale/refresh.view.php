<?php /* @var \App\Models\Sale[] $data */
/** @var \App\Core\IAuthenticator $auth */
    $layout = "no";
?>



<table class="table">
    <thead>
<!--    <tr>-->
<!--        <th>Image</th>-->
<!--        <th>Name</th>-->
<!--    </tr>-->
    </thead>
    <tbody>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><img src="<?=$item->getPhoto()?>" class="img_table" alt="..."></td>
            <td><?=$item->getName()?></td>
            <td><?=$item->getCity()?></td>
            <td><?php if ($auth->isLogged()) { ?>
                <a href="?c=sale&a=edit&id=<?=$item->getId()?>" class="btn btn-secondary">Edit</a>
                <a href="?c=sale&a=delete&id=<?=$item->getId()?>" class="btn btn-danger">Delete</a>
            <?php }?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>