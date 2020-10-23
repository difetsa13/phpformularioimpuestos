<$php
//1. definicion de la clase
//Autor: Diego Tovar
require_once("clconexion.php");
classimpuesto
{
    //2. definicion de los atributos      
        var$ID_impuesto;
        var$Nombre_Impuesto;
        var$Valor_Impuesto;
    //3.creacion del constructor
    functionconstructor($pID_impuesto,$pNombre_Impuesto,$pValor_Impuesto)
    {
        $this->$ID_impuesto=$pID_impuesto;
        $this->$Nombre_Impuesto=$pNombre_Impuesto;
        $this->$Valor_Impuesto=$pID_Impuesto;
    }
    //metodos del diagrama de clases
    
    functioninsertar_impuesto($pNombre_Impuesto,$pValor_Impuesto)
    {
        echo$pNombe_Impuesto; echo$pValor_Impuesto;
        $objeto=newconexion;
        $conex=$objeto->conectar();    
        $sql="CALL insertar_impuesto ('$pNombre_Impuesto','$pValor_Impuesto')";
        $ejecutar=mysqli_query($conex,$sql);
        
        if($ejecutar)
        {
            $msg="Registro insertado correctamente con los datos nombre :'.$pNombre_Impuesto.' y '.$pValor_Impuesto.'";
            return$msg;
        }
        else
        {
            echo"Has tenido el siguiente error : <br/>".mysql_error();
        }
    }
    functionmodificar_impuesto($pID_impuesto,$pNombre_Impuesto,$pValor_Impuesto)
    {
    
    }
    functionlistar_impuesto()
    {
    
    }
    functionbuscar_impuesto()
    {
    
    }
}
      
      
$>
      