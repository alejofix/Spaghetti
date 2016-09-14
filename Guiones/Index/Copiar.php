<?php
//variables
	$falla = $_POST['falla'];
	$otronagra = $_POST['otronagra'];
	$correo = $_POST['correo'];
	$ip = $_POST['ip'];
	$campoc = $_POST['campoc'];
	$otrodispositivo = $_POST['otrodispositivo'];
	$dispositivo = $_POST['dispositivo'];
	$marca = $_POST['marca'];
	$observacion = $_POST['observacion'];
?>
<fieldset disabled="disabled">
<p id="disabledInput">
ClaroVideo<?php if($otronagra == 'SI'){echo '-Nagra';}else{} ?>: 
<?php
	echo mb_strtoupper ($falla);
	echo ' / Correo: ' ;
	echo $correo ;
		if($otronagra == 'SI'){
			echo ' / IP: ' ;
				if($ip == 'SI'){echo 'Ok ' ;}
				elseif($ip == 'NO'){echo 'No ' ;}
				else{echo 'Null ' ;}
			echo ' / Correo: ' ;
				if($campoc == 'SI'){echo 'Ok ' ;}
				elseif($campoc == 'NO'){echo 'No ' ;}
				else{echo 'Null ' ;}
			}else{}
?>
/ Otro Dispositivo: 
<?php 
	if ($otrodispositivo == 'NO') {
		echo $otrodispositivo ;
		echo ' / Observación: ' ;
		echo ucwords ($observacion);
	}elseif ($otrodispositivo == 'SI'){
		echo $otrodispositivo ;
		echo ' / Dispositivo: ' ;
		echo $dispositivo ;
		echo ' / Marca: ' ;
		echo ucwords ($marca);
		echo ' / Observación: ' ;
		echo ucwords ($observacion);
	}else {
		echo ' Consulte con el Administrador Error 444 ' ;
	} 
?>
</p>
</fieldset>