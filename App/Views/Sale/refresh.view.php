<?php /* @var \App\Models\Sale[] $data */
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
        </tr>
    <?php } ?>
    </tbody>
</table>