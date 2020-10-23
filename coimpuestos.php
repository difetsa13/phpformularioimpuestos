<?php
//modulo impuestos
//autor: Diego Tovar
//descarga variables del formulario impuesto

$ID_impuesto=$_GET['ID_impuesto'];
$Nombre_Impuesto=$_GET['Nombre_Impuesto'];
$Valor_Impuesto=$_GET['Valor_Impuesto'];
$boton=$_GET['boton'];

//vincula la clase
require_once("C:\xampp\htdocs\formulario\clases\climpuestos.php");
//ejecutar condicional

switch($boton)
                                       
{
    case"nuevo";
        

        $objeto=newimpuesto;
        $ejecutar=$objeto->Insertar_Impuesto($ID_impuesto,$Nombre_Impuesto,$Valor_Impuesto);
        header("Location:C:\xampp\htdocs\formulario\index.php?msg".$ejecutar);
            
    break;
    
    case"editar";
                
                Echo"hizo click en editar"; 
    
    break;
}

?>