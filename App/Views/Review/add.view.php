<?php
/* @var \App\Core\IAuthenticator $auth */
?>
<script src="js/review.js"></script>
<form action="?c=review&a=add" method="post" name="reviewform"  >
    <div class="form-group">
        <label>Meno</label>
        <input name="user_name" class="form-control" value="<?=$auth->getLoggedUserName()?>" readonly>
        <label >Recenzia</label>
        <input name="review" class="form-control" value="">
        <label >Mesto</label>
        <input name="city" class="form-control" id="city">
<!--        <label >Pocet Hviezdiciek</label>-->
        <label for="customRange2" class="form-label">Pocet Hviezdiciek (0-5)</label>
        <input name="stars" id="stars" type="range" class="form-range" min="0" max="5" id="customRange2">
<!--        <input name="stars" class="form-control" id="stars">-->
        <br>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
