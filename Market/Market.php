<?php

class Market {
    protected $store_name;
    protected $product_name;
    protected $price;

    public function __construct($store_name, $product_name, $price) {
        $this->store_name = $store_name;
        $this->product_name = $product_name;
        $this->price = $price;
    }

    public function openStore() {
        return "<b>{$this->store_name}</b> is now open! Selling fresh {$this->product_name}.<br>";
    }
}

?>
