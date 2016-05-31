												<script type="text/javascript">
												function SiRecreado(){
										        document.getElementById('ocultorecreadoSI').style.display = 'block';
										        document.getElementById('ocultorecreadoNO').style.display = 'none';
												}
										        function NoRecreado(){
										        document.getElementById('ocultorecreadoNO').style.display = 'block';
										        document.getElementById('ocultorecreadoSI').style.display = 'none';
												}
												</script>
												<div class="form-group" id='ocultorecreadoSI' style='display:none;'>
												 	
													 <?php
														include_once ("./1/Sintoma.php");
													?> 
													
												</div>
												<div class="form-group" id='ocultorecreadoNO' style='display:none;'>
												 	 <hr />
													 <div class="group-option">
													 	
												 		<div class="col-lg-6">
		                                           	
													   	</div>
														<div class="col-lg-6">
															<fieldset disabled="disabled">
															<button disabled="disabled" type="button" class="btn btn-primary">El escenario no puede ser recreado</button>
															</fieldset>
														</div><hr /><br />
												 	</div>
												</div>