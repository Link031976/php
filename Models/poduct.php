<?php
class Product
    {
        public readonly string $name;
        private readonly int $price;
        private readonly int $quantity;

        public function __construct($name,$price,$quantity)
        {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }
        //Task 6
        public function getCost()
        {
            return $this->price * $this->quantity;
        }
        public function getQuantity()
        {
            return $this->quantity;
        }
    }