<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Model;
use App\Core\Responses\Response;
use App\Models\Sale;
use PDO;
use PDOException;

class SaleController extends AControllerBase
{


    public function index(): Response
    {
        return $this->html();
    }

    public function refresh(): Response
    {
        $data = Sale::getAll();
        return $this->html($data);
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $sale = Sale::getOne($id);
        if($sale != null){
            $sale->delete();
        }

        return $this->redirect("?c=home");
    }
    public function add(): Response
    {
        $data = $this->request()->getPost();
        if(isset($data["name"])){ //isset ci exizstuje a empty ci ej zadane cosi

            $name = $_POST['name'];
            $photo = $_POST['photo'];
            $city = $_POST['city'];

            if($name =='' || $photo == '' || $city == ''){
                $data = ['error' => 'musis vyplnit vsetko'];
                return $this->html($data);
            }
            elseif(!(strlen($city) > 0) || !(strlen($city) < 100) ){
                $data = ['error' => 'neyplnena mesto'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($name) > 0) || !(strlen($name) < 100)){
                $data = ['error' => 'Neplatny nazov'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($photo) > 0) || !(strlen($photo) < 500)){
                $data = ['error' => 'Neplatny nazov'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            else{
                $sale = new Sale();
                $sale->setCity($data["city"]);
                $sale->setName($data["name"]);
                $sale->setPhoto($data["photo"]);
                $sale->save();
            }

        }
        return $this->html(new Sale());
    }



    public function edit(): Response {
        $id = $this->request()->getValue("id");
        $sale = Sale::getOne($id);
        $data = $this->request()->getPost();
        if($sale != null){
            if(isset($data['name'])){
                $name = $_POST['name'];
                $photo = $_POST['photo'];
                $city = $_POST['city'];
            if(!(strlen($city) > 0) && !(strlen($city) < 100)){
                $data = ['error' => 'neyplnena mesto'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($name) > 0) && !(strlen($name) < 100)){
                $data = ['error' => 'Neplatny nazov'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($photo) > 0) && !(strlen($photo) < 500)){
                $data = ['error' => 'Neplatny nazov'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }

                $sale->setCity($data["city"]);
                $sale->setName($data["name"]);
                $sale->setPhoto($data["photo"]);
                $sale->save();
                return $this->redirect("?c=home");
            }

        }

        return $this->html($sale,"edit");
    }

}