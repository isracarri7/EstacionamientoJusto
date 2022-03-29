


<table border="1" width ="100%">
                        <tr>
                            <th>ID</th>
                                <th>Nombre</th>
                                <th>Auto</th>
                                <th>Marca</th>
                                <th>Placas</th>
                                <th>Color</th>
                                  
                        </tr>
          
        <?php
        
        include "./conexion.php";
        $query="select * from visitantes where idvisitante = 5";
        $sql= mysqli_query($conexion, $query);
        
                while($data = mysqli_fetch_array($sql)){
                echo "<tr>";
                    echo "<td>".$data['idvisitante']."</td>";
                    echo "<td>".$data['nombre']."</td>";
                    echo "<td>".$data['nombreauto']."</td>";
                    echo "<td>".$data['marca']."</td>";
                    echo "<td>".$data['placas']."</td>";
                    echo "<td>".$data['color']."</td>";
                    
                    }
        ?>
        
                  </table>