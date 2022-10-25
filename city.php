<?php
    class City
        {
            private $name;
            private $foundation; //дата основи
            private $population; //населення
            public $props=[];

            public function __construct()
                {
                    //Формую значення для властивості props
                    $class_vars = get_class_vars(get_class($this));

                    foreach ($class_vars as $name => $value) 
                    {
                        $this->props[]=$name;                        
                    }                 
                }
        }   
