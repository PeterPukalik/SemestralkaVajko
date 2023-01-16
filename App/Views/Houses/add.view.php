<?php /* @var \App\Models\Houses $data */ ?>


<script src="js/myScript.js"></script>
<form action="?c=houses&a=add" method="post" name="addHouse" onsubmit="return validateForm()" >
    <div class="form-group">
        <div class='text-danger'><?=@$data['error']?></div><br>
        <label>Nazov</label>
        <textarea name="nazov" class="form-control" rows="3"></textarea>
        <label>Popis</label>
        <textarea name="popis" class="form-control"  rows="3"></textarea>
        <label >Odkaz na fotku</label>
        <input name="foto" class="form-control">
        <label >Cena</label>
        <input name="cena" class="form-control" id="cena">
        <label>Info</label>
        <textarea name="info" class="form-control"  rows="3"></textarea>
<!--            <div class="form-group">-->
<!--                <label for="exampleFormControlFile1">Example file input</label>-->
<!--                <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">-->
<!--            </div>-->

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
