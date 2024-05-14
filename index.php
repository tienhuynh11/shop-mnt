<?php 
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] =array();
?>
<?php  include ("view/header.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_GET["pg"])){
		
	$pg = $_GET['pg'];
 	switch ($pg)
	{
		case'Main' :
		{
		include ("view/main.php");
		break;
		}	
		case'Contact' :
		{
		include ("view/contact.php");
		break;
		}	
		case'Shop' :
		{
		include ("view/shop.php");
		break;
		
		}
			case'viewcart' :
		{
	include ("view/cart.php");
		break;
		}
			case'Detail' :
		{
		include ("view/detail.php");
		break;
		}
			case'checkout' :
		{
		include ("view/checkout.php");
		break;
		}
			case'viewcheckout' :
		{
		include ("view/viewcheckout.php");
		break;
		}
		
		
			case'cart' :
		{
			if (isset($_POST['themgiohang'])&&($_POST['themgiohang']))
			{
				$id=$_POST['id'];
				$title=$_POST['title'];
				$discount=$_POST['discount'];
				$image = $_POST['image'];
				if (isset($_POST['quantity'])&& ($_POST['quantity']>0))
				{
				$quantity = $_POST['quantity'];	
				}
				else
				{
				$quantity=1;	
				}
				
				if (isset($_POST['size'])&& ($_POST['size']!=''))
				{
				$size = $_POST['size'];	
				}
				else
				{
				$size="L";
				}
				
			//kiểm tra sp tồn tại
			$fg=0;
				
				
				// nếu tồn tại
				$i=0;
				foreach ($_SESSION['cart'] as $item)
				{
					if ($item['1']==$title)	
					{
					$slm=$quantity+$item[3];
					$_SESSION['cart'][$i][3]=$slm;	
					$fg=1;
					break;
					}
					$i++;
				}
				//tạo mảng con
					if ($fg==0)
					{ 
					$item = array($id,$title,$discount,$quantity,$image,$size);
					$_SESSION['cart'][]=($item);
					
					}
					include ("view/cart.php");
				}
		
		break;
		}
			case'delcart' :
		{
			if(isset($_GET['i']) && ($_GET['i'] >= 0))
			{
					if(isset($_SESSION['cart']) && count(isset($_SESSION['cart'])>0))
			array_splice($_SESSION['cart'],$_GET['i'],1);	
		
			}
			else
			{
				if (isset($_SESSION['cart'])) unset($_SESSION['cart']);
			}
		if(isset($_SESSION['cart']) && count(isset($_SESSION['cart'])>0))
			{
			include ("view/cart.php");	
			}
		else
		{
		include ("view/shop.php");
		}
		
		break;
		}
		
	}
	}
	else
	{
		include	("view/main.php"); 
	}
 
 ?>
</body>
<?php include ("view/footer.php");?>
</html>