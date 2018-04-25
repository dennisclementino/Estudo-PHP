<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <header>
        <title> Minha vendinha</title>

    </header>
    <body>
        <h1>Novo Produto</h1>
        <form  action="../controller/mapper.php?controller=produto&action=save" method="POST">
            <label>Cod</label>
            <input type="text" name="cod">
            </br>
            <label>Nome</label>
            <input type="text" name="nome_produto">
            </br>
            <label>Valor</label>
            <input type="text" name="valor">
            </br>
            <label>Descri&ccedil;&atilde;o</label>
            <input type="text" name="descricao">
            <br>
            <input type="submit" value="Salvar">
            
        </form>
    </body>
</html>