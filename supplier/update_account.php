<?php

	include('session.php');
	
	$cpass=md5($_POST['cpass']);
	$repass=md5($_POST['repass']);
	
	if($cpass!=$repass){
		?>
		<script>
			window.alert('Required passwords did not match. Account not updated!');
			window.history.back();
		</script>
		<?php
	}
	elseif($cpass!=$srow['password']){
		?>
		<script>
			window.alert('Mật khẩu hiện tại không khớp. Tài khoản chưa được cập nhật!');
			window.history.back();
		</script>
		<?php
	}
	else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if($password==$srow['password']){
			$fipassword=$password;
		}
		else{
			$fipassword=md5($password);
		}
		mysqli_query($conn,"update `user` set username='$username', password='$fipassword' where userid='".$_SESSION['id']."'");
		mysqli_query($conn,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['id']."','Update account',NOW())");
		?>
		<script>
			window.alert('Tài khoản được cập nhật thành công!');
			window.history.back();
		</script>
		<?php
	}
		
?>