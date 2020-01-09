<?php include('header.php');

?>
<body>

	<div class="darbuIkelimas">
				<?php if(isset($_GET["p"])){
					$postas=isrinktDuom($_GET["p"]);
					echo '<h1 class="editH1">'.'Prekės pavadinimas: '.$postas['antraste'].'</h1>';
					echo '<form method="post" action="" class="formosCentras" enctype="multipart/form-data">
						<label> Pavadinimo koregavimas:</label>
						<br>
						    <input type="text" class="DI_Ivestis" name="antraste" value="'.$postas['antraste'].'" placeholder="Produkto pavadinimas"/>
						    <br>
						    <br>

						    <input type="hidden" name="producto_id" value="'.$postas['id'].'"/>
						    <br>
						    <br>
						    <label> Aprašymo koregavimas:</label>
						  <br>
						    <textarea name="aprasymas" class="DI_TextArea" placeholder="Įveskite aprašymą">'.$postas['aprasymas'].'</textarea>
						    <br>
						    <br>
						    <label> Kontaktų koregavimas:</label>
						    <br>
					
						    <textarea name="kontaktai" class="DI_TextArea" placeholder="Įveskite savo kontaktine informaciją">'.$postas['kontaktai'].'</textarea>
						    <br>
						    <br>
								<label for="kategorijos">Pasirinkite kategoriją:</label>
						    <select name="kategorija" class="DI_Select"><br><br>';
						    	foreach( paiimtiDuomenis('*', 'kategorijos') as $kategorija){
						    		if($kategorija['id']==$postas['category']){
						    			echo '<option selected value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
						    		}else{
										echo '<option value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
									}
								}
								echo '</select><br><br>';
								
								
								


								echo '
								<br>
								<br>
								<input type="submit" class="kontaktuMygt" value="Atnaujinti" name="atnaujintiDarba"/>
								<br>
								<br>
						';
					echo '<form method="post" action="">
								<input type="hidden" name="proddel" value="'.$postas['id'].'"/>
								<button class="trinti" name="trintiDarba">Trinti</button>
							</form>';
							}



else if(isset($_GET["s"])){
					$postas=isrinktDuomSkelbimu($_GET["s"]);
					echo '<h1 class="editH1">'.'Skelbimo antraštė: '.$postas['antraste'].'</h1>';
					echo '<form method="post" action="" class="formosCentras" enctype="multipart/form-data">
						<label> Antraštės koregavimas:</label>
						<br>
						    <input type="text" class="DI_Ivestis" name="antraste" value="'.$postas['antraste'].'" placeholder="Produkto pavadinimas"/>
						    <br>
						    <br>

						    <input type="hidden" name="skelbimo_id" value="'.$postas['id'].'"/>
						    <br>
						    <br>
						    <label> Pareigų koregavimas:</label>
						  <br>
						    <textarea name="pareigos" class="DI_TextArea" placeholder="Įveskite aprašymą">'.$postas['pareigos'].'</textarea>
						    <br>
						    <br>
						      <label> Reikalavimų koregavimas:</label>
						      <br>

							<textarea name="reikalavimai" class="DI_TextArea" placeholder="Įveskite aprašymą">'.$postas['reikalavimai'].'</textarea>
							<br>
							<br>
						    <label> Kontaktų koregavimas:</label>
						    <br>
					
						    <textarea name="kontaktai" class="DI_TextArea" placeholder="Įveskite savo kontaktine informaciją">'.$postas['kontaktai'].'</textarea>
						    <br>
						    <br>
								<label for="kategorijos">Pasirinkite kategoriją:</label>
						    <select name="kategorija" class="DI_Select"><br><br>';
						    	foreach( paiimtiDuomenis('*', 'skelbimukategorijos') as $kategorija){
						    		if($kategorija['id']==$postas['category']){
						    			echo '<option selected value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
						    		}else{
										echo '<option value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
									}
								}
								echo '</select><br><br>';
								
								
								


								echo '
								<br>
								<br>
								<input type="submit" class="kontaktuMygt" value="Atnaujinti" name="atnaujintiDarboSkelbima"/>
								<br>
								<br>
						';
					echo '<form method="post" action="">
								<input type="hidden" name="proddel" value="'.$postas['id'].'"/>
								<button class="trinti" name="trintiSkelbima">Trinti</button>
							</form>';
							}










							
				else { ?>
					<script>window.location="darbu_redagavimas.php"</script>

  ?>
					
				<?php } ?>

			
			

			</div>
		</div>


</body>

<?php include('extraFunkc.php');?>
