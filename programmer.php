<?php
    require_once('user.php');
    class Programmer extends User
        {
            private $langs=[];  

            public function getLangs()
            {
                return $this->langs;
            }

            public function setLang($l)
            {
                $this->langs[]=$l;
            }
        }