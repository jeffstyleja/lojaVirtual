<html>
<head>
    <title>Nossa Loja</title>
    <link rel="stylesheet" href="/lojaVirtual/assets/css/template.css"/>
</head>

<div class="topo">
    <div class="logo">
        <img src="/lojaVirtual/assets/images/logo_carrinho.png" border="0" width="200" height="100">
    </div>
</div>
<div class="menu">
    <div class="menuint">
        <ul>
            <a href="/lojaVirtual/index.php"><li>Home</li><a/>
            <a href="/lojaVirtual/index.php/empresa/"><li>Empresa</li><a/>
            <?php foreach ($menu as $menuitem): ?>
            <a href="/lojaVirtual/index.php/categoria/ver/<?php echo $menuitem['id'];?>"><li><?php echo utf8_decode($menuitem['titulo']);?></li></a>
            <?php endforeach;?>
            <a href="/lojaVirtual/index.php/contato/"><li>Contato</li><a/>
        </ul>
        <a href="/lojaVirtual/index.php/carrinho">
        <div class="carrinho">
            Carrinho:
            <?php echo (isset($_SESSION['carrinho'])) ? count($_SESSION['carrinho']) ." itens" : '' ; ?>
        </div>
        </a>
    </div>
</div>
<div class="container">
    <?php
    $this->loadViewInTemplate($viewName, $viewData);
    ?>
</div>
<div class="rodape"></div>

</body>

</html>

