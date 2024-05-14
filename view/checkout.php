<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<form method="post">
    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Địa chỉ thanh toán</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Họ</label>
                            <input class="form-control" type="text" name="txtfirst" placeholder="Huỳnh">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên</label>
                            <input class="form-control" type="text" name="txtlast" placeholder="Tiến">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="txtemail" placeholder="followme403@gmail.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" name="txtphone" placeholder="079 597 2514">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="txtadd" placeholder="566 Nguyễn Thái Sơn, Phường 4">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label>Quận/Huyện</label>
                            <input class="form-control" type="text" name="txtcity" placeholder="Gò Vấp">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tỉnh/Thành phố</label>
                            <input class="form-control" type="text" name="txtdistr" placeholder="Hồ Chí Minh">
                        </div>
                      
                    </div>
              
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
												   <?php
                              if ((isset($_SESSION['cart'])) && (count($_SESSION['cart'])>0) )
                              {
                                 
                            
                                                  $i=0;
                                                  $tong=0;
                                        foreach($_SESSION['cart'] as $item)
                                        {
                                            $product_id = $item[0];
                                            $tt= $item[2] * $item[3];
                                            $tong = $tong + $tt;
                                        echo '<div class="d-flex justify-content-between">
                                                        <p>'.$item[1].' x '.$item[3].'</p>
                                                        <p>'.$item[2].'</p>
                                                    </div>';	
                                        $i++;
                                        }  
                                       
                                    }
									if ($tong<=0)
									{
									$ship = 0;	
										}
									else
									{
									$ship=30000;												
									}
                                ?>
                                
                      
                     
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tổng cộng</h6>
                            <h6 class="font-weight-medium"><?php echo $tong; ?> VND</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí ship</h6>
                            <h6 class="font-weight-medium"><?php echo $ship; ?> VND</h6>
                        </div>
                    </div>
                    
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng cộng</h5>
                            <h5 class="font-weight-bold"><?php echo $tong+$ship; ?> VND</h5>
                        </div>
                    </div>
                </div>
                 
                    <div class="card-footer border-secondary bg-transparent">
                 
                    	<input type="submit" name="nut"	class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" value="Xác nhận" >
                        
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
<?php 
switch(isset($_POST['nut']))
{
	
	case 'Xác nhận':
	{	
		 $firstname = $_REQUEST['txtfirst'];
		 $lastname = $_REQUEST['txtlast'];
		 $email= $_REQUEST['txtemail'];
		 $phone = $_REQUEST['txtphone'];
		 $address=$_REQUEST['txtadd'];
		 $city = $_REQUEST['txtcity'];
		 $district= $_REQUEST['txtdistr'];
		 $id_tran = $lastname.$phone;
if($p->themxoasua("insert into tbl_transaction(id_tran,firstname,lastname,email,phone,address,city,district) values ('$id_tran','$firstname','$lastname','$email','$phone','$address','$city','$district')")==1)
			{	
					foreach($_SESSION['cart'] as $item)
					
						{
							
							 $product_id =$item[0];
							 $qty = $item[3];
							 $amout = $item[2];
							 $title = $item[1];
							 $total = $item[3] * $item[2];
							echo $id_tran;
							if($p->themxoasua("insert into tbl_order(id_tran,id_product,qty,amout,title,total) values ('$id_tran','$product_id','$qty','$amout','$title','$total' )")==1)
									 {
										
										}
										else 
									{
									echo'<script>
													alert("Thêm thất bại ");
													</script>';	
									}
								}
					
						echo'<script>
													alert("Dat hang thanh cong");
													
													</script>'; 
					
					}
					
			
			else 
			{
			echo'<script>
													alert("Đặt thất bại ");
													</script>';	
			}
			
							
			
		 /* if ((isset($_SESSION['cart'])) && (count($_SESSION['cart'])>0) )
			  {
				  $i=0;
								  $tong=0;
						foreach($_SESSION['cart'] as $item)
						{
							echo $product_id =$item[0];
							echo $qty = $item[3];
							echo $amout = $item[2];
							echo $title = $item[1];
							echo $total = $item[3] * $item[2];
							
							if($p->themxoasua("insert into tbl_order(id_tran,id_product,qty,amout,title,total) values ('$id_tran','$product_id','$qty','$amout','$title','$total' )")==1)
									 {
										echo'<script>
													alert("Thêm thành công");
													</script>'; 
										}
										else 
									{
									echo'<script>
													alert("Thêm thất bại ");
													</script>';	
									}
								}
									
						$i++;
						}  
					 */  
					}
                                
		

		//insert into tbl_order(id_category,qty,amout,title,total) values ('1','2','3','a','4'))

}
?>
 	
</form>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>