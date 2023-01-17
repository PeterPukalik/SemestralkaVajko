<?php /* @var \App\Models\Carpenter $data */ ?>


<script src="js/myScript.js"></script>
<div class="bodysize">
    <form action="?c=carpenter&a=add" method="post" name="addCarpenter" onsubmit="return validateCarpenterForm()" >
        <div class="form-group">
            <?php foreach ($data as $item) { ?>
                <div class='text-danger'><?=@$item?></div><br>
            <?php }?>
            <label>Nazov</label>
            <input name="name" class="form-control" value=""></input>
            <label >Odkaz na fotku</label>
            <input name="picture" class="form-control" value="">
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>