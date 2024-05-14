<?php
class login
{
	public function connect()
	{				
		$con=mysqli_connect("localhost","admin","123456","shop");
  		if(!$con)
   		{
	   		die("Khong ket noi duoc den CSDL");
			exit();
		}
		else
		{			
			mysqli_set_charset($con,"utf8");
			return $con;
		}
	}

	public function mylogin($user,$pass)
	{
		$pass=md5($pass);
		$sql="select id,username,password,role_id from tbl_user where username='$user' and password='$pass' limit 1";
		$link=$this->connect();
		$ketqua = mysqli_query($link, $sql);
		$i = mysqli_num_rows($ketqua);
		if($i==1)
		{
		
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id'];
				$username=$row['username'];
				$password=$row['password'];
				$role_id=$row['role_id'];
				if($role_id==1)
				{
				session_start();
				
				$_SESSION['id']=$id;
				$_SESSION['user']=$username;
				$_SESSION['pass']=$password;
				$_SESSION['role_id']=$role_id;
					header('location:../admin/index.php');
				}
				else 
				{
				echo 'Bạn không phải admin';
				}
			
				
			
			}
		}
		else
		{
			echo'Sai username hoac password';
		}
	}
	public function confirmlogin($id,$user,$pass,$role_id) 
	{
		$sql="select id from tbl_user where id='$id' and username='$user' and password='$pass' and role_id='$role_id' limit 1";
		$link=$this->connect();
		$ketqua = mysqli_query($link, $sql);
		$i = mysqli_num_rows($ketqua);
		if($i!=1)
		{
			header('location:../login/');
		}
	}
}
?>