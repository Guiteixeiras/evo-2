<?php

class charset
{

    public function add(product $product)
    {
        if (count($this->getCart()['products']) > 0) {
            foreach ($this->getCart()['products'] as $productInCart) {
                if ($productInCart->getid() === $product->getid()) {
                }
            }
        }
    }

    public function remove()
    {
    }

    public function getCart()
    {
        return  $_SESSION['cart'] ?? [];
    }
}
