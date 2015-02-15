<?php
if($_POST){
$mac_sayisi	= mysql_real_escape_string(trim($_POST["mac_sayisi"]));

for($i=0; $i<$mac_sayisi; $i++){
echo '<div class="row">
  <div class="col-xs-4">
    <input type="text" name="mac_sayisi_'.$i.'" id="inputSuccess4" class="form-control" style="margin-bottom:10px; width:150px;" placeholder="Maç Oranı">
  </div>
  <div class="col-xs-4">
   <input type="text" name="mac_kodu_'.$i.'" style="margin-bottom:10px; width:150px;" class="form-control" placeholder="Maç Kodu">
  </div>
</div>';

}
echo '<button type="button" class="btn btn-primary" onclick="Hesapla();">Hesapla</button>';


}

?>
