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


            $nazov = $_POST['nazov'];
            $popis = $_POST['popis'];
            $foto = $_POST['foto'];
            $info = $_POST['info'];
            $cena = $_POST['cena'];


            if(!preg_match("/[0-9]/",$cena)) {
                $data = ['error' => 'Zadal si neplatnu sumu, musi obsahovat len cisla'];
                return $this->html($data);
                //echo "<div class='text-danger'>Zadal si neplatnu sumu, musi obsahovat len cisla</div><br>";
            }
            elseif(!(strlen($nazov) > 0) && !(strlen($nazov) < 100)){
                $data = ['error' => 'Nazov musi byt vyplneny'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($popis) > 0)){
                $data = ['error' => 'Popis musi byt vyplneny'];
                return $this->html($data);
                //echo "<div class='text-danger'>Popis musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($foto) > 0)){
                //echo "<div class='text-danger'>Musis zadat odkaz alebo cestu k foto</div><br>";
                $data = ['error' => 'Musis zadat odkaz alebo cestu k foto'];
                return $this->html($data);

            }
            elseif(!(strlen($info) < 5000)){
                //echo "<div class='text-danger'>info musi byt vyplneny</div><br>";
                $data = ['error' => 'info musi byt vyplneny'];
                return $this->html($data);
            }
            else {
                $post = new Houses();
                $post->setNazov($data["nazov"]);
                $post->setPopis($data["popis"]);
                $post->setFoto($data["foto"]);
                $post->setInfo($data["info"]);
                $post->setCena($data["cena"]);
                $post->save();
//                ?><!--<script>-->
<!--                    window.open("?c=home", "_blank"); // will open new tab on window.onload-->
<!--                </script>--><?php
            }

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
//        if($post != null){
//            if(isset($data["nazov"])){ //isset ci exizstuje a empty ci ej zadane cosi
//                $post->setNazov($data["nazov"]);
//                $post->setPopis($data["popis"]);
//                $post->setCena($data["cena"]);
//                $post->setFoto($data["foto"]);
//                $post->setInfo($data["info"]);
//                $post->save();
//                return $this->redirect("?c=home");
//
//            }
//        }
        if(isset($data["nazov"])){ //isset ci exizstuje a empty ci ej zadane cosi


            $nazov = $_POST['nazov'];
            $popis = $_POST['popis'];
            $foto = $_POST['foto'];
            $info = $_POST['info'];
            $cena = $_POST['cena'];


            if(!preg_match("/[0-9]/",$cena)) {
                echo "<div class='text-danger'>Zadal si neplatnu sumu, musi obsahovat len cisla</div><br>";
            }
            elseif(!(strlen($nazov) > 0) && !(strlen($nazov) < 100)){
                echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($popis) > 0)){
                echo "<div class='text-danger'>Popis musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($foto) > 0)){
                echo "<div class='text-danger'>Musis zadat odkaz alebo cestu k foto</div><br>";

            }
            elseif(!(strlen($info) < 5000)){
                echo "<div class='text-danger'>info musi byt vyplneny</div><br>";
            }
            else {
                $post = new Houses();
                $post->setNazov($data["nazov"]);
                $post->setPopis($data["popis"]);
                $post->setFoto($data["foto"]);
                $post->setInfo($data["info"]);
                $post->setCena($data["cena"]);
                $post->save();
                ?><script>
                    window.open("?c=home", "_blank"); // will open new tab on window.onload
                </script><?php
            }

        }

        return $this->html($post,"edit");
    }



}