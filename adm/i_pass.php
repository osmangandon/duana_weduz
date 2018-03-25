<?php
session_start();

//ambil nilai
require("../inc/config.php");
require("../inc/fungsi.php");
require("../inc/koneksi.php");
require("../inc/cek/adm.php");
$tpl = LoadTpl("../template/index2.html");

nocache;

//nilai
$filenya = "pass.php";
$judul = "Change Password";
$judulku = "[$adm_session] ==> $judul";
$juduli = $judul;


//PROSES ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//simpan
if ($_POST['btnSMP'])
	{
	//ambil nilai
	$passlama = md5(nosql($_POST["passlama"]));
	$passbaru = md5(nosql($_POST["passbaru"]));
	$passbaru2 = md5(nosql($_POST["passbaru2"]));

	//cek
	//nek null
	if ((empty($passlama)) OR (empty($passbaru)) OR (empty($passbaru2)))
		{
		//re-direct
		$pesan = "Input Not Complete. Please Try Again...!!";
		pekem($pesan,$filenya);
		exit();
		}

	//nek pass baru gak sama
	else if ($passbaru != $passbaru2)
		{
		//re-direct
		$pesan = "Password Not Match. Please Try Again...!!";
		pekem($pesan,$filenya);
		exit();
		}
	else
		{
		//query
		$q = mysql_query("SELECT * FROM adminx ".
							"WHERE kd = '$kd6_session' ".
							"AND usernamex = '$username6_session' ".
							"AND passwordx = '$passlama'");
		$row = mysql_fetch_assoc($q);
		$total = mysql_num_rows($q);

		//cek
		if ($total != 0)
			{
			//perintah SQL
			mysql_query("UPDATE adminx SET passwordx = '$passbaru' ".
							"WHERE kd = '$kd6_session' ".
							"AND usernamex = '$username6_session'");


			//auto-kembali
			$pesan = "CHANGE PASSWORD SUCCESS.";
			pekem($pesan, $filenya);
			exit();
			}
		else
			{
			//re-direct
			$pesan = "PASSWORD NOT MATCH. PLEASE TRY AGAIN...!!!";
			pekem($pesan,$filenya);
			exit();
			}
		}
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//isi *START
ob_start();



//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table width="600" border="0" cellspacing="3" cellpadding="0">
<tr valign="top">
<td>

<p>Old Password : <br>
<input name="passlama" type="password" size="15">
</p>

<p>New Password : <br>
<input name="passbaru" type="password" size="15">
</p>

<p>RE-New Password : <br>
<input name="passbaru2" type="password" size="15">
</p>
<p>
<input name="btnSMP" type="submit" value="SAVE" class="btn btn-default btn-custom">
<input name="btnBTL" type="reset" value="CANCEL" class="btn btn-default btn-custom">
</p>

</td>
</tr>
</table>';
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