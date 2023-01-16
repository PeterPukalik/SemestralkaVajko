<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Review;
use App\Models\Sale;

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
        if(isset($data["user_name"]) && isset($data["city"])&&isset($data["review"])&&isset($data["stars"]) ){ //isset ci exizstuje a empty ci ej zadane cosi
            $name = $_POST['user_name'];
            $city = $_POST['city'];
            $recenzia = $_POST['review'];
            $stars = $_POST['stars'];
            if(!preg_match("/[0-6]/",$stars)) {
                $data = ['error' => 'Zadal si neplatnu ohodnotenie, musi obsahovat len cisla'];
                return $this->html($data);
                //echo "<div class='text-danger'>Zadal si neplatnu sumu, musi obsahovat len cisla</div><br>";
            }
            elseif(!(strlen($name) > 0) && !(strlen($name) < 100)){
                $data = ['error' => 'Neplatny loggin'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($recenzia) > 0) && !(strlen($recenzia) < 1000)){
                $data = ['error' => 'neyplnena review'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }
            elseif(!(strlen($city) > 0) && !(strlen($city) < 150)){
                $data = ['error' => 'neyplnena mesto'];
                return $this->html($data);
                //echo "<div class='text-danger'>Nazov musi byt vyplneny</div><br>";

            }


            $review = new Review();
            $review->setUserName($data["user_name"]);
            $review->setCity($data["city"]);
            $review->setReview($data["review"]);
            $review->setStars($data["stars"]);
            $review->save();
            return $this->html(true);

        }
        return $this->html();
    }

}