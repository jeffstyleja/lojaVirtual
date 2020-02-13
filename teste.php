<?php

$categoria=1;

for($i=6;$i<=100;$i++){
    $produto=$i;
    $quantidade=$i*3;
    $preco=1.5+($i/2);
    if ($i%2==0){
        $imagem='camisa.jpg';
        $categoria=1;
    }
    else{
        $imagem='bone.jpg';
        $categoria=2;
    }
    echo "insert into produtos(id_categoria,nome,imagem,preco,quantidade,descricao) 
values ('{$categoria}','Produto {$produto}','{$imagem}',{$preco},{$quantidade},'Descricao do Produto {$produto}');<br />";
}
