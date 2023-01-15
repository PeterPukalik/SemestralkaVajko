<?php
/* @var \App\Core\IAuthenticator $auth */
?>

<form action="?c=review&a=add" method="post" name=""  >
    <div class="form-group">
        <label>Meno</label>
        <input name="user_name" class="form-control" value="<?=$auth->getLoggedUserName()?>" readonly>
        <label >Recenzia</label>
        <input name="review" class="form-control" value="">
        <label >Mesto</label>
        <input name="city" class="form-control" id="city">
        <label >Pocet Hviezdiciek</label>
        <input name="stars" class="form-control" id="stars">
        <br>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
