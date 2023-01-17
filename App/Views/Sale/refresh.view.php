<?php /* @var \App\Models\Sale[] $data */
/** @var \App\Core\IAuthenticator $auth */
    $layout = "no";
?>
<script src="js/myScript.js"></script>


<table class="table">
    <thead>
    </thead>
    <tbody>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><img src="<?=$item->getPhoto()?>" class="img_table" alt="..."></td>
            <td><?=$item->getName()?></td>
            <td><?=$item->getCity()?></td>
            <td>
                <?php if($auth->getLoggedUserName() == 'admin' ){?>
                    <a href="?c=sale&a=edit&id=<?=$item->getId()?>" class="btn btn-secondary">Edit</a>

                    <a href="#" class="btn btn-danger" onclick="return confirmSaleDele (<?=$item->getId()?>)">Delete</a>
            <?php }?>

            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>