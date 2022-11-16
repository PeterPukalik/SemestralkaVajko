<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Post;

class PostsController extends AControllerBase
{
    public function authorize(string $action)
    {
        return true;
    }


    public function index(): Response
    {
        $posts = Post::getAll();
        return $this->html($posts);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if(isset($data["title"])){ //isset ci exizstuje a empty ci ej zadane cosi
            $post = new Post();
            $post->setTitle($data["title"]);
            $post->setText($data["text"]);
            $post->save();
            return $this->redirect("?c=posts");
        }
        return $this->html(new Post());
    }

    public function delete(): Response
    {
        $id = $this->request()->getValue("id");
        $post = Post::getOne($id);
        if($post != null){
            $post->delete();
        }

        return $this->redirect("?c=posts");
    }

    public function edit(): Response
    {
        $id = $this->request()->getValue("id");
        $post = Post::getOne($id);
        $data = $this->request()->getPost();
        if($post != null){
            if(isset($data["title"])){ //isset ci exizstuje a empty ci ej zadane cosi
                $post->setTitle($data["title"]);
                $post->setText($data["text"]);
                $post->save();
                return $this->redirect("?c=posts");
            }
        }

        return $this->html($post,"add");
    }





}