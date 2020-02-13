<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 09/10/2018
 * Time: 08:51
 */
class produtos extends model {
    public function __construct(){
        parent::__construct();
    }

    public function listar($qtd = 0){
        $sql = "select * from produtos order by NEWID()";
        if($qtd >0){
            $sql = str_replace('*',"TOP ({$qtd}) *",$sql);
        }
        $sql = $this->db->query($sql);
        $produtos=$sql->fetchAll();
        if($produtos){
            return $produtos;
        }
    }

    public function listar_categorias($id){
        $sql = "select * from produtos where id_categoria = '{$id}' order by NEWID()";
        $sql = $this->db->query($sql);
        $produtos= $sql->fetchAll();
        if($produtos){
            return $produtos;
        }else{
            return false;
        }

    }

    public function retorna_produto($id){
        $sql="select * from produtos where id in ({$id})";
        $sql=$this->db->query($sql);
        $produto=$sql->fetchAll();
        if($produto){
            return $produto;
        }else{
            return '0';
        }

    }
}
?>