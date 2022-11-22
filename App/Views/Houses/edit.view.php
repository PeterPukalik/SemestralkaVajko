<?php /* @var \App\Models\Houses $data */ ?>

<script src="js/myScript.js"></script>

<form action="?c=houses&a=edit" method="post" name="addHouse" onsubmit="return validateForm()" >

    <div class="form-group">

        <label>Nazov</label>
        <textarea name="nazov" id="nazov" class="form-control" rows="3" placeholder="<?=$data->getNazov()?>"><?=$data->getNazov()?></textarea>
        <label>Popis</label>
        <textarea name="popis" id="popis" class="form-control"  rows="3"><?=$data->getPopis()?></textarea>
        <label >Odkaz na fotku</label>
        <input name="foto" id="foto" class="form-control" value="<?=$data->getFoto()?>">
        <label >Cena</label>
        <input name="cena" id="cena" class="form-control" value="<?=$data->getCena()?>">
        <label>Info</label>
        <textarea name="info" id="info" class="form-control"  rows="3"><?=$data->getInfo()?></textarea>
    </div>
    <?php if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?=$data->getId() ?>">
    <?php } ?>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
