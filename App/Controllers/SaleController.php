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
    public function edit(): Response {
        $id = $this->request()->getValue("id");
        $post = Sale::getOne($id);
        $data = $this->request()->getPost();
        if($post != null){
            
        }

        return $this->html();
    }

}