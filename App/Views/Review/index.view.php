<?php /* @var \App\Models\Review[] $data */
/** @var \App\Core\IAuthenticator $auth */


?>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="fw-bold mb-4">Recenzie</h3>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                Recenzie od nasich spokojnych zakaznikov.
                </p>
            </div>
        </div>
    </div>
        <div class="row text-center">
        <?php foreach ($data as $item) { ?>

            <div class="col-md-6 mb-4 mb-md-5">
                <div class="card">
                    <div class="card-body py-4 mt-2">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="https://i.pinimg.com/564x/d5/b0/4c/d5b04cc3dcd8c17702549ebc5f1acf1a.jpg"
                                 class="rounded-circle shadow-1-strong" width="100" height="100" />
                        </div>
                        <h5 class="font-weight-bold"><?=$item->getUserName()?></h5>
                        <h6 class="font-weight-bold my-3"><?=$item->getCity()?></h6>

                        <ul class="list-unstyled d-flex justify-content-center">
                            <?php for($i=0;$i<$item->getStars();$i++) {?>
                            <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                            </li>
                            <?php }?>
                        </ul>
                        <span class="mb-2">
                            <i class="fas fa-quote-left pe-2"><?=$item->getReview()?></i>
                        </span>
                    </div>
                </div>
            </div>


        <?php } ?>
        </div>
<?php if ($auth->isLogged()) { ?>
<div class="d-grid gap-2">
    <a class="btn btn-secondary" type="button" href="?c=review&a=add">Pridaj Recenziu</a>
</div>
    <br>
<?php }?>