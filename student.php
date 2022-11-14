<?php
       class Student extends User
      {
          public function setName($name)
          {
              //Task 2. перевірка довжени імені. Якщо меньше 10, то "батько" первить решту
              if (strlen($name) < 10) parent::setName($name);
          }
      }
