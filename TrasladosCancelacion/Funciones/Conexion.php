<?php

function conectarse()//funcion para hacer conexion a base de datos y escoger base de datos
{		
   if (!($bd_datos_sql=mysql_connect("localhost",'root','secret')))
 
   {
      echo "Error conectando a la base de datos .";
	  echo $bd_datos_sql;
      exit();
   }
   if (!mysql_select_db("formularios_ccaa",$bd_datos_sql))//seleccionar base de datos
   {
      echo "Error seleccionando la base de datos verifique por favor.";
      exit();
   }
   return $bd_datos_sql;
}

?>
