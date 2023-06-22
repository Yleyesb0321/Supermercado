<?php

  include_once("../controlador/registrar.php");
  if(isset($_POST['btn_consultar'])){

    $producto = $_POST['ConsultaProducto'];
    $existe = 0;
    
    if($producto==""){
      echo "<script> Swal.fire('<h4>Por favor, Ingrese el nombre del producto para la consulta</h4>')</script>";
    }
    
    else{
      $resultado = mysqli_query($conectar, "SELECT * FROM productos WHERE ProNombre_Producto = '$producto'");
      
      while($consulta = mysqli_fetch_array($resultado)){
        
          echo "
            <center>
              <table width=\"100%\border\"1\">
                <tr>
                  <td><b>Codigo </b></td>
                  <td><center><b>Nombre</b></center></td>
                  <td><center><b>Descripción</b></center></td>
                  <td><center><b>Cantidad</b></center></td>
                  <td><center><b>Precio</b></center></td>
                  <td><center><b>Lote </b></center></td>
                </tr>
                <tr style='border: 1px solid blue';>
                  <td><center>".$consulta['ProCodigo']."</center></td>
                  <td><center>".$consulta['ProNombre_Producto']."</center></td>
                  <td><center>".$consulta['ProDescripcion_Producto']."</center></td>
                  <td><center>".$consulta['ProCantidad_Producto']."</center></td>
                  <td><center>".$consulta['ProPrecio_Producto']."</center></td>
                  <td><center>".$consulta['ProLote_Producto']."</center></td>
                </tr>
              </table>
            </center>";
            
          $existe++;
        }
        
      if($existe==0){
          
        echo "<script> Swal.fire('<h4>El Producto, no existe en nuestra base de datos</h4>')</script>";
          
      }		
    }
  }
  
  
?>