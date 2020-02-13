<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 27/12/2018
 * Time: 08:52
 */
class empresaController extends controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->loadTemplate('empresa',array());
    }
}