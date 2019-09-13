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
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </header>
    <body>
        <h1>Lista de Usuario</h1>
        <a href="../controller/mapper.php?controller=usuario&action=forn">Adicionar Usuario</a>
        <table  class="table">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>A&ccedil;&atilde;o</th>
        </tr>
        <?php foreach ($return as $value) : ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['nome'] ?></td>
                <td>Edita<br>Excluir</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>