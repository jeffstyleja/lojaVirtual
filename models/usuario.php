<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 13/06/2018
 * Time: 10:12
 */
include '../core/model.php';
class usuario extends model{
    public function getUsuario(){
        try{
            $array = array();
            $sql = "select * from USUARIOS";
            $sql = $this->db->query($sql);
            $array = $sql->fetchAll();
            return $array;
        }catch (PDOException $e){
            echo "Falhou: ".$e;
        }


    }
}

?>