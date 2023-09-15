<?php

  include_once("../controlador/registrar.php");
  if(isset($_POST['btn_buscar'])){

    $cajeros = $_POST['ConsultaCajero'];
    $existe = 0;
    
    if($cajeros==""){
      echo "<script> Swal.fire('<h4>Por favor, Ingrese el nombre del cajero para la consulta</h4>')</script>";
    }
    
    else{
      $result = mysqli_query($conectar, "SELECT * FROM ventas WHERE VenNombre_Cajero = '$cajeros'");
      
      while($consulta = mysqli_fetch_array($result)){
        
          echo "
            <center>
              <table width=\"100%\border\"1\">
                <tr class='col';>
                  <td><b>Id Venta</b></td>
                  <td><center><b>Id Cajero</b></center></td>
                  <td><center><b>Nombre Cajero</b></center></td>
                  <td><center><b>Productos</b></center></td>
                  <td><center><b>Fecha</b></center></td>
                  <td><center><b>Hora</b></center></td>
                  <td><center><b>Precio</b></center></td>
                  <td><center><b>Cantidad</b></center></td>
                  <td ><center><b>Total</b></center></td>
                </tr>
                <tr style='border: 1px solid blue'; class='items';>
                  <td><center>".$consulta['idVenta']."</center></td>
                  <td><center>".$consulta['idCajero']."</center></td>
                  <td><center>".$consulta['VenNombre_Cajero']."</center></td>
                  <td><center>".$consulta['VenProducto']."</center></td>
                  <td><center>".$consulta['VenFecha']."</center></td>
                  <td><center>".$consulta['VenHora']."</center></td>
                  <td><center>".$consulta['VenPrecio']."</center></td>
                  <td><center>".$consulta['VenCantidad']."</center></td>
                  <td><center>".$consulta['VenTotal']."</center></td>
                </tr>
              </table>
            </center>";
            
          $existe++;
        }
        
      if($existe==0){
          
        echo "<script> Swal.fire('<h4>El Cajero, no existe en nuestra base de datos</h4>')</script>";
          
      }		
    }
  }
  
  
?>