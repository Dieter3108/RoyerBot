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
        <link href="css/TablaMat_1.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <?php
        include 'cone.php';
        echo '<form method="POST">
            <h1 class="horario-name"><i class="fa fa-calendar" aria-hidden="true"></i> <input type="text" placeholder="Nomenclatura del grupo"  name="nomenclatura"></h1>

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
<td>Primera hora <br> 06:00 p.m. - 06:40 p.m.</td>
<td> <input type="text" class="c01">  </td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td>06:40 p.m. - 07:00 p.m.</td>
<td COLSPAN="5" style="text-align: center;"> DESCANSO INGENIERÍA</td>
<tr>
<td>Segunda hora <br> 06:40 p.m. - 07:20 p.m.</td>
<td> </td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td>07:20 p.m. - 07:40 p.m.</td>
<td COLSPAN="5" style="text-align: center;"> DESCANSO TSU</td>
<tr>
<td>Tercera hora <br> 07:40 p.m. - 08:20 p.m.</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td> Cuarta hora <br> 08:20 p.m. - 09:00 p.m.</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
</div>
<button class="boton"name="p">Enviar</button>
</form>
<script>
var d=new Date();
var hora= d.getHours();
var minutos= d.getMinutes8);

var a= 18+":"+7;
var b= 18+":"+0;
var c= 18+":"+40;
var d= 18+":"+47;
var e= 19+":"+40;
var f= 19+":"+47; 
var g= 20+":"+20;
var h= 20+":"+27;

if(hora+":"+ minutos === b) {
document.getElementById("primeralunes").style.display="none";
   if(hora+":"+ minutos >= a) {
document.getElementById("primeralunes").style.display="box";
    }
}
if(hora+":"+ minutos === c) {
document.getElementById("primeramartes").style.display="none";
   if(hora+":"+ minutos >= d) {
   document.getElementById("primeramartes").style.display="box";
    }
}
if(hora+":"+ minutos === e) {
  document.getElementById("primeramiercoles").style.display="none";
if(hora+":"+ minutos >= f) {
  document.getElementById("primeramiercoles").style.display="box";
    }
}
if(hora+":"+ minutos === g) {
  document.getElementById("").style.display="none";
if(hora+":"+ minutos >= h) {
  document.getElementById("").style.display="box";
    }
}

</script>
'; 
        echo $tabla;
       if(isset($_POST['p'])){
           $nome=$_POST['nomenclatura'];
           if($nome==null){
         echo'ERROR';
       }
        else{
            $nome=$_POST['nomenclatura'];
	$sql="INSERT INTO horario (nomenclatura, tabla)
			values ('$nome','$tabla')";
             mysqli_query($conn,$sql);
        }
      
        }
        
        ?>
    </body>
</html>
