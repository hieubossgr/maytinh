<?php
	include('session.php');
	$uid=$_GET['id'];

	$name= $_POST['cname'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	
	mysqli_query($conn,"update customer set customer_name='$name', address='$address', contact='$contact' where userid='$uid'");
	
	?>
		<script>
			window.alert('Hồ sơ được cập nhật thành công!');
			window.history.back();
		</script>
	<?php
	
?>