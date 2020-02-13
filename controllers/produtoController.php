<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 28/11/2018
 * Time: 14:53
 */
class produtoController extends controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function ver($id=''){
        if(!empty($id)){
            $dados=array();
            $produtos=new produtos();
            $dados['produtos']=$produtos->retorna_produto($id);
            if ($dados['produtos'] != '0'){
                $this->loadTemplate('produto',$dados);
            }else{
                header("Location: /lojaVirtual/index.php/naoencontrado");
            }
        }else{
            header("Location: /lojaVirtual/index.php/naoencontrado");
        }
    }
}
?>