<?php
class Test
    {
        public $name;
        public  $prop1;       
        public  $prop2;      
        private  $prop3;        
        private  $prop4;

        public function method1()
        {}
        public function method2()
        {}
        public function method3()
        {}
        public function getMetodList()
        {
            return get_class_methods($this);
        }
        public function getPropertiesList()
        {
            return get_class_vars(__CLASS__);
        }
        
    }