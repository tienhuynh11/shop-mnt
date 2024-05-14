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
<form action="" method="post">
      <!-- Cart Start -->
    <?php
  //  echo var_dump($_SESSION['cart']);
  if ((isset($_SESSION['cart'])) && (count($_SESSION['cart'])>0) )
  {
	  
	echo ' <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">	
                        <tr>
						 <th>Ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
					  <tbody class="align-middle">';
					  $i=0;
					  $tong=0;
			foreach($_SESSION['cart'] as $item)
			{	
			$title= $item[1];	
				$quantity= $item[3];
				$discount= $item[2];
				$product_id = $item[0];
				$tt= $item[2] * $item[3];
				$tong = $tong + $tt;
			echo '
                        <tr>
							 <td><img src="'.$item[4].'" width="160" height="160" alt=""/></td>
                            <td class="align-middle">'.$item[1].''.' - '.''.$item[5].'</td>
                            <td class="align-middle">'.$item[2].'</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <p class="form-control form-control-sm bg-secondary text-center"> '.$item[3].'</p>
                                  
                                </div>
                            </td>
                            <td class="align-middle">'.$tt.'</td>
                            <td class="align-middle"><a href="index.php?pg=delcart&i='.$i.'" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                        </tr>';	
			$i++;
			}  
			echo '
			
			 </tbody>
                </table>
				<table class="table table-bordered text-center mb-0">
				<thead class="bg-secondary text-dark">	
                        <tr>
						 Bạn đang có '.$i.' sản phẩm trong giỏ hàng.
                        </tr>
                    </thead>
					</table>
            </div>';
			
	}else{
		echo '<div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
						 <th>Bạn đang có 0 sản phẩm trong giỏ hàng.</th>
                            
                        </tr>
						</thead>
						</tbody>
                </table>
            </div>';
		}
		
		if(isset($tong)>0)
		{
		$ship=30000;	
		}
		else 
		{
		$ship=0;	
		}
	
	?>
    
  <div class="col-lg-4">
                
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Áp dụng</button>
                        </div>
                    </div>
              
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tính toán giỏ hàng</h4>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tổng tiền hàng</h6>
                              <h6 class="font-weight-medium"><?php echo $tong;?>VND </h6>
                      </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí ship</h6>
                            <h6 class="font-weight-medium"><?php echo $ship;?> VND</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng cộng</h5>
                            <h5 class="font-weight-bold"><?php echo $tong+$ship;?> VND</h5>
                        </div>
                        <a href="index.php?pg=checkout" class="btn btn-block btn-primary my-3 py-3">Xác nhận thanh toán</a>
                          <a href="index.php?pg=delcart"class="btn btn-block btn-primary my-3 py-3">Xóa giỏ hàng</a>
                        <a  href="index.php?pg=Shop" class="btn btn-block btn-primary my-3 py-3">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    </form>
    <!-- Cart End -->


   


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