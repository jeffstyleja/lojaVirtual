<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 26/11/2018
 * Time: 14:21
 */

class categorias extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getNome($id){
        $sql = "select titulo from categorias where id= '{$id}'";
        $sql = $this->db->query($sql);
        $titulo=$sql->fetch();
        $nome='';
        if($titulo){
            foreach ($titulo as $nome){
                return $nome;
                break;
            }
        }
    }
}
?>