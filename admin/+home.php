<?php
    include "../page/page_config.php";
    @session_start();
    $username= $_SESSION['username'];   
    if ($username=="admin"){
?>

<!doctype html>
<html class="no-js" lang="en">
	<?php include 'page/page_head.php'; ?>
	<body class="modal-open" style="">
		<div id="wrapper">
			<?php include 'page/page_topbar.php'; ?>
			<?php include 'page/page_header.php'; ?>
			<?php include 'page/page.php'; ?>
		</div>
		<?php include 'page/page_foo.php'; ?>
		<?php include 'page/page_footer.php'; ?>
	</body>
</html>

<?php
    }else{
        echo "<script> document.location.href='index.php'; </script>";
    }
?>