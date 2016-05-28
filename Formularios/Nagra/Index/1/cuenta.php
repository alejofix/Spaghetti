<?php
// Consulta Ctas existentes proyecto NAGRA
$sqlcta = "SELECT ID, CUENTA FROM `tbl_ccaa_sec_nagra_cuentas` WHERE CUENTA ='".ltrim($_POST['CUENTA'])."'";
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
					{
					echo '<label>Cuenta de Suscriptor:</label><br />';
					echo '<div class="col-lg-8">';
					echo '<input class="form-control" value="'.$row[1].'" disabled="disabled" />';
					echo '<input type="hidden" name="CUENTA" id="cuenta" class="form-control" value="'.$row[1].'" requiered="requiered" />';
					echo '</div>';
					echo '
							</button>
                            	<button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-check"></i>
                            </button>
				 		';
					}
				elseif(count($row[1]) == '0')
					{
					header("location: ./Index2.php");
					}
				else
					{ 
					echo "ERROR DATO!";
					}
					
				//	print_r($_POST); 
			}	
			 		
?> 		