<?php foreach ($produtos as $produto): ?>
<a href="/lojaVirtual/index.php/produto/ver/<?php echo $produto['id'];?>">
    <div class = "produto" >
        <img src="/lojaVirtual/assets/images/prods/<?php echo $produto['imagem']; ?> " border = 0 width=180px height=180px>
        <strong><?php echo $produto['nome']; ?></strong>
        <br><?php echo "R$".$produto['preco'] ?>
    </div>
</a>
<?php endforeach; ?>
    <div style="clear:both"></div>
