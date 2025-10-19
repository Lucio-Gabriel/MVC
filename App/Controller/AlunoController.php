<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController 
{
    public static function cadastro(): void
    {
        $model = new Aluno();
        // $model->id = 8;
        $model->nome = "Lucio Azevedo";
        $model->ra = 124;
        $model->curso = "Desenvolvimento de sistema";
        $model->save();

        echo "Aluno inserido com sucesso";
    }   
    
    public static function listar(): void
    {
        echo "listagem de alunos";
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();

        var_dump($lista);
    }
}   