<h1>Carrinho de Compras</h1>
<table border="0" width="100%">
    <tr>
        <td>Imagem</td>
        <td>Nome do Produto</td>
        <td>Valor</td>
        <td>Ações</td>
    </tr>
    <?php $subtotal = 0 ; ?>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><img src="/lojaVirtual/assets/images/prods/<?php echo $produto['imagem']; ?>" border="0" width="60" ></td>
        <td><?php echo $produto['nome'];?></td>
        <td><?php echo 'R$ '.$produto['preco'];?></td>
        <td>
            <a href="/lojaVirtual/index.php/carrinho/del/<?php echo $produto['id']; ?>">Remover</a>
        </td>
    </tr>
    <?php $subtotal += $produto['preco']; ?>
    <?php endforeach;?>
    <tr>
        <td colspan="2" align="right">Subtotal: </td>
        <td><?php echo 'R$ '. $subtotal;?></td>
        <td>
            <a href="/lojaVirtual/index.php/carrinho/finalizar/<?php echo $produto['id']; ?>">Finalizar</a>
        </td>
    </tr>
</table>