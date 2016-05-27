										<hr />
										<p>
											Indique los Pasos para recrear el Síntoma que reporta el Usuario (Máx + #7) 
										</p>
										<div class="group-option">
											<div class="col-lg-10">
                                           	<input name="SINTOMA1" id="sintoma1" type="text" class="form-control" placeholder="#1"  />
											</div>
											<div class="col-lg-2">
											<button onclick="Sintoma2()" type="button" class="btn btn-success">+ Paso</button>
											</div><hr /><br />
											
										</div>
										<div class="group-option" id='oculto2' style='display:none;'>
                        
						        				<div class="col-lg-10">
	                                           	<input name="SINTOMA2" id="sintoma2" type="text" class="form-control" placeholder="#2"  />
												</div>
												<div class="col-lg-2">
												<button onclick="Sintoma3()" type="button" class="btn btn-success">+ Paso</button>
												</div><hr /><br />
						
										</div>
                                		<div class="group-option" id='oculto3' style='display:none;'>
                                   	
									   			<div class="col-lg-10">
	                                           	<input name="SINTOMA3" id="sintoma3" type="text" class="form-control" placeholder="#3"  />
												</div>
												<div class="col-lg-2">
												<button onclick="Sintoma4()" type="button" class="btn btn-success">+ Paso</button>
												</div><hr /><br />
							
							    		</div>
                                		<div class="group-option" id='oculto4' style='display:none;'>
                                   		
                                   				<div class="col-lg-10">
	                                           	<input name="SINTOMA4" id="sintoma4" type="text" class="form-control" placeholder="#4"  />
												</div>
												<div class="col-lg-2">
												<button onclick="Sintoma5()" type="button" class="btn btn-success">+ Paso</button>
												</div><hr /><br />
												
                                		</div>
                                		<div class="group-option" id='oculto5' style='display:none;'>
                                   		
                                   				<div class="col-lg-10">
	                                           	<input name="SINTOMA5" id="sintoma5" type="text" class="form-control" placeholder="#5"  />
												</div>
												<div class="col-lg-2">
												<button onclick="Sintoma6()" type="button" class="btn btn-success">+ Paso</button>
												</div><hr /><br />
												
                                		</div>
                                		<div class="group-option" id='oculto6' style='display:none;'>
                                   				
                                   				<div class="col-lg-10">
	                                           	<input name="SINTOMA6" id="sintoma6" type="text" class="form-control" placeholder="#6"  />
												</div>
												<div class="col-lg-2">
												<button onclick="Sintoma7()" type="button" class="btn btn-success">+ Paso</button>
												</div><hr /><br />
												
                                		</div>
                                		<div class="group-option" id='oculto7' style='display:none;'>
                                   				<div class="col-lg-10">
	                                           	<input name="SINTOMA7" id="sintoma7" type="text" class="form-control" placeholder="#7"  />
												</div>
												<div class="col-lg-2">
												</div><hr /><br />
                                		</div>
                                		
                                		
<script type="text/javascript">
        function Sintoma2(){
        document.getElementById('oculto2').style.display = 'block';}
        function Sintoma3(){
        document.getElementById('oculto3').style.display = 'block';}
        function Sintoma4(){
        document.getElementById('oculto4').style.display = 'block';}
        function Sintoma5(){
        document.getElementById('oculto5').style.display = 'block';}
        function Sintoma6(){
        document.getElementById('oculto6').style.display = 'block';}
        function Sintoma7(){
        document.getElementById('oculto7').style.display = 'block';}
</script>