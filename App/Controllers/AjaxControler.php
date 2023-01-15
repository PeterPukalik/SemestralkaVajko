<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Model;
use App\Core\Responses\Response;

class AjaxControler extends AControllerBase
{
    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }
}