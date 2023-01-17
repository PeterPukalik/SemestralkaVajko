<?php

namespace App\Controllers;

use App\Core\AControllerBase as AControllerBase;
use App\Core\Responses\Response;
use App\Models\Material;

class MaterialController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html();
    }

    public function refresh(): Response
    {
        $data = Material::getAll();
        return $this->html($data);
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $sale = Material::getOne($id);
        if($sale != null){
            $sale->delete();
        }

        return $this->redirect("?c=material");
    }
}
