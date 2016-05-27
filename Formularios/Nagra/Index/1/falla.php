											<label>Falla</label><br />
											<div class="col-lg-6">
												<p>¿Soluciono la falla?</p>
											</div>
											<div class="group-option">

													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<label class="radio-inline">
														<input name="FALLASOLUCIONADA" id="fallasolucionada" value="1" onclick="Si()" type="radio" name="SI" required="requiered"/>
														SI
													</label>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<label class="radio-inline">
														<input name="FALLASOLUCIONADA" id="fallasolucionada" value="0" onclick="No()" type="radio" name="NO" required="requiered" />
														NO
													</label>

											</div>
										<!-- respuesta SI inicio -->	
											<div class="group-option" id='ocultoSI' style='display:none;'>
                        							
													<br /><hr />
													<label>¿Cómo brindo solución, describa los Pasos?</label> (Máx + #7 / SI)  
													
													<div class="group-option">
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI1" id="solucionsi1" type="text" class="form-control" placeholder="#1"  />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionSi2()" type="button" class="btn btn-success">+ Paso</button>
														</div><hr /><br />
											
													</div>
													
													<div class="group-option" id='sioculto2' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI2" id="solucionsi2" type="text" class="form-control" placeholder="#2" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionSi3()" type="button" class="btn btn-success">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='sioculto3' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI3" id="solucionsi3" type="text" class="form-control" placeholder="#3" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionSi4()" type="button" class="btn btn-success">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='sioculto4' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI4" id="solucionsi4" type="text" class="form-control" placeholder="#4" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionSi5()" type="button" class="btn btn-success">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='sioculto5' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI5" id="solucionsi5" type="text" class="form-control" placeholder="#5" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionSi6()" type="button" class="btn btn-success">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='sioculto6' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI6" id="solucionsi6" type="text" class="form-control" placeholder="#6" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionSi7()" type="button" class="btn btn-success">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='sioculto7' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONSI7" id="solucionsi7" type="text" class="form-control" placeholder="#7" />
														</div>
														<div class="col-lg-2">
														</div><hr /><br />
														
													</div>
													
											</div>
										<!-- respuesta SI  fin -->
										<!-- respuesta NO  inicio -->	
											<div class="group-option" id='ocultoNO' style='display:none;'>
													
													<br /><hr />
													<label>¿Procesos que Realizo y a quien Escalo el caso?</label> (Máx + #7 / NO)  
													
													<div class="group-option">
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO1" id="solucionno1" type="text" class="form-control" placeholder="#1"  />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionNo2()" type="button" class="btn btn-primary">+ Paso</button>
														</div><hr /><br />
											
													</div>
													
													<div class="group-option" id='nooculto2' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO2" id="solucionno2" type="text" class="form-control" placeholder="#2" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionNo3()" type="button" class="btn btn-primary">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='nooculto3' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO3" id="solucionno3" type="text" class="form-control" placeholder="#3" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionNo4()" type="button" class="btn btn-primary">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='nooculto4' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO4" id="solucionno4" type="text" class="form-control" placeholder="#4" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionNo5()" type="button" class="btn btn-primary">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='nooculto5' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO5" id="solucionno5" type="text" class="form-control" placeholder="#5" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionNo6()" type="button" class="btn btn-primary">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='nooculto6' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO6" id="solucionno6" type="text" class="form-control" placeholder="#6" />
														</div>
														<div class="col-lg-2">
															<button onclick="SolucionNo7()" type="button" class="btn btn-primary">+ Paso</button>
														</div><hr /><br />
														
													</div>
													
													<div class="group-option" id='nooculto7' style='display:none;'>
														
														<div class="col-lg-10">
		                                           			<input name="SOLUCIONNO7" id="solucionno7" type="text" class="form-control" placeholder="#7" />
														</div>
														<div class="col-lg-2">
														</div><hr /><br />
														
													</div>
													<div class="group-option">
														<div class="col-lg-10">
				                                            <p class="help-block">¿A quién realizo escalamiento?</p>
															<input name="ESCALAMIENTO" id="escalamiento" class="form-control"/>
				                                        </div>
				                                        <div class="col-lg-2">
				                                        <br />
				                                        <br />
														</div><br /><hr /><br />
													</div>
											
											</div>
										<!-- respuesta NO  fin -->	
											
											
<script type="text/javascript">
		
		function SolucionSi2(){
        document.getElementById('sioculto2').style.display = 'block';}
        function SolucionSi3(){
        document.getElementById('sioculto3').style.display = 'block';}
        function SolucionSi4(){
        document.getElementById('sioculto4').style.display = 'block';}
        function SolucionSi5(){
        document.getElementById('sioculto5').style.display = 'block';}
        function SolucionSi6(){
        document.getElementById('sioculto6').style.display = 'block';}
        function SolucionSi7(){
        document.getElementById('sioculto7').style.display = 'block';}
        
        function SolucionNo2(){
        document.getElementById('nooculto2').style.display = 'block';}
        function SolucionNo3(){
        document.getElementById('nooculto3').style.display = 'block';}
        function SolucionNo4(){
        document.getElementById('nooculto4').style.display = 'block';}
        function SolucionNo5(){
        document.getElementById('nooculto5').style.display = 'block';}
        function SolucionNo6(){
        document.getElementById('nooculto6').style.display = 'block';}
        function SolucionNo7(){
        document.getElementById('nooculto7').style.display = 'block';}
        
		function Si(){
        document.getElementById('ocultoSI').style.display = 'block';
        document.getElementById('ocultoNO').style.display = 'none';
		}
        function No(){
        document.getElementById('ocultoNO').style.display = 'block';
        document.getElementById('ocultoSI').style.display = 'none';
		}
		
</script>
