<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\Carpenter;

class CarpenterController extends AControllerBase
{


    public function index(): Response
    {
        return $this->html();
    }

    public function refresh(): Response
    {
        $data = Carpenter::getAll();
        return $this->html($data);
    }
    public function get(): JsonResponse
    {
        $data = Carpenter::getAll();
        return $this->json($data);
    }

    public function add() : Response
    {
        $data = $this->request()->getPost();
        if(isset($data["name"])) {
            $name = $_POST['name'];
            $picture = $_POST['picture'];

            if($name =='' || $picture == '' ){
                $data = ['error' => 'musis vyplnit vsetko'];
                return $this->html($data);
            }
            elseif(!(strlen($name) > 0) && !(strlen($name) < 100)){
                $data = ['error' => 'Neplatny nazov'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($picture) > 0) && !(strlen($picture) < 500)){
                $data = ['error' => 'Neplatny nazov'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            else{
                $item = new Carpenter();
                $item->setName($data['name']);
                $item->setPicture($data['picture']);
                $item->save();
            }
        }


        return $this->html(new Carpenter());
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $sale = Carpenter::getOne($id);
        if($sale != null){
            $sale->delete();
        }

        return $this->redirect("?c=carpenter");
    }
}