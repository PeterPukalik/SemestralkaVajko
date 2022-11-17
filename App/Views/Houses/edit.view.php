<?php /* @var \App\Models\Houses $data */ ?>

<form action="?c=houses&a=edit" method="post">

    <div class="form-group">
        <label>Nazov</label>
        <textarea name="nazov" class="form-control" rows="3" placeholder="<?=$data->getNazov()?>"><?=$data->getNazov()?></textarea>
        <label>Popis</label>
        <textarea name="popis" class="form-control"  rows="3"><?=$data->getPopis()?></textarea>
        <label >Odkaz na fotku</label>
        <input name="foto" class="form-control" value="<?=$data->getFoto()?>">
        <label >Cena</label>
        <input name="cena" class="form-control" value="<?=$data->getCena()?>">
        <label>Info</label>
        <textarea name="info" class="form-control"  rows="3"><?=$data->getInfo()?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
