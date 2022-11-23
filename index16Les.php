<?php
    class Test1
    {}
    class Test2
    {}
    
    class Test3 extends Test1
    {}
    
    $test1 = new Test1;
    $test2 = new Test2;
    $test3 = new Test3;
    echo get_class($test3);