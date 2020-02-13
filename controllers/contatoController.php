<?php
/**
 * Created by PhpStorm.
 * User: jeferson.santos
 * Date: 27/12/2018
 * Time: 08:52
 */
class contatoController extends controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $dados = array('msg'=> '');
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome=addslashes($_POST['nome']);
            $email=addslashes($_POST['email']);
            $mensagem=addslashes($_POST['mensagem']);

            $html = "Nome: ".$nome ."<br />" .
                "Email: ".$email."<br />".
                "Mensagem: ".$mensagem;

            $headers= "From: jeferson.santos@zanthus.com.br" . "\r\n";
            $headers.= 'Reply-To:'.$email."\r\n";
            $headers.='X-Mailer: PHP/'.phpversion();
            mail('jeferson.santos@zanthus.com.br', "Contato pelo site em " . date('d/m/Y'),$html,$headers);
            $dados['msg'] = "Email enviado com sucesso";
        }
        $this->loadTemplate('contato',$dados);
    }
}