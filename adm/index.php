<?php
session_start();

//ambil nilai
require("../inc/config.php");
require("../inc/fungsi.php");
require("../inc/koneksi.php");
require("../inc/cek/adm.php");
$tpl = LoadTpl("../template/index.html");


nocache;

//nilai
$filenya = "index.php";
$judul = "STATISTICS";
$judulku = "$judul  [$adm_session]";


//isi *START
ob_start();

//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table width="100%" height="500" border="0" cellspacing="3" cellpadding="0">
<tr valign="top">
<td width="320">';


//menu
require("../inc/menu/adm.php");

echo '</td>

<td align="left" width="500">
<h1>
WELCOME TO SYSTEM
</h1>
<br>
<h3>
TOTAL USER : ...
</h3>

<h3>
TOTAL BUTCHER : ...
</h3>

<h3>
TOTAL ITEM : ...
</h3>

<h3>
TOTAL CUSTOMER : ...
</h3>

<h3>
TOTAL SLAUGHTER : ...
</h3>

<h3>
TOTAL ORDER : ...
</h3>

</td>

<td align="left">
<h3>
LAST ORDER : ...
</h3>

<h3>
REPORT TODAY : ...
</h3>


</td>
</tr>
</table>';

?>





<style>
.btn-custom:hover {
  background-color: grey;
}


</style>

<script>
$(document).ready(function(){
    $("#btnHOME").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnHOME");
    });
    
    
    $("#btnSPASS").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnSPASS");
    });
    
    $("#btnDPIECE").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnDPIECE");
    });
    
    $("#btnDITEM").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnDITEM");
    });
    
    $("#btnDUSER").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnDUSER");
    });
    
    $("#btnDBUTCHER").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnDBUTCHER");
    });
    
    $("#btnDCUSTOMER").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnDCUSTOMER");
    });
    
    $("#btnDSLAUGHTER").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnDSLAUGHTER");
    });
    
    $("#btnORDER").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnORDER");
    });
    
    $("#btnREPORT").click(function(){
    	$("#ifrku2").load("<?php echo $sumber;?>/adm/i_index.php?aksi=btnREPORT");
    });
    
    $("#btnLOGOUT").click(function(){
    	window.location.href = "<?php echo $sumber;?>/logout.php";
    });
    

    
    
});
</script>


<div id="ifrku2"></div>



<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//isi
$isi = ob_get_contents();
ob_end_clean();

require("../inc/niltpl.php");


//diskonek
xfree($qbw);
xclose($koneksi);
exit();
?>