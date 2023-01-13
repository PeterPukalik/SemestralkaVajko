<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Model;
use App\Config\Configuration;
use App\Core\Responses\Response;
use App\Models\User;

class UserController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    public function register(): Response{
        $data = $this->request()->getPost();
        if (isset($data["login"])) {
            $user = new User();
            $user->setLogin($data["login"]);

            $password = password_hash($data["password"], PASSWORD_BCRYPT);
            $user->setPassword($password);
            $user->save();
            return $this->html("?=home");
        }
        return $this->html();
    }

}