<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conec.php';
        $query=mysqli_query($conn,"SELECT id, nombre FROM datos");
    
    if(isset($_POST['estado']))
    {
        $estado=$_POST['estado'];
        echo $estado;
    }
        ?>
    </body>
</html>
