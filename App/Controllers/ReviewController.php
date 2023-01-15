<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Review;

class ReviewController extends AControllerBase
{

    public function index(): Response
    {

        $data = Review::getAll();
        return $this->html($data);
    }

    public function add(): Response
    {
        $data = $this->request()->getPost();
        if(isset($data["user_name"])){ //isset ci exizstuje a empty ci ej zadane cosi
            $review = new Review();
            $review->setUserName($data["user_name"]);
            $review->setCity($data["city"]);
            $review->setReview($data["review"]);
            $review->setStars($data["stars"]);
            $review->save();
            return $this->redirect("?c=review");
        }
        return $this->html(new Review());
    }

}