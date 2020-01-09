


<?php include('header.php');?>
<body>
<div class="blokas">
        <?php $produktas = isrinktDuomSkelbimu($_GET["p"]);?>
       
          <h1 class="darbo_antraste"><?php echo $produktas['antraste'];?></h1>

       <div class="container-fluid">
       <div class="row">
       <div class="col-md-12 pareigos" id="pobudis">
   <h1 class="skelbimo_antraste">Pareigos ir darbo pobūdis</h1>
      <p class="skelbimo_aprasymas"><?php echo $produktas['pareigos'];?></p>
      </div>
<div class="col-md-12" id="reikalavimai">
   <h1 class="skelbimo_antraste">Reikalavimai</h1>
       <p class="skelbimo_aprasymas"><?php echo $produktas['reikalavimai'];?></p>
</div>

            

<div class="col-md-12">

   
<h1 class="skelbimo_antraste">Kontaktai</h1>
     <p class="skelbimo_aprasymas"><?php echo $produktas['kontaktai'];?></p>

                 
             
              <br>
             
              



           </div>
          </div>
        </div>
        </div>

    </div>
</body>


<?php include('footer.php');?>