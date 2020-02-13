<?php foreach ($produtos as $produto): ?>
<div class="produto_foto">
    <img src="/lojaVirtual/assets/images/prods/<?php echo $produto['imagem']; ?>" border="0" width="300" height="300" />
</div>
<div class="produto_info">
    <h1><strong><?php echo $produto['nome']; ?></strong></h1>
    <br><?php echo $produto['descricao']; ?>
    <br><h3><?php echo "R$".$produto['preco'] ?></h3>
    <br><a href="/lojaVirtual/index.php/carrinho/add/<?php echo $produto['id'];?>">Adicionar ao Carrinho</a>
    <?php endforeach; ?>
</div>
<div style="clear:both"></div>
