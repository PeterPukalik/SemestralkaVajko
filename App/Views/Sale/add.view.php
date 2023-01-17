<?php /* @var \App\Models\Sale $data */ ?>

<script src="js/myScript.js"></script>
<div class="bodysize">
<form action="?c=sale&a=add" method="post" name="addSale" onsubmit="return valideSaleForm()" >
    <div class="form-group">
        <?php foreach ($data as $item) { ?>
            <div class='text-danger'><?=@$item?></div><br>
        <?php }?>
        <label>Nazov</label>
        <textarea name="name" class="form-control" rows="3"></textarea>
        <label >Odkaz na fotku</label>
        <input name="photo" class="form-control" value="">
        <label >Mesto</label>
        <input name="city" class="form-control" id="mesto">
        <br>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>