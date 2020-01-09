<?php
require_once("database.php");

function isrinktDuom($id){
		global $db;
		$req="SELECT * FROM darbai WHERE id='$id'";
		$req=$db->query($req);
		$rezultatas=$req->fetch_assoc();
		return $rezultatas;
	}





function isrinktDuomSkelbimu($id){
		global $db;
		$req="SELECT * FROM darboskelbimai WHERE id='$id'";
		$req=$db->query($req);
		$rezultatas=$req->fetch_assoc();
		return $rezultatas;
	}



function gautiVarda($id){
		global $db;
		
		$req="SELECT name FROM users WHERE id='$id'";
		$req=$db->query($req);
		$rezultatas=array();
		while ($row = $req->fetch_assoc()) {
			array_push($rezultatas, $row);

		}
		return $rezultatas;
	}

function paiimtiDuomenis($duomenys, $lentele){
		global $db;
		$req="SELECT $duomenys FROM $lentele";
		$req=$db->query($req);
		$rezultatas=array();
		while ($row = $req->fetch_assoc()) {
			array_push($rezultatas, $row);

		}
		return $rezultatas;
	}


function paiimtiDuomenisID($duomenys, $lentele){
		global $db;
		$user = $_SESSION['userio_id'];
		$req="SELECT $duomenys FROM $lentele WHERE user_id='$user'";
		$req=$db->query($req);
		$rezultatas=array();
		while ($row = $req->fetch_assoc()) {
			array_push($rezultatas, $row);

		}
		return $rezultatas;
	}



	function masyv($needle, $haystack, $strict = false) {
	    foreach ($haystack as $item) {
	        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && masyv($needle, $item, $strict))) {
	            return true;
	        }
	    }
	    return false;
	}

	function gautiVartDuom($field){
		global $db;
		$userid=$_SESSION["userio_id"];
		$uzklausa="SELECT $field FROM users WHERE id='$userid'";
		$atsakas=$db->query($uzklausa);
		$atsakas=$atsakas->fetch_assoc();
		return $atsakas[$field];
		
	}



function keltiNuotr($name){
		$target_dir = "papildomai/nuotraukos/";
		$target_file = $target_dir . basename($_FILES["nuotrauka"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$target_file = $target_dir . str_replace(' ', '-', $name) .'-picture.'.$imageFileType;
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["nuotrauka"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		       
		        $nuotraukosError = 'Pasirinktas failas nera nuotrauka';
		        $uploadOk = 0;
		    }
		}
		if (file_exists($target_file)) {
		     $nuotraukosError = 'Klaida';
		    $uploadOk = 0;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		    $nuotraukosError = 'Blogas formatas';
		    $uploadOk = 0;
		}
		if ($uploadOk == 0) {
		    $nuotraukosError = 'Nuotrauka neikelta';
		    return false;
		} else {
		    if (move_uploaded_file($_FILES["nuotrauka"]["tmp_name"], $target_file)) {
		    	return true;
		    } else {
		         $nuotraukosError = 'Klaida';
		        return false;
		    }
		}
	}






?>