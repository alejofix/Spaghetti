	<script type="text/javascript">
		function Sinagra(){
	    document.getElementById('ocultonagraSI').style.display = 'block';
	    document.getElementById('ocultonagraNO').style.display = 'none';
		}
	    function Nonagra(){
	    document.getElementById('ocultonagraNO').style.display = 'block';
	    document.getElementById('ocultonagraSI').style.display = 'none';
		}
	</script>
	
	<div class="form-group" id='ocultonagraSI' style='display:none;'>
										
										<div class="col-lg-6">
                                            <label>¿ Toma IP Valida ?</label><br />
                                        	<select class="form-control" name="ip" id="ip">
                                        		<option value="">Seleccione una Opción</option>
												<optgroup>
													<option value="SI">SI</option>
	                                                <option value="NO">NO</option>
												</optgroup>
                                            </select><br />
                                        </div>
										<div class="col-lg-6">
                                            <label>¿ Toma campo Correo ?</label><br />
                                        	<select class="form-control" name="campoc" id="campoc">
                                        		<option value="">Seleccione una Opción</option>
												<optgroup>
													<option value="SI">SI</option>
	                                                <option value="NO">NO</option>
												</optgroup>
                                            </select><br />
                                        </div>										
										
	</div>
	<div class="form-group" id='ocultonagraNO' style='display:none;'>
	 	
	</div>