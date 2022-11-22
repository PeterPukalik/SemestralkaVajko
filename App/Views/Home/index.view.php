<?php /* @var \App\Models\Houses[] $data */
/** @var \App\Core\IAuthenticator $auth */


?>

<body class="body">

<div class="textpadding" id="Onas">
    <h1 class="center">Spoločnosť DREVODOMY Slovakia, s.r.o.</h1>
    <p>
        Vlastný výrobný závod, v ktorom sa drevostavby vyrábajú od roku 1955. Viac ako 60 – ročná tradícia a prax v oblasti výroby a
        montáže zrubových domov a chát je zárukou toho, že od nás dostanete kvalitný výrobok za prijateľnú cenu.
    </p>
    <h5>Naša firma vyrába:</h5>
    <ul>
        <li>drevené zrubové domy určené pre celoročné bývanie</li>
        <li>drevené zrubové rekreačné chaty</li>
        <li>montované domy</li>
        <li>atypické stavby</li>
    </ul>
    <p>Naše drevostavby sú zrealizoavné vo viacerých štátoch Európy ako napríklad Nemecko, Belgicko,
        Holandsko, Španielsko, Francúzsko, Česká republika …
    </p>
</div>

<h1 class="textpadding center">Nasa Ponuka</h1>
<!--    databaza-->
<?php foreach ($data as $item) { ?>
<div class="card mb-3" >
    <img src="<?=$item->getFoto()?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?=$item->getNazov()?></h5>
        <p class="card-text"><?=$item->getPopis()?></p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$item->getId()?>">
            Viac info
        </button>
        <?php if ($auth->isLogged()) { ?>
            <a href="?c=houses&a=edit&id=<?=$item->getId()?>" class="btn btn-secondary">Edit</a>
            <a href="?c=houses&a=delete&id=<?=$item->getId()?>" class="btn btn-danger">Delete</a>
        <?php }?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?=$item->getId()?>" tabindex="-1" aria-labelledby="exampleModalLabel<?=$item->getId()?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel<?=$item->getId()?>"><?=$item->getCena()?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><?=$item->getInfo()?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<div class="wraper">
    <!--    <img class="image" src="https://scontent-vie1-1.xx.fbcdn.net/v/t39.30808-6/240797087_4471562862910251_1814622373591899848_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=4pO4d55r2skAX-N58or&_nc_ht=scontent-vie1-1.xx&oh=00_AT8qJAmijdhGlI3cGzo8Ru7TgKEnRYYGOE9wMJOEsCTzVw&oe=634F1EE5">-->
    <div class="backgroundimg"></div>
    <div class="textmiddle">
        <div class="text"><a href="?c=contact" class="links">Zaujala vas ponuka? Konktaktujte nas</a></div>
    </div>
</div>



</body>
</html>