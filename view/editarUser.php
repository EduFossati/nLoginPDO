<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    require_once '../controller/cUsuario.php';
    $cadUser = new cUsuario();
    $id=null;
    if(isset($_POST['editar'])){
        $id = $_POST['idUser'];
    }
    $user = $cadUser->getUsuarioById($id)
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Editar User</h1>
        <form action="../controller/updateUser.php" method="post">
            <input type="hidden" required value="<?php $user[0] ['idUser'];?>"
            <input type="text" required value="<?php $user[0] ['nomeUser'];?>"
            <br><br>
            <input type="email" desabled value="<?php $user[0] ['email'];?>"
            <br><br>
            <input type="submit" value="Salvar" name="update"/>
            <input type="button" onclick="location.href='listaUsuarios.php'" value="cancelar"/>
        </form>
    </body>
</html>
