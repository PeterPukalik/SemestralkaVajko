<?php /* @var \App\Models\Post $data */ ?>



<!--<form action="?c=posts&a=--><?//=($data->getId() == 0 ? "add" : "edit") ?><!--" method="post">-->
<form action="?c=posts&a=add" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input value="<?=$data->getTitle()?>" name="title" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Text</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getText()?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>