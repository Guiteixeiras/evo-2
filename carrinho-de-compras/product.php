<?php

class product
{

    private int $id;
    private string $name;
    private int $price;
    private int $quantity;

    public function setid(int $id)
    {
        $this->id = $id;
    }
    public function setname(string $name)
    {
        $this->name = $name;
    }
    public function setprice(int $price)
    {
        $this->price = $price;
    }
    public function setquantity(int $quantity)
    {
        $this->quantity = $quantity;
    }


    public function getid()
    {
        return $this->id;
    }
    public function getname()
    {
        return $this->name;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function getquantity()
    {
        return $this->quantity;
    }
}
