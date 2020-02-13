<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 26/12/2018
 * Time: 15:46
 */
class naoencontradoController extends controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->loadTemplate('naoencontrado',array());
    }
}
?>