<?php

namespace App\Controllers;

use App\Core\AControllerBase;
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
}