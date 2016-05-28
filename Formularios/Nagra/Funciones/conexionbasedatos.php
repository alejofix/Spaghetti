<?php

$tbl_ccaa_pri_nagra = "tbl_ccaa_pri_nagra";    // tabla primaria
$tbl_ccaa_sec_cuentas = "tbl_ccaa_sec_cuentas"; // tabla lista Clientes cta suscriptor
$tbl_ccaa_sec_nagra_razon = "tbl_ccaa_sec_nagra_razon"; // 
$tbl_ccaa_sec_nagra_frecuencia = "tbl_ccaa_sec_nagra_frecuencia"; //

$link = mysql_connect('localhost', 'root', 'secret')
	or die('No se pudo conectar: ' . mysql_error());
//	echo 'Conexión Establecida ';
mysql_select_db('formularios_ccaa') or die(' No se pudo seleccionar la base de datos');
mysql_set_charset('utf8',$link);
?>