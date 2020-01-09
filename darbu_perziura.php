<?php include('header.php');?>



<body>



<div class="center">
<h1 class="DP_Pavadinimas">Darbų peržiūra</h1>
<h3 class="DP_Tekstas">Pasirinkite norimų peržiūrėt darbų kategorija:</h3>
  <div class="selectCenter">
  <select name="kategorija" class="select" id="type">
              <?php foreach( paiimtiDuomenis('*', 'kategorijos') as $kategorija){
              echo '<option value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
            }?>
          </select>
</div>
<br>
<br>
 
<div class="container tarpas">
                   <div class="row">
          <?php foreach( paiimtiDuomenis('*', 'darbai') as $key => $darbas){
              echo '
              
              <div class="col-md-3 " id="'.$darbas['kategorija'].'">
                   <div class="vidus">
                   <div class="crop">
                        <img class="prekiu_foto" alt="'.$darbas['antraste'].' nuotrauka" src="'.$darbas['nuotrauka'].'" alt="'.$darbas['antraste'].'">
                    </div>
                  
                      <p class="darbo_Antraste">'.$darbas['antraste'].'</p>
                      
                     <p style="display:none">Kategorija: ' . $darbas['kategorija'] . '</p>
                      
                <div class="selectCenter">
                    <a href="darbas.php?p='.$darbas['id'].'" class="perziura">Peržiūrėt</a>
                        </div>
                        </div>
                        </div>';
            }?>


</div>
</div>
<script>
$(function() {

    $('#type').change(function(){
        if($('#type').val() == '1') {
            $('#1').show(); 
            $('#2').hide();
        } else {
           $('#1').hide(); 
            $('#2').show();
        } 
    });
});
    </script>
</body>


<?php include('footer.php');?>