<?php 
 include ("../cls/clslogin.php");
$p = new login();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../view/css/adcss.css">

<style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #user_login form{
                width: 200px;
                margin: 40px auto;
            }
            #user_login form input{
                margin: 5px 0;
            }
        </style><title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" autocomplete="off">
  <table style="margin-top:100px" width="334" border="1" align="center" cellspacing="0">
    <tbody>
      <tr align="center">
        <td height="46" colspan="2">ĐĂNG NHẬP</td>
      </tr>
      <tr align="center">
        <td width="146" height="26">Tài khoản</td>
        <td width="180" align="left"><input name="txtuser" type="text" id="txtuser" size="30"></td>
      </tr>
      <tr align="center">
        <td height="26">Mật khẩu</td>
        <td align="left"><input name="txtpass" type="password" id="txtpass" size="30"></td>
      </tr>
      <tr align="center">
        <td height="59" colspan="2"><input type="submit" name="nut" id="nut" value="Đăng nhập">
        <input type="reset" name="reset" id="reset" value="Hủy"></td>
      </tr>
    </tbody>
  </table>
  <div align="center">
  <?php
  switch(isset($_POST['nut']))
  {
	  case'Đăng nhập':
	  {
	  $user=$_REQUEST['txtuser'];
	  $pass=$_REQUEST['txtpass'];
	  if($user!='' && $pass!='')
	  {
		  $p->mylogin($user,$pass);
	  }
	  else
	  {
		  echo'Vui long nhap du thong tin';
	  }
	  break;
	  }
  }
  ?>
  </div>
  
</form>
</body>
</html>