<?php

class Product {
    public $name;
    public $type;
    public $price;
    public $image;
    public $specie;

    public function __construct($_name, $_type, $_price, $_image, $_specie) 
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
        $this->image = $_image;
        $this->specie = $_specie;
    }

    public function getProductCard($product) {
        return
        '<div class="card mb-3 p-2" style="width: 18rem; height: 500px;">
            <div class="badge bg-danger w-25"><i class="fa-solid fa-' . $product->specie . '"></i></div>
            <img src="' . $product->image . '" class="card-img-top" alt="' . $product->name . '">
            <div class="card-body">
                <h3 class="card-title">' . $product->name . '</h3>
                <span>' . $product->type . '</span>
                <div>
                    <h5 class="card-title d-inline">' . $product->price . ' €</h5><span class="text-secondary"> iva incl.</span>
                </div>
                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
            </div>
        </div>';
    }

}
