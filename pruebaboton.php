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
        include 'cone.php';

        $tabla = '<form method="POST"><h1 class="horario-name"><i class="fa fa-calendar" aria-hidden="true"></i> <input type="text"  name="nomenclatura"></h1>
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
<td>
  <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
         <button id="primeralunes">LL</button>
        <form action="Nocturno.php">
      
        <input type="button" onclick="axkani()"  value="#" class="poto" id="primeralunes" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
       <button id="primera">LL</button>
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="segundalunes" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<tr>
<td>06:40 p.m. - 07:00 p.m.</td>
<td COLSPAN="5" style="text-align: center;"> DESCANSO INGENIERÍA</td>
<tr>
<td>Segunda hora <br> 06:40 p.m. - 07:20 p.m.</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<tr>
<td>07:20 p.m. - 07:40 p.m.</td>
<td COLSPAN="5" style="text-align: center;"> DESCANSO TSU</td>
<tr>
<td>Tercera hora <br> 07:40 p.m. - 08:20 p.m.</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<tr>
<td> Cuarta hora <br> 08:20 p.m. - 09:00 p.m.</td>
<td> 
<input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <input type="button" onclick="axkani()"  value="#" class="poto" id="boton_envia" >
        </form>
</td>
<tr>
<div class="a">
 <button  class="boton" name="p">Enviar</button>
 <a href="index.php">Regresar</a>
</div>

</form>';
        echo '<script src="jquery-3.2.1.min.js"></script>'
        . '          <script>
          function axkani(){
          var total= prompt("Ingrese el total de alumnos:","");
          if(total != null){
          window.location="insertar.php?nombre=" + total ;
          alert("Alumnos en clase: " +total);
          }
          else{
          alert("No has ingresado el total")
          }
          }
          </script>';


        echo $tabla;
        if (isset($_POST['p'])) {
            $nome = $_POST['nomenclatura'];
            $sql = "INSERT INTO horario (nomenclatura, tabla)
			values ('$nome','$tabla')";

            mysqli_query($conn, $sql);
        }
        ?>

    &
    <script>
        var d = new Date();
        var hora = d.getHours();
        var minutos = d.getMinutes();

        var a =11 + ":" + 25;
        var b = 16 + ":" + 26;
        var c = 18 + ":" + 40;
        var d = 18 + ":" + 47;
        var e = 19 + ":" + 40;
        var f = 19 + ":" + 47;
        var g = 20 + ":" + 20;
        var h = 20 + ":" + 27;

if (hora + ":" + minutos >= a) {
            document.getElementById("primeralunes").style.display = "none";
              if (hora + ":" + minutos >= b) {
            document.getElementById("primera").style.display = "none";
            
        } 
            
        } 
            
      
    </script>
    </body>
</html>
