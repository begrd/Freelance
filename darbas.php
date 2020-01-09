


<?php require_once('header.php');?>

<div class="blokas">
        <?php $produktas = isrinktDuom($_GET["p"]);?>
       
          <h1 class="darbo_antraste"><?php echo $produktas['antraste'];?></h1>

       <div class="container">
       <div class="row">
       <div class="col-md-12">
   
      <p class="darbo_aprasymas"><?php echo $produktas['aprasymas'];?></p>
</div>

            

<div class="col-md-12">
<div class="image-center">
    <img class="darbo_ft" src="<?php echo $produktas['nuotrauka'];?>" alt="<?php echo $produktas['antraste'];?> nuotrauka">

     <p class="darbo_aprasymas"> Kontaktai: <?php echo $produktas['kontaktai'];?></p>
     <p class="sukure"> Sukure:</p>
</div>
                 
             
              <br>
             
              



           </div>
          </div>
        </div>
    </div>

<?php include('footer.php');?>