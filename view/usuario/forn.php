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
        <h1>Novo Usuario</h1>
        <form  action="../controller/mapper.php?controller=usuario&action=save" method="POST">
           
            <label>Nome</label>
            <input type="text" name="nome">
          
            <input type="submit" value="Salvar">
            
        </form>
    </body>
</html>