<?php
    $file='c:\web';
    class Bilder 
        {
            public $dir=[];          

            public function getDir($f)
            {
                $dir=[];
                $bf = new DirectoryIterator($f);
                foreach ($bf as $fileinfo) 
                {                    
                    if ( $fileinfo->getType() == 'dir') 
                        if (($fileinfo->getFilename() != '.') or ($fileinfo->getFilename() != "..")) $dir[0][] = $fileinfo->getFilename();
                    if ( $fileinfo->getType() == 'file') $dir[1][] = $fileinfo->getFilename();
                   // echo $fileinfo->getFilename() . " " . $fileinfo->getType() . "<br>";
                    
                }
                return $dir;
            }

           
        }

    $b = new Bilder;
    $s=$b->getDir($file);

    echo "<pre>";
    print_r($s);

  