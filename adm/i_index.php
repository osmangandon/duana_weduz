
<style>
  .modal-header, h4, .close {
      background-color: grey;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
    
</style>



<?php
$footernya = "2018.";


//jika pass ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnSPASS'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>CHANGE PASSWORD</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_pass.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>
	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}









//jika dpiece ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnDPIECE'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA PIECE</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_piece.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>

	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}
	




//jika ditem ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnDITEM'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA ITEM</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_item.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>


	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}









//jika duser ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnDUSER'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA USER</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_user.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>


	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}







//jika dbutcher ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnDBUTCHER'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA BUTCHER</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_butcher.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>


	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}







//jika dcustomer ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnDCUSTOMER'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA CUSTOMER</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_customer.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>


	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}










//jika dslaughter ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnDSLAUGHTER'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA SLAUGHTER</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_slaughter.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>


	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}











//jika order ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnORDER'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA ORDER</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_order.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>

	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}
	









//jika report ////////////////////////////////////////////////////////////////////////////////////
if ((isset($_GET['aksi']) && $_GET['aksi'] == 'btnREPORT'))
	{
	?>
	
	<script>
	$(document).ready(function(){
	$('#myModal').modal();
	});
	</script>
	
	
	
	<div class="container">
		
		
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:5px 10px;">
	          <h4>DATA REPORT</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="padding:20px 20px;">
	
				<iframe frameborder="0" height="350" name="ifrku" width="700" scrolling="no" src="i_report.php"></iframe>
				
	
	        </div>
	        <div class="modal-footer">
	
				<?php echo $footernya;?>
	        </div>
	      </div>


	      
	    </div>
	  </div> 
	</div>

	<?php
	exit();
	}
	
	?>
