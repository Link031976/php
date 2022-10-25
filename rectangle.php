<?php
    class Rectangle
    {
        public $a;
        public $b;

        public function __construct($a,$b)
        {
            $this->a=$a;
            $this->b=$b;          
        }

        public function getSquare()
            {return $this->a*$this->b;}

        public function getPerimeter()
            {return ($this->a+$this->b)*2;}

        
    }