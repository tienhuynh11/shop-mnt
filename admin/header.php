<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin MNT Shop</title>
</head>
<link rel="icon" href="../img/logo-MNT.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
<link rel="stylesheet" type="text/css" href="../view/css/style.min.css">

<link rel="stylesheet" type="text/css" href="cssadmin/admin_style.css">
<body>
<?php 
if (isset($_REQUEST['layid']))
{
	$layid = $_REQUEST['layid'];	
}
?>


<?php

session_start();
 include ("../cls/clslogin.php");
$q = new login();
include ("../cls/clsadmin.php");
		$p = new admin;
if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['role_id']))
{
	$q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['role_id']);
}
else
{
	header("location:../login/");
	
}

        
        //Kiểm tra xem đã đăng nhập chưa?
            ?>
            
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span><?php echo $_SESSION['user']; ?></span>
                    </div>
                    <div class="right-panel">
                        <img height="24" src="img/icon_home.png" />
                        <a href="../index.php">Trang chủ</a>
                        <img height="24" src="img/icon_logout.png" />
                        <a href="../login/logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
</body>
</html>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../view/lib/easing/easing.min.js"></script>
    <script src="../view/lib/owlcarousel/owl.carousel.min.js"></script>