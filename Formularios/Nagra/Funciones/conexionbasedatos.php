<?php

$tbl_ccaa_pri_nagra = "tbl_ccaa_pri_nagra";    // tabla primaria
$tbl_ccaa_sec_cuentas = "tbl_ccaa_sec_cuentas"; // tabla lista Clientes cta suscriptor

$link = mysql_connect('localhost', 'root', 'secret')
	or die('No se pudo conectar: ' . mysql_error());
//	echo 'Conexión Establecida ';
mysql_select_db('formularios_ccaa') or die(' No se pudo seleccionar la base de datos');

?>