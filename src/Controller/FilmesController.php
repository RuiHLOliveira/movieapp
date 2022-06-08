<?php

namespace MovieApp\Controller;

use MovieApp\Database\DbConnectionFactory;

class FilmesController
{
    
    public function index() {

        $pdo = DbConnectionFactory::get();

        $sql = 'select * from filmes';
        $statement = $pdo->prepare($sql);

        $statement->execute();

        $dados = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return json_encode($dados);
    }

}
