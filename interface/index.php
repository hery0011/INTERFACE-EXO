<?php

class Mysql implements ProviderSql {
    public function connect()
    {
        return "connecion mysql";
    }
}
class Psql implements ProviderSql {
    public function connect()
    {
        return "connection psql";
    }

}

interface ProviderSql {
    public function connect();
}

class Oracl implements ProviderSql {
    public function connect()
    {
        //
        return "connection oracle";
    }
}

class App {
    public function query(ProviderSql $providerSql)
    {
        return $providerSql->connect();


    }
}


$mysq =  new Oracl();

$app = new App();
echo $app->query($mysq);



