<?php /* @var \App\Models\Sale $data */ ?>

<script src="js/myScript.js"></script>
<form action="?c=sale&a=add" method="post" name=""  >
    <div class="form-group">
        <label>Nazov</label>
        <textarea name="name" class="form-control" rows="3" placeholder="<?=$data->getName()?>"><?=$data->getName()?></textarea>
        <label >Odkaz na fotku</label>
        <input name="photo" class="form-control" value="<?=$data->getPhoto()?>">
        <label >Mesto</label>
        <input name="city" class="form-control" id="mesto" value="<?=$data->getCity()?>">
        <br>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
