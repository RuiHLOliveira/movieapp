<?php

namespace MovieApp\Controller;

use MovieApp\Database\DbConnectionFactory;

class GenerosController
{
    public function index() {
        
        $pdo = DbConnectionFactory::get();

        $sql = 'select * from generos';
        $statement = $pdo->prepare($sql);

        $statement->execute();

        $dados = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return json_encode($dados);
    }
}
