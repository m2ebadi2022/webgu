<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>سیستم ورود و خروج نگهبانی</title>

	<!-- Font Awesome Icons -->
	<link href="http://<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	<link href="http://<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS - Includes Bootstrap -->
	<link href="http://<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

	
</head>
<body id="page-top" class="rtl" >
	<!-- Navigation -->


	<?php if(isset($post_ok)): // نمایش پیام 
		?> 
		<div style="position: fixed;z-index: 100; width: 250px; left: 50px; bottom: 50px;" class="alert alert-<?php if($post_ok){echo 'success';}else {echo 'danger';}  ?>" id="success-alert">
			<?php if($post_ok==1){echo $msg[1];} elseif ($post_ok==0) {echo $msg[0];} elseif ($post_ok==3) {echo $user[0]['name'].' '.$user[0]['famili'].' '.$msg[3];} elseif ($post_ok==4) {echo $msg[4];} elseif ($post_ok==5) {echo $msg[5];}
			elseif ($post_ok==7) {echo $msg[7];} 
			elseif ($post_ok==40) {echo $msg[6];} ?>
		</div>
		<script>
			window.setTimeout(function() {
				$(".alert").fadeTo(1000, 0).slideUp(1000, function(){
					$(this).remove(); 
				});
			}, 5000);   
		</script>
    <?php  endif; ?>


	<?php if(isset($close) && $close==1): // بستن پنجره ادیت و رفرش صفحه اصلی
		?>
		<script>
			window.setTimeout(function() {
				window.opener.location.reload();
       			window.close();
			}, 600);   
		</script>

	<?php endif; ?>
