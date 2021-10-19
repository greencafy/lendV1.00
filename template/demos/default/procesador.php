<?php
    include("consultas.php");
    
    

        if($_POST["graficas"]){

                $periodo = $_POST["graficas"];
               // $registrosInit = registrosIniciados();
                $resultados = array('cadena 1'=>'otro string', 'cadena 2'=>'otro string 2');
                
               // $resultados = $registrosInit;

                echo json_encode($resultados);
               
               



        }
    
   






?>