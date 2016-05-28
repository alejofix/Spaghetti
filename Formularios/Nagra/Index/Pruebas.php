<?php
include_once ("../Base/Head.html");
include_once ("../Funciones/conexionbasedatos.php");
include_once ("../Funciones/funciones.php");


$sql_select_razon = mysql_query ("SELECT ID, RAZON, ESTADO FROM tbl_ccaa_sec_nagra_razon");
$select_razon = mysql_fetch_array($sql_select_razon);
while($renglon=mysql_fetch_array($sql_select_razon))
	{
//		echo $select_razon['RAZON'];
	} 
?>

<br />
<br />
<br />
<br />


<?php


// Consulta Ctas existentes proyecto NAGRA
$sqlcta = "SELECT ID, CUENTA FROM `tbl_ccaa_sec_nagra_cuentas` WHERE CUENTA ='".$_POST['CUENTA']."'";
$resultacta = mysql_query ($sqlcta);
// valido error de consulta 
		if (! $resultacta)
			{
				echo "La consulta SQL contiene errores.".mysql_error();
				exit();
			}
		else 
			{
			// obtengo ID y Cta  
		    	$row = mysql_fetch_row($resultacta);
				// echo $row[0];
				// echo "<br>".$row[0]."<br>".$row[1]."<br>";
				if(count($row[1]) >= '1')	
				echo $row[1];
				elseif(count($row[1]) == '0') echo 'CUENTA NO REGISTRADA';
				else echo "ERROR DATO!";

 			}			
?>  


<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />



<select >

	<option value="0">::.::</option>
	<?php
	
	foreach($select_razon as $sql_select_razon)
	{
	?>
	<option value="<?php echo $sql_select_razon['ID'];?>"><?php echo $sql_select_razon['RAZON'];?></option>
	<?php
	}
	?>
	
</select>




#		<?php
#			$array = $_GET;
#			echo '<code><pre>';
#			print_r($array);
#			ksort($array);
#			print_r($array);
#			$pdo->prepare('INSERT INTO TABLA (NOMBRE, TEL, ZULU) VALUES (:nombre, ?, ?)');
#			$pdo->bindValue(':nombre', $valor);
#			echo '</code></pre>';
#		?>