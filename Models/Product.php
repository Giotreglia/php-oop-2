<?php

require_once __DIR__ . '/Specie.php';
require_once __DIR__ . '/../Traits/Priceble.php';

class Product {

    use Priceble;

    public $name;
    public $category;
    public $image;
    public $specie;


    public function __construct($_name, $_category, $_price, $_currency, $_image, Specie $_specie) 
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->currency = $_currency;
        $this->image = $_image;
        $this->specie = $_specie->name;
    }

    public function getProductCard($product) {
        return
        '<div class="card mb-3 p-2" style="width: 18rem; height: 500px;">
            <div class="badge bg-danger w-25"><i class="fa-solid fa-' . $product->specie . '"></i></div>
            <img src="' . $product->image . '" class="card-img-top p-2" alt="' . $product->name . '">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h3 class="card-title">' . $product->name . '</h3>
                    <span>' . $product->category . '</span>
                </div>

                <div>
                    <h5 class="card-title d-inline">' . $product->price . ' ' . $product->currency . ' </h5><span class="text-secondary"> iva incl.</span>
                </div>
                <div>
                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
                
            </div>
        </div>';
    }

}
