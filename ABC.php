<!DOCTYPE html> 
<meta charset="UTF-8">

<?php
$con = mysqli_connect("localhost", "root", "", "registroestacionamientojusto") or die("Error!");
?>

<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        
        <title>Aplicacion</title>
    </HEAD><H1><P ALIGN="CENTER"><FONT SIZE="7" COLOR="BLACK" FACE="Tempus Sans ITC"> Altas, Bajas y Consultas</H1><B><B></FONT> <B><B>
                    <meta charset="utf-8">
                    </head>
                    <body>
                        <form method="POST" action="ABC.php">
                            <label>ID:<br></label>
                            <input type="text" name="idvisitante" placeholder = "Escriba ID"><br />
                            <label>Nombre:<br> </label>
                            <input type="text" name="nombre" placeholder = "Escriba el nombre"><br />
                            <label>Auto:<br></label>
                            <input type="text" name="auto" placeholder = "Escriba nombre de auto"><br /><br>
                            <label>Marca:<br></label>
                            <input type="text" name="marca" placeholder = "Escriba marca"><br /><br>
                            <label>Placas:<br></label>
                            <input type="text" name="placas" placeholder = "Escriba placas"><br /><br>
                            <label>Color:<br></label>
                            <input type="text" name="color" placeholder = "Escriba color de auto"><br /><br>
                            <input type="submit" name="insert" value = "INSERTAR DATOS">

                        </form>

<?php
if (isset($_POST["insert"])) {
    $visitante = $_POST["idvisitante"];
    $nom = $_POST["nombre"];
    $aut = $_POST["auto"];
    $marc = $_POST["marca"];
    $placa = $_POST["placas"];
    $colo = $_POST["color"];


    $insertar = "INSERT INTO visitantes (idvisitante,nombre,nombreauto,marca,placas,color) VALUES ('$visitante', '$nom', '$aut','$marc','$placa','$colo')";
    $ejecutar = mysqli_query($con, $insertar);

    if ($ejecutar) {
        echo "<h3>Insertado Correctamente</h3>";
    }
}
?>
         
                       <table border="1" width ="100%">
                        <tr>
                            <th>ID</th>
                                <th>Nombre</th>
                                <th>Auto</th>
                                <th>Marca</th>
                                <th>Placas</th>
                                <th>Color</th>
                                <th>Editar</th>
                                <th>Borrar</th>    
                        </tr>
          
        <?php
        
        include "./conexion.php";
        $query="select * from visitantes";
        $sql= mysqli_query($conexion, $query);
        
                while($data = mysqli_fetch_array($sql)){
                echo "<tr>";
                    echo "<td>".$data['idvisitante']."</td>";
                    echo "<td>".$data['nombre']."</td>";
                    echo "<td>".$data['nombreauto']."</td>";
                    echo "<td>".$data['marca']."</td>";
                    echo "<td>".$data['placas']."</td>";
                    echo "<td>".$data['color']."</td>";
                echo "<td><a href='formeditar.php?idproducto=".$data['idvisitante']."'>Editar producto</a></td>";
                echo "<td><a href='baja.php?idproducto=".$data['idvisitante']."'>Baja producto</a></td>";
                echo "</tr>";
                }
        ?>
        
                  </table>
                        
                        <br><br><br><br><br><br>
                        
                        <a href="consulta.php" class="btn btn-success">¿Soy un botón o un enlace?</a>
 
                
                    
                            </body>
                            </html>
