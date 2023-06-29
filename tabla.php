<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>hh</title>
        <link href="css/Body.css" rel="stylesheet" type="text/css"/>
        <link href="css/tablas.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'cone.php';
        $nombre=$_POST['nombre'];
       $sql=("SELECT * FROM horario WHERE nomenclatura='$nombre'");
       $registro=$conn->query($sql);
       while ($reg= $registro->fetch_assoc()){
        echo$reg['nomenclatura'].'<br>';
           echo $reg['tabla']."<br>";
       }
        ?>
    </body>
</html>
