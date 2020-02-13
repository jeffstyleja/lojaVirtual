<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 02/05/2018
 * Time: 10:32
 */

class homeController extends controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){

        $dados=array();
        $produto = new produtos();
        $dados['produtos'] = $produto->listar(50);
        $this->loadTemplate('home',$dados);
    }


}

?>