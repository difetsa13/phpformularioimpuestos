<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width,user_scalable=no,initial-scale=1,maxium-scale=1,minimun-scale=1"
        <title>Gestion de Impuestos</title>
    <?php
    echo$msg=$_GET['msg'];
    ?>

    </head>
    <body>
		<form action="C:\xampp\htdocs\formulario\controlador\coimpuestos.php" method="GET">
            Codigo Impuesto: <input type="text" name="ID_impuesto" id="ID_impuesto"> <br/>
            Nombre de Impuesto: <input type="text" name="Nombre_Impuesto" id="Nombre_Impuesto"> <br/>
            Valor de Impuesto: <input type="text" name="Valor_Impuesto" id="Valor_Impuesto"> <br/>
            <input type="submit" name="boton" id="boton" value="Nuevo">
            <input type="submit" name="boton" id="boton" value="Eliminar">
            <input type="submit" name="boton" id="boton" value="Enviar">
        
        </form>
			
    </body>
</html>
