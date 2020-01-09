<?php





if(isset($_POST['darbuKelimas'])){


	    $user=$_POST['useris'];
		$antraste=$_POST['antraste'];
		$aprasymas=$_POST['aprasymas'];
		$category=$_POST['kategorija'];
		$contacts=$_POST['kontaktai'];
		$pic=$_FILES["nuotrauka"]["name"];
		
		$ext = pathinfo($pic, PATHINFO_EXTENSION);
		$phototitle = str_replace(' ', '-', $antraste) . '-picture.' . $ext;
		if(!empty($antraste)&&!empty($aprasymas)){
			if(keltiNuotr($antraste)){
				
				$req = "INSERT INTO darbai VALUES('', '$user', '$antraste', '$aprasymas', 'papildomai/nuotraukos/$phototitle', '$contacts', '$category')";
				if ($db->query($req) === TRUE){
					$teisingai = 'Darbas įkeltas';
					?><script>window.location="sucess.php"</script><?php
				}else{
				 $klaida = 'Patikrinkite įvestus duomenis';
				}
			}
		}else{
			$klaida = 'Patikrinkite įvestus duomenis';
		}
	}


if(isset($_POST['atnaujintiDarba'])){
		$antraste=$_POST['antraste'];
		$aprasymas=$_POST['aprasymas'];
		$kategorija=$_POST['kategorija'];
		$kontaktai=$_POST['kontaktai'];
		$id=$_POST['producto_id'];
		
		if(!empty($antraste)&&!empty($aprasymas)){
			$req = "UPDATE darbai SET antraste='$antraste', aprasymas='$aprasymas', kontaktai='$kontaktai', kategorija='$kategorija' WHERE id='$id'";
			if ($db->query($req) === TRUE){
				$statusas = "<div class='notifications'>Produktas atnaujintas</div>";
				?><script>window.location="darbu_redagavimas.php"</script><?php
			}else{
				echo "<div>Klaida. Patikrinkite įvestus duomenis ir bandykite dar kartą</div>";
			}
		}else{
			echo "<div>Patikrinkite įvestus duomenis</div>";
		}
	}

	if(isset($_POST['trintiDarba'])){
		$trinamoid=$_POST['proddel'];
		$req="DELETE from darbai where id='$trinamoid'";
		if ($db->query($req) === TRUE){
			$statusas = "<div>Produktas ištrintas.</div>";
			?><script>window.location="darbu_redagavimas.php"</script><?php
		}else{
			$statusas = "<div>Produkto ištrinti nepavyko.</div>";
		}
	}

/**/




if(isset($_POST['atnaujintiDarboSkelbima'])){
		$antraste=$_POST['antraste'];
		$pareigos=$_POST['pareigos'];
		$kategorija=$_POST['kategorija'];
		$reikalavimai=$_POST['reikalavimai'];
		$kontaktai=$_POST['kontaktai'];
		$id=$_POST['skelbimo_id'];
		
		if(!empty($antraste)&&!empty($pareigos)){
			$req = "UPDATE darboskelbimai SET antraste='$antraste', pareigos='$pareigos',reikalavimai='$reikalavimai', kontaktai='$kontaktai', kategorija='$kategorija' WHERE id='$id'";
			if ($db->query($req) === TRUE){
				
				?><script>window.location="sucess2.php"</script><?php
			}else{
				echo "<div>Klaida. Patikrinkite įvestus duomenis ir bandykite dar kartą</div>";
			}
		}else{
			echo "<div>Patikrinkite įvestus duomenis</div>";
		}
	}

	if(isset($_POST['trintiDarba'])){
		$trinamoid=$_POST['proddel'];
		$req="DELETE from darbai where id='$trinamoid'";
		if ($db->query($req) === TRUE){
			$statusas = "<div>Produktas ištrintas.</div>";
			?><script>window.location="darbu_redagavimas.php"</script><?php
		}else{
			$statusas = "<div>Produkto ištrinti nepavyko.</div>";
		}
	}


if(isset($_POST['DSkelimas'])){


	    $user=$_POST['useris'];
		$antraste=$_POST['antraste'];
		$pareigos=$_POST['pareigos'];
		$reikalavimai=$_POST['reikalavimai'];
		$category=$_POST['kategorija'];
		$contacts=$_POST['kontaktai'];
		
		if(!empty($antraste)&&!empty($reikalavimai)){
			
				
				$req = "INSERT INTO darboskelbimai VALUES('', '$user', '$antraste', '$pareigos','$reikalavimai', '$contacts', '$category')";
				if ($db->query($req) === TRUE){
					$statusas = "<div>Produktas pridėtas</div>";
					?><script>window.location="darboSkelbimu_ikelimas.php"</script><?php
				}else{
				 $klaida = 'Patikrinkite įvestus duomenis';
				}
			
		}else{
			$klaida = 'Patikrinkite įvestus duomenis';
		}
	}







?>