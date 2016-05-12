<?php


     $con=mysql_connect ("localhost","root","root");
     mysql_select_db("pruebaCofis",$con);
/*
if ($empresa='*')
{
     $sql="select * FROM merce_partes ";
}
    
    $sql="select * FROM merce_partes where empresa='".$empresa."' ";
*/
    $sql="select * FROM merce_partes ";
    $datos=mysql_query($sql,$con);

    $tiempoTrabajado=0;
    $first = 0;//separa los elementos con una coma
    $json = '{"aaData":[';
    //yo uso un foreach, pero pueden cambiarlo por un while ($reg = mysql_fetch_array($res))
     while ($row=mysql_fetch_array($datos)) {

         //$enlace='<a href="'.$row['enlace'].'" target="blank">'.$row['enlace'].'</a>';
         //$nombre = " <a href=".$row['enlace'].">"'"'.$row['enlace'].'""</a> ,";
         
   // $titulo  =  "<a href=".$row['enlace'].">".($row['enlace']) ,"</a>";

     if ($first++) 
            $json .=',';
            $json .= '["'.$row['empresa'].'",';
            $json .= '"'.$row['empresasVisitadas'].'",';
            $json .= '"'.$row['hora_inicio'].'",';
            $json .= '"'.$row['horas'].'",';
            $json .= '"'.$row['minutos'].'",';
            $json .= '"'.$row['descripcion'].'"]'; 
     }
    $json .= ']}';
    print $json;  
?>
 