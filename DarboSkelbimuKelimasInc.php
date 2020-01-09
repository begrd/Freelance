<?php



	require_once("database.php");




	
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



	if(isset($_POST['trintiSkelbima'])){
		$trinamoid=$_POST['proddel'];
		$req="DELETE from darboskelbimai where id='$trinamoid'";
		if ($db->query($req) === TRUE){
			$statusas = "<div>Produktas ištrintas.</div>";
			?><script>window.location="darbu_redagavimas.php"</script><?php
		}else{
			$statusas = "<div>Produkto ištrinti nepavyko.</div>";
		}
	}








?>