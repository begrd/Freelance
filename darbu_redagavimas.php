<?php include('header.php');

?>



<body>

<h1 class="DR_H1"> Vartotojo " <?php echo gautiVartDuom('name');?> "  ikelti darbai:</h1>
   
<div class="centerTable">
<form method="post">
<input type="hidden" name="useris" value="<?php echo gautiVartDuom('id');?>" class="iIvestis">
        </form>

        <div class="tableCenter">
        <table class="produktuSar">
        <th class="tableHeader">Nr.</th>
        <th class="tableHeader">Pavadinimas</th>
     
        <th class="tableHeader">Koreguoti</th>
        <th class="tableHeader">Šalinti</th>
          <?php foreach( paiimtiDuomenisID('*', 'darbai') as $key => $darbas){
              echo '
              <tr><td class="tableElements">'.($key+1).'.</td>
                  <td class="tableElements">'.$darbas['antraste'].'</td>
           
                  <form method="post" action="">
                  <input type="hidden" name="proddel" value="'.$darbas['id'].'"/>
                  <td class="tableElements"><a href="edit.php?p='.$darbas['id'].'" class="koreguoti">Koreguoti</a></td>
                  <td class="tableElements"><button class="trinti" name="trintiDarba">Ištrinti</button></td>
                  </form>
              </tr>';
            }?>
        </table>
         
        </div>
</div>



</body>

