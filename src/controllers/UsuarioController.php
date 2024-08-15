<?php
namespace src\controllers;

use \core\Controller;
// importando minha class usuario
use \src\models\Usuario;


class UsuarioController extends Controller {

    public function add(){
        $this->render('add');
    }

    public function addAction(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            // verificando se user existe com email
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0){
                // insere
                Usuario::insert([
                    'nome' => $name, 
                    'email' => $email
                ])->execute();

                // redirecione para /
                $this->redirect('/');
            }
        } 

        $this->redirect('/novo');
    }

    public function edit($args){
        $usuario = Usuario::select()->find($args['id']);

         $this->render('edit',[
            'usuario' => $usuario
         ]);
    }

    public function editAction($args){

        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            // se der certo
            Usuario::update()
            ->set('nome', $name)
            ->set('email', $email)
            ->where('id', $args['id'])
        ->execute();

            $this->redirect('/');
        }

        // se não der
        $this->redirect('/usuario/'.$args['id'].'/editar');
    }

    public function del($args){
        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }

}