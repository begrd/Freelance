<?php include('header.php');?>



<body>



<div class="darbuIkelimas">
<br>
<br>
<?php if (isset($klaida)){?><span class="klaida"><?php echo $klaida?></span><?php }?>
    
	<h1 class="DI_H1"> Įkelti naują darbo skelbimą:</h1>
<br>

<h3 class="DI_H3">Skelbimo antraštė</h3>
<br>
<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="useris" value="<?php echo gautiVartDuom('id');?>" class="iIvestis">
<input type="text" name="antraste" placeholder="Įveskite pavadinimą" class="DI_Ivestis">
<br>

<h3 class="DI_H3">Pareigos/Pobūdis</h3>
<textarea name="pareigos" class="DI_TextArea" placeholder="Įveskite aprašymą"></textarea>
<br>


<br>
<br>
<h3 class="DI_H3">Darbo reikalavimai</h3>
<br>
<textarea name="reikalavimai" class="DI_TextArea" placeholder="Įveskite savo kontaktine informaciją"></textarea>
<br>
<br>

<h3 class="DI_H3">Kontaktinė informacija</h3>
<br>
<textarea name="kontaktai" class="DI_TextArea" placeholder="Įveskite savo kontaktine informaciją"></textarea>
<br>
<br>
<h3 class="DI_H3">Pasirinkite kategoriją:</h3>
<br>
  <select name="kategorija" class="DI_Select">
              <?php foreach( paiimtiDuomenis('*', 'skelbimukategorijos') as $kategorija){
              echo '<option value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
            }?>
          </select>
<br>
<br>
    <br>
<input type="submit" class="kontaktuMygt" name="DSkelimas" value="Įkelti darbą">
<br>
<br>
<a href="vartotojo.php"> Atgal į vartotojo paskyrą</a>
<br><br><br><br><br>
</form>

</div>


</body>
<?php include('footer.php');?>