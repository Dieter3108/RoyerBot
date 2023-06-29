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
        <link href="css/InicioCSS.css" rel="stylesheet" type="text/css"/>
        <link href="css/divs.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        
        ?>
        <header>
            <div class="derecha">
            <a href="#">Lista de horarios</a>
            <a href="HorarioN.php">Horario noche</a>
            <a href="Horario.php">Horario mañana</a>
            <a href="#">Calendario</a>
            </div>
          </header>
        <div class="divPadre" id="horarioM">
            <div class="divHijo">
        <form id="horariofrm" method="POST">
            <label>Nomenclatura:</label>
            <input  type="text" name="nombre" >
         </form>
            <div class="modal-footer">
          <button type="button" class="create-horario btn btn-success"><i class="fa fa-calendar-check-o"></i> Crear</button>
          <button type="button" class="cancel-new btn btn-danger"  data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
            </div>
        </div>
        </div>
        <script>
            function HM() {
            document.getElementById("horarioM").style.display = "block";
        }
        </script>
        <div class="iconocentro">
            <img src="event-date-and-time-symbol (4).png" class="img"/></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        
         <footer>
            <hr class="linea">
            <br>
            <br> 
            <br>
            <br>
        </footer>
    </body>
</html>
