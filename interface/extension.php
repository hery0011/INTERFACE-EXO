<?php
interface extextion {
    public function ShowExtension();
}

class json implements extextion{
    public function ShowExtension(){
        return 'json';
    }
}

class xml implements extextion{
    public function ShowExtension(){
        return 'xml';
    }
}

class excel implements extextion{
    public function ShowExtension(){
        return 'excel';
    }
}


class monApp {
    public function monExt(extextion $Extextion){
        return $Extextion->ShowExtension();
    }
}

$ext = new json();
$result = new monApp();
echo $result->monExt($ext);

