<?php
    include "../page/page_config.php";
        @session_start();
            $username= $_SESSION['username'];   
        if ($username=="admin"){
            echo "<script> document.location.href='+home.php'; </script>";
        }else{
?>

<!doctype html>
<html class="no-js" lang="en">
<?php include 'page/page_head.php'; ?>
<body style="background-color: #41B14A;">

<div class="account-container login stacked">
	<div class="content clearfix">
		<form action="admin/+index_proses.php" method="POST">
			<h1><center class="login_text"><a href=index.php>Login Administrator</a></center></h1>		
			<div class="login-fields">
				<p><center>Masukan Username dan Password anda</center></p>
				<?php
			        $danger = (isset($_GET['pro']));
			            if ($danger == "sandisalah") {
			                echo "<div class='alert alert-danger'>Password yang anda masukan, Salah</div>";
			            }elseif($danger == "idusersalah") {
			                echo "<div class='alert alert-danger'>Username yang anda masukan, Salah!</div>";
			            }elseif($danger == "idkatasandi") {
			                echo "<div class='alert alert-danger'>Username dan pass yang anda masukan, Salah!</div>";
			            }
			    ?>
				<div class="field">
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" placeholder="Username" class="login username-field">
				</div>
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="passs" placeholder="Password" class="login password-field">
				</div>
			</div>
			
			<div class="login-actions">				
				<button type="submit" class="button btn btn-info btn-large">LOGIN</button>&nbsp;&nbsp;
				<button type="reset" class="button btn btn-warning btn-large">RESET</button>
			</div>	
			<center><a href="../index.php">Kembali ke Halaman Utama</a></center>
		</form>
	</div>
</div>

<?php include 'page/page_footer.php'; ?>
</body>
</html>

<?php
    }
?>