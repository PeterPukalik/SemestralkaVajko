<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Houses;

class HousesController extends  AControllerBase
{

    public function add() : Response
    {
        $data = $this->request()->getPost();
        if(isset($data["nazov"])){ //isset ci exizstuje a empty ci ej zadane cosi
            $post = new Houses();
            $post->setNazov($data["nazov"]);
            $post->setPopis($data["popis"]);
            $post->setCena($data["cena"]);
            $post->setFoto($data["foto"]);
            $post->setInfo($data["info"]);
            $post->save();
            ?><script>

                window.onload = function(){
                    window.open(localhost/SemestralkaVajko/?c=home, "_blank"); // will open new tab on window.onload
                }
            </script><?php
        }

        return $this->html(new Houses());
    }

    public function index(): Response
    {
        return $this->html();
    }
}