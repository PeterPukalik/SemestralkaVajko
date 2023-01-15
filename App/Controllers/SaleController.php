<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Sale;

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
            $sale = new Sale();
            $sale->setCity($data["city"]);
            $sale->setName($data["name"]);
            $sale->setPhoto($data["photo"]);
            $sale->save();
            return $this->redirect("?c=home");
        }
        return $this->html(new Sale());
    }

    public function edit(): Response {
        $id = $this->request()->getValue("id");
        $sale = Sale::getOne($id);
        $data = $this->request()->getPost();
        if($sale != null){
            if(isset($data['name'])){
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