<?
session_start();

require("inc/config.php");
require("inc/fungsi.php");
require("inc/koneksi.php");
	

//hapus sesi
session_unset();
session_destroy();


//re-direct
xloc($sumber);
exit();
?>