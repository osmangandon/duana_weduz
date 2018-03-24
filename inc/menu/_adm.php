<?php
//nilai
$maine = "$sumber/adm/index.php";



//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table bgcolor="#E4D6CC" width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td>';
//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$maine.'" title="Home" class="menuku"><strong>Home</strong></a>&nbsp;|&nbsp;
<a href="'.$sumber.'/adm/s/pass.php" title="Change Password" class="menuku"><strong>CHANGE PASSWORD</strong></a>&nbsp;|&nbsp;
<a href="'.$sumber.'/adm/m/piece.php" title="Data Piece" class="menuku"><strong>DATA PIECE</strong></a>&nbsp;|&nbsp; 
<a href="'.$sumber.'/adm/m/item.php" title="Data Item" class="menuku"><strong>DATA ITEM</strong></a>&nbsp;|&nbsp; 
<a href="'.$sumber.'/adm/m/butcher.php" title="Data butcher" class="menuku"><strong>DATA BUTCHER</strong></a>&nbsp;|&nbsp;
<a href="'.$sumber.'/adm/m/user.php" title="Data User" class="menuku"><strong>DATA USER</strong></a>&nbsp;|&nbsp;
<a href="'.$sumber.'/adm/m/customer.php" title="Data Customer" class="menuku"><strong>DATA CUSTOMER</strong></a>&nbsp;|&nbsp; 
<a href="'.$sumber.'/adm/m/slaughter.php" title="Data Slaughter" class="menuku"><strong>DATA SLAUGHTER</strong></a>&nbsp;|&nbsp; 
<br>

<a href="'.$sumber.'/adm/o/order.php" title="Data Order" class="menuku"><strong>DATA ORDER</strong></a>&nbsp;|&nbsp; 
<a href="'.$sumber.'/adm/r/report.php" title="Data Report" class="menuku"><strong>DATA REPORT</strong></a>&nbsp;|&nbsp;
<br>

<a href="'.$sumber.'/logout.php" title="Logout" class="menuku"><strong>LOGOUT</strong></a>&nbsp;|&nbsp;
</td>
</tr>
</table>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>