<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class LandingPageController extends Controller {

    public function index() {
        $viewData = [
            "carousel" => $this->getCarouselEntries()
        ];

        return view('landing.index', $viewData);
    }

    private function getCarouselEntries() {
        return [
            [
                "isActive"       => true,
                "headerText"     => "We craft ERP,<br/> Accounting Systems,<br/> & Custom Business Solutions",
                "subText"        => "Stargate Business Solutions Inc.",
                "imageUrl"       => "img/landing/laptop.png",
                "imageAlt"       => "laptop",
                "backImageClass" => "one",
                "buttons"        => '<a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>'
            ],
            [
                "isActive"       => false,
                "headerText"     => "Mobile access <br/> for your business solutions.",
                "subText"        => "Work anywhere, anytime, with or without internet access!",
                "backImageClass" => "two",
                "buttons"        => '<a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>'
            ]
        ];
    }

}
