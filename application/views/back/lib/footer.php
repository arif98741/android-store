				<!-- bootstrap -->
<script src="<?php echo base_url();?>assets/back/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url();?>assets/back/js/jquery.nicescroll.js" type="text/javascript"></script>
<!--dataTables-->
<script src="<?php echo base_url();?>assets/back/js/scripts.js"></script>
 <script  src="<?php echo base_url();?>assets/back/js/datatable.js"></script>
 
 <script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>



<script type="text/javascript">
	$(document).ready(function(){
		
		setTimeout(function(){
			
			$('#message').slideUp(600);
			
		},4000);
		
	});
</script>
		
</html>
