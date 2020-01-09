<?php include('header.php');?>



<body>



<div class="darbuIkelimas">
<br>
<br>
<?php if (isset($klaida)){?><span class="klaida"><?php echo $klaida?></span><?php }?>
<?php if (isset($teisingai)){?><span class="success"><?php echo $teisingai?></span><?php }?>
    <?php if (isset($nuotraukosError)){?><span class="klaida"><?php echo $nuotraukosError?></span><?php }?>
	<h1 class="DI_H1"> Įkelti naują darbą:</h1>
<br>

<h3 class="DI_H3">Antraštė</h3>
<br>
<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="useris" value="<?php echo gautiVartDuom('id');?>" class="iIvestis">
<input type="text" name="antraste" placeholder="Įveskite pavadinimą" class="DI_Ivestis">
<br>
<h3 class="DI_H3">Aprašymas</h3>
<br>
<textarea name="aprasymas" class="DI_TextArea" placeholder="Įveskite aprašymą"></textarea>
<br>
<h3 class="DI_H3">Įkelti nuotraukas</h3>
<br>

<input type="file" name="nuotrauka">
<br>
<h3 class="DI_H3">Kontaktine informacija</h3>
<br>
<textarea name="kontaktai" class="DI_TextArea" placeholder="Įveskite savo kontaktine informaciją"></textarea>
<br>
<br>
<h3 class="DI_H3">Pasirinkite kategoriją:</h3>
<br>
  <select name="kategorija" class="DI_Select">
              <?php foreach( paiimtiDuomenis('*', 'kategorijos') as $kategorija){
              echo '<option value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
            }?>
          </select>
<br>
<br>
    <br>
<input type="submit" class="kontaktuMygt" name="darbuKelimas" value="Įkelti darbą">
<br>
<br>
<a href="vartotojo.php"> Atgal į vartotojo paskyrą</a>
</form>

</div>


</body>