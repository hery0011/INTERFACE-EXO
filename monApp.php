<?php
require_once 'Extextion.php';
require_once 'json.php';
require_once 'excel.php';
    class monApp {
        public function monExt(Extextion $Extextion){
            return $Extextion->ShowExtension();
        }
    }

$ext = new excel();
$result = new monApp();
echo $result->monExt($ext);
