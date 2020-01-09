<?php include('header.php');?>



<body>



<div class="center">
<h1 class="DSP_H1">Darbo skelbimų peržiūra</h1>
<h3 class="DSP_H3">Pasirinkite kategoriją</h3>
<div class="selectCenter">
  <select name="kategorija" class="select" id="type">
              <?php foreach( paiimtiDuomenis('*', 'skelbimukategorijos') as $kategorija){
              echo '<option value="'.$kategorija['id'].'">'.$kategorija['pavadinimas'].'</option>';
            }?>
          </select>
          </div>
<br><br>

<table class="tableCenter">
      <?php foreach( paiimtiDuomenis('*', 'darboskelbimai') as $key => $darboSkelb){
              echo '
              
              
                   
              <tr id="'.$darboSkelb['kategorija'].'">  <td class="lentelesVidus">     <p class="DS_Pavadinimas">'.$darboSkelb['antraste'].'</p></td>              
                   <td class="lentelesVidus"> <a href="darboSkelbimas.php?p='.$darboSkelb['id'].'" class="perziura">Plačiau</a></td>
              </tr>
                       
                        ';
            }?>
</table>


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