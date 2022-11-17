<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Houses;

class HousesController extends  AControllerBase
{

    public function authorize(string $action)
    {
        return true;
    }


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
                    window.open("?c=home", "_blank"); // will open new tab on window.onload
            </script><?php
        }

        return $this->html(new Houses());
    }

    public function index(): Response
    {
        return $this->html();
    }


    public function delete() : Response {
        $id = $this->request()->getValue("id");
        $post = Houses::getOne($id);
        if($post != null){
            $post->delete();
        }

        return $this->redirect("?c=home");


    }

    public function edit(): Response
    {
        $id = $this->request()->getValue("id");
        $post = Houses::getOne($id);
        $data = $this->request()->getPost();
        if($post != null){
            if(isset($data["nazov"])){ //isset ci exizstuje a empty ci ej zadane cosi
                $post->setNazov($data["nazov"]);
                $post->setPopis($data["popis"]);
                $post->setCena($data["cena"]);
                $post->setFoto($data["foto"]);
                $post->setInfo($data["info"]);
                $post->save();
                return $this->redirect("?c=home");
            }
        }

        return $this->html($post,"add");
    }



}