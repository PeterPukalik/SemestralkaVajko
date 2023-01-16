<?php
/* @var \App\Core\IAuthenticator $auth */
/* @var Array $data */
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="js/review.js"></script>
<div class="bodysize">
    <form action="?c=review&a=add" method="post" id="reviewform"  >
        <div class='text-danger'><?=@$data['error']?></div><br>
        <div class="form-group">
            <label>Meno</label>
            <input name="user_name" class="form-control" value="<?=$auth->getLoggedUserName()?>" readonly>
            <label >Recenzia</label>
            <input name="review" class="form-control" >
            <label >Mesto</label>
            <input name="city" class="form-control" id="city">
<!--                    <label >Pocet Hviezdiciek</label>-->
<!--                    <input name="stars" class="form-control" id="stars">-->
            <label for="customRange2" class="form-label">Pocet Hviezdiciek (0-5)</label>
            <input name="stars" id="stars" type="range" class="form-range" min="0" max="5" id="customRange2">
            <br>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

