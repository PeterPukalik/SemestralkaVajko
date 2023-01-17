<?php /* @var \App\Models\Material[] $data */
/** @var \App\Core\IAuthenticator $auth */
$layout = "no";
?>

<script src="js/myScript.js"></script>

<h3>Makke drevo</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nazov</th>
        <th scope="col">Benefit</th>
        <th scope="col">Handle</th>
        <?php if ($auth->getLoggedUserName()=='admin') { ?>
            <th scope="col">Edit</th>
        <?php }?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item) {
        if($item->getTypeWood()==0){?>
    <tr>
        <td><?=$item->getName()?></td>
        <td><?=$item->getBenefits()?></td>
        <td><?=$item->getBenefits()?></td>
        <?php if ($auth->getLoggedUserName()=='admin') { ?>
            <td>
                 <a href="#" class="btn btn-danger" onclick="return confirmMaterialDel(<?=$item->getId()?>)">Delete</a>
            </td>
        <?php }?>
    </tr>
    <?php }?>
    <?php }?>
    </tbody>
</table>


<h3>Tvrde drevo</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nazov</th>
        <th scope="col">Benefit</th>
        <th scope="col">Handle</th>
        <?php if ($auth->getLoggedUserName()=='admin') { ?>
            <th scope="col">Edit</th>
        <?php }?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item) {
        if($item->getTypeWood()==1){?>
            <tr>
                <td><?=$item->getName()?></td>
                <td><?=$item->getBenefits()?></td>
                <td><?=$item->getBenefits()?></td>
                <?php if ($auth->getLoggedUserName()=='admin') { ?>
                    <td>
                        <a href="#" class="btn btn-danger" onclick="return confirmMaterialDel(<?=$item->getId()?>)">Delete</a>
                    </td>
                <?php }?>
            </tr>
        <?php }?>
    <?php }?>
    </tbody>
</table>