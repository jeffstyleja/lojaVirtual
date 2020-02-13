<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 26/12/2018
 * Time: 16:11
 */
class carrinhoController extends controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $dados = array();
        if(isset($_SESSION['carrinho'])){
            $prods=$_SESSION['carrinho'];
            if(count($prods)>0){
                $produto = new produtos();
                $dados['produtos'] = $produto->retorna_produto(implode(',', $prods));
                $this->loadTemplate('carrinho',$dados);
            }else{
                header("Location: /lojaVirtual/index.php");
            }
        }else{
            header("Location: /lojaVirtual/index.php");
        }
    }

    public function add($id=''){
        if(!empty($id)){
            if(!isset($_SESSION['carrinho'])){
                $_SESSION['carrinho']=array();
            }
            $_SESSION['carrinho'][]=$id;
            header("Location: /lojaVirtual/index.php/carrinho");
        }
    }

    public function del($id=''){
        if(!empty($id)){
          foreach ($_SESSION['carrinho'] as $cchave => $cvalor){
              if($id==$cvalor){
                  unset($_SESSION['carrinho'][$cchave]);
              }
          }
        }
        header("Location: /lojaVirtual/index.php/carrinho");
    }
}