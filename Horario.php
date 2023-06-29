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
        <link href="css/TablaMat.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <?php
        include 'cone.php';
        echo '<form method="POST">
            <h1 class="horario-name"><i class="fa fa-calendar" aria-hidden="true"></i> <input type="text"  name="nomenclatura"></h1>

</from>';
       $tabla='
           
           <form method="POST">
  <div>
<table id="thetable" class="table table-bordered">

<tr>
<th class="horarioheader">Hora</th>
<th class="horarioheader">Lunes</th>
<th class="horarioheader">Martes</th>
<th class="horarioheader">Miércoles</th>
<th class="horarioheader">Jueves</th>
<th class="horarioheader">Viernes</th>
<tr>
<td>Primera hora <br> 08:00 a.m. - 08:50 a.m.</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td> Segunda hora <br> 08:50 a.m. - 09:40 a.m.</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td> Tercera hora <br> 09:40 a.m. - 10:30 a.m.</td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<tr>
<td> Cuarta hora <br> 10:30 a.m. - 11:20 a.m.</td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<tr>
<td>11:20 a.m. - 11:50 a.m.</td>
<th COLSPAN="5" style="text-align:center">DESCANSO</th>
<tr>
<td> Quinta hora <br> 11:50 a.m. - 12:40 p.m.</td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<tr>
<td> Sexta hora <br> 12:40 p.m. - 01:30 p.m.</td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<tr>
<td> Séptima hora <br> 01:30 p.m. - 02:20 p.m.</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td>Octava hora <br> 02:20 p.m. - 03:10 p.m.</td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<td><input type="text"></td>
<tr>
</div>
<input type="submit" name="p">
</form>' 
               ;
       echo $tabla;
	if(isset($_POST['p'])){
             $nome=$_POST['nomenclatura'];
	$sql="INSERT INTO horario (nomenclatura, tabla)
			values ('$nome','$tabla')";
       
        mysqli_query($conn,$sql);
        }
        ?>
    </body>
</html>
