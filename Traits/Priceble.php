<?php

trait Priceble {
    protected $price;
    protected $currency;

    public function setPrice(float $price, string $currency) {
        $this->price = $price;
        $this->currency = $currency;
    }
}