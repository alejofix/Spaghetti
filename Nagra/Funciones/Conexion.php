<?php
	
	class Conexion {
		
		private $baseDatos = 'formularios_ccaa';
		private $host = 'localhost';
		private $usuario = 'root';
		private $password = 'secret';
		private $puerto = 3306;
		
		private $contenedor;
		
		private function dsn() {
			return sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8', $this->host, $this->puerto, $this->baseDatos);
		}
		
		public function pdo() {
			if(is_object($this->contenedor) == true):
				return $this->contenedor;
			else:
				return $this->contenedor = new PDO($this->dsn(), $this->usuario, $this->password);
			endif;
		}
	}
	
######## select para RAZONES ######## 
	//	require implode(DIRECTORY_SEPARATOR, array(dirname(__DIR__), 'Funciones', 'Conexion.php'));
	$conexionObj = new Conexion();
	$conexion = $conexionObj->pdo();
	
	$consulta = $conexion->prepare('SELECT * FROM tbl_ccaa_select_nagra_razon WHERE ESTADO = ?');
	$consulta->bindValue(1, 1);
	$consulta->execute();
	
	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
######## select para RAZONES ######## 
######## select para FRECUENCIAS ######## 
	$consulta2 = $conexion->prepare('SELECT * FROM tbl_ccaa_select_nagra_frecuencia WHERE ESTADO = ?');
	$consulta2->bindValue(1, 1);
	$consulta2->execute();
	
	$resultado2 = $consulta2->fetchAll(PDO::FETCH_ASSOC);
######## select para FRECUENCIAS ######## 
	
?>