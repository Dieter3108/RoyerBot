<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include 'conec.php';
    $query=mysqli_query($conn,"SELECT id, nombre FROM datos");
    
    if(isset($_POST['estado']))
    {
        $estado=$_POST['estado'];
        echo $estado;
    }
?>

<html>
    <head>
        <title>
            Ejemplo
        </title>
    </head>
    <body>
        <form action="estados.php" method="post">
            <div style="width:900px; margin:0 auto; border:1px solid #FCC; padding: 10px;">
                <center>
                    <h3>¿De qué estado nos visitas?</h3>
                    <select name="estado">
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['nombre']?>"> <?php echo $datos['nombre']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                    <input type="submit" value="Contestar">
                </center>
            </div>
        </form>
    </body>
</html>