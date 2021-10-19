<?php


function registrosIniciados($tiempo, $fechaUser){
    $conn = mysqli_connect("localhost","root","root","lendpal");
    echo nl2br("case \n  \n");
  

    switch ($tiempo) {
        
        case "diario":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM registros_iniciados WHERE fecha BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_etapa"][$x] = $row["id_etapa"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
        case "semanal":
            
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 week' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM registros_iniciados WHERE fecha BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_etapa"][$x] = $row["id_etapa"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
        case "mensual":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $fechaUser = date('Y-m-j', $fechaUser);
            echo $fechaUser;
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM registros_iniciados WHERE fecha BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_etapa"][$x] = $row["id_etapa"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
        case "anual":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 year' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM registros_iniciados WHERE fecha BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_etapa"][$x] = $row["id_etapa"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
    }
}
function llamadaRentas($tiempo){
    $conn = mysqli_connect("localhost","root","root","lendpal");
    echo nl2br("case \n  \n");
    $tiempo=$nuevoTiempo;
    switch ($nuevoTiempo) {
        
        case "diario":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM rentas_programadas WHERE fecha_inicio BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_producto"][$x] = $row["id_producto"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha_inicio"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
        case "semanal":
            
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 week' , strtotime ( $fecha ) ) ;
          
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

            $f1 = $nuevafecha ;
            $f2 = $fecha;

            echo  $f1;
            echo $f2;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM rentas_programadas WHERE fecha_inicio BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_producto"][$x] = $row["id_producto"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha_inicio"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
        case "mensual":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM rentas_programadas WHERE fecha_inicio BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_producto"][$x] = $row["id_producto"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha_inicio"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
        case "anual":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 year' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $f1 = $nuevafecha ;
            $f2 = $fecha;
       
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM rentas_programadas WHERE fecha_inicio BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_cliente"][$x] = $row["id_cliente"];
                       $resultados["id_producto"][$x] = $row["id_producto"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["fecha_inicio"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                  
                   
                   return $resultados;
           }else{
                echo "false";
           }
            //-----------------------------------------------------------------------------------
    }
}

function llamadaGanancias($tiempo){
    $conn = mysqli_connect("localhost","root","root","lendpal");
    $tiempo=$nuevoTiempo;
    switch ($nuevoTiempo) {

        case "diario":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

        echo "----------Ganancias------------";
         $f1 = $nuevafecha ;
         $f2 = $fecha;
         echo $f1;
         echo $f2;
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM ordenes WHERE status_pago = 'paid' AND creado_en BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_orden"][$x] = $row["id_orden"];
                       $resultados["id_renta"][$x] = $row["id_renta"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["creado_en"]; //equivale a las fechas
                       $total = $total+$row["monto"];
                       $resultados["monto"][$x] = $row["monto"]; //equivale al monto

                   }
                   print_r($resultados); 
                   print_r($total);
                   echo "----------Fin Ganancias------------";
                   
                   return $resultados;
           }else{
                echo "false";
           }
            echo "i es una diario";
            break;
        case "semanal":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 week' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

        echo "----------Ganancias------------";
         $f1 = $nuevafecha ;
         $f2 = $fecha;
         echo $f1;
         echo $f2;
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM ordenes WHERE status_pago = 'paid' AND creado_en BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_orden"][$x] = $row["id_orden"];
                       $resultados["id_renta"][$x] = $row["id_renta"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["creado_en"]; //equivale a las fechas
                       $total = $total+$row["monto"];
                       $resultados["monto"][$x] = $row["monto"]; //equivale al monto
                   }
                  print_r($resultados); 
                   print_r($total); 
                   echo "----------Fin Ganancias------------";
                   
                   return $resultados;
           }else{
                echo "false";
           }
            echo "i es una semanal";
            break;
        case "mensual":

            $fecha = date('Y-m-d');
            $nuevafecha = strtotime ( '-1 month' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-d' , $nuevafecha );
           

       
         $f1 = $nuevafecha;
         $f2 = $fecha;
        
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM ordenes WHERE status_pago = 'paid' AND creado_en BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   echo $rows;
                   for($x=0; $x<$rows; $x++){
                     //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_orden"][$x] = $row["id_orden"];
                       $resultados["id_renta"][$x] = $row["id_renta"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["creado_en"]; //equivale a las fechas
                       $total = $total+$row["monto"];
                       $resultados["monto"][$x] = $row["monto"]; //equivale al monto
                   }
                  print_r($resultados); 
                   print_r($total);
                   
                   
                   return $resultados;
           }else{
                echo "false";
           }
            
            break;
        case "anual":
            $fecha = date('Y-m-j');
            $nuevafecha = strtotime ( '-1 year' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

        echo "----------Ganancias------------";
         $f1 = $fecha ;
         $f2 = $nuevafecha;
         echo $f1;
         echo $f2;
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM ordenes WHERE status_pago = 'paid' AND creado_en BETWEEN ? AND ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("ss",$val0,$val1);
           $val0 = $f1;
           $val1 = $f2;
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                      //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_orden"][$x] = $row["id_orden"];
                       $resultados["id_renta"][$x] = $row["id_renta"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["creado_en"]; //equivale a las fechas
                       $total = $total+$row["monto"];
                       $resultados["monto"][$x] = $row["monto"]; //equivale al monto
                   }
                  print_r($resultados); 
                   print_r($total);
                   echo "----------Fin Ganancias------------";
                   
                   return $resultados;
           }else{
                echo "false";
           }
            echo "i es un anual";
            break;
    }

   
    

}
function llamadaOrdenes(){
     


         $conn = mysqli_connect("localhost","root","root","lendpal");
           //$f1 =  date('Y-m-j');
             $f2 = '2021-10-14 23:04:11';
           // $f2 = date('Y-m-j');
           $resultados = array();
            //prepare statement
           $sql = "SELECT * FROM ordenes WHERE creado_en = ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("s",$val0);
           $val0 = $f2;
           
          
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["id_orden"][$x] = $row["id_orden"];
                       $resultados["id_renta"][$x] = $row["id_renta"]; //equivale a los pasos completados
                       $resultados["fechas"][$x] = $row["creado_en"]; //equivale a las fechas

                   }
                   print_r($resultados); 
                   
                   return $resultados;
           }else{
                echo "false";
           }

}
function llamadaPostal(){
     


          $conn = mysqli_connect("localhost","root","root","lendpal");
           
           $resultados = array();
            //prepare statement
           $sql = "SELECT cod_postal FROM clientes INNER JOIN registros_iniciados WHERE clientes.id_cliente = registros_iniciados.id_cliente";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("s",$val0);
           $val0 = $f2;
           
          
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["cod_postal"][$x] = $row["cod_postal"];
                      
                   }
                   print_r($resultados); 
                   
                   return $resultados;
           }else{
                echo "false";
           }

}
function llamadaCategoria(){
     


          $conn = mysqli_connect("localhost","root","root","lendpal");
           
           $resultados = array();
            //prepare statement
           $sql = "SELECT categoria FROM categorias LEFT JOIN categorias_producto ON categorias_producto.id_categoria = categorias.id_categoria";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("s",$val0);
           $val0 = $f2;
           
          
          
           $status = $stmt->execute();
           $result = $stmt->get_result();
           if($status){
                   $rows = $result->num_rows;
                   
                   for($x=0; $x<$rows; $x++){
                       //Siempre tiene que estar en tu for loop
                       $row = $result->fetch_assoc();
                       $resultados["categorias"][$x] = $row["categoria"];
                      
                   }
                   print_r($resultados); 
                   
                   return $resultados;
           }else{
                echo "false";
           }

}
registrosIniciados("mensual", "2021-09-09");
// llamadaRentas();
//llamadaOrdenes();
 //llamadaGanancias();
 // llamadaPostal();
 //llamadaCategoria();



?>