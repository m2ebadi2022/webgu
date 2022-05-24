
	<!-- Bootstrap core JavaScript -->
	<script src="http://<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="http://<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="http://<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="http://<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="http://<?php echo base_url(); ?>assets/js/tableToExcel.js"></script>
	<script src="http://<?php echo base_url(); ?>assets/js/creative.min.js"></script>
    
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});

		

		function exportExcel (tblData){
			let table = document.querySelector("#"+tblData);
			TableToExcel.convert(table);
		}

		
	</script>


</body>
</html>
