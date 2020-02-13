<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 26/11/2018
 * Time: 13:49
 */
class categoriaController extends controller{
    public function __construct()
    {
        parent::__construct();
    }

public function ver($id){
        if(!empty($id)) {
            $dados = array(
                'categoria' => '',
                'produtos' => array()
            );
            $produtos = new produtos();
            $dados['produtos']= $produtos->listar_categorias($id);
            $cat = new categorias();
            $dados['categoria']= $cat->getNome($id);

            $this->loadTemplate("categorias", $dados);
        }
        else{
            echo "Categoria não existente";
        }
}

}

?>