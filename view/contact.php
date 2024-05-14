<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MNT Shop</title>
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
<!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Liên hệ</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php?pg=Main">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Liên hệ</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <form method="post">
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Liên Hệ</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                  
                        <div class="control-group">
                            <input type="text" class="form-control" name="txtname" placeholder="Họ và tên"
                                required="required" data-validation-required-message="Vui lòng nhập họ tên của bạn" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="txtemail" placeholder="Email"
                                required="required" data-validation-required-message="Vui lòng nhập email của bạn" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="txttieude" placeholder="Tiêu đề"
                                required="required" data-validation-required-message="Vui lòng nhập tiêu đề" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" name="txtnoidung" placeholder="Nội dung"
                                required="required"
                                data-validation-required-message="Vui lòng nhập nội dung"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4"name="nut" type="submit" id="sendMessageButton">Gửi</button>
                        </div>
                  
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Cửa hàng 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, Thành phố Hồ Chí Minh</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>tranhuuminh71@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+84 96 477 0175</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Cửa hàng 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>456 Điện Biên Phủ, Phường 4, Quận 3, Thành phố Hồ Chí Minh</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>followme403@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+84 79 597 2514</p>
                </div>
            </div>
        </div>
    </div>
    <?php 
	switch (isset($_POST['nut']))
	{
		case'Gửi':
		{
		$name = $_REQUEST['txtname'];
		
		$email = $_REQUEST['txtemail'];
		$tieude = $_REQUEST['txttieude'];
		 $noidung= $_REQUEST['txtnoidung'];
			if ($p->themxoasua("insert into contact(name,email,tieude,noidung) values ('$name','$email','$tieude','$noidung')")==1)
			{
				echo'<script>
				alert("Bạn đã gửi liên hệ ");
				</script>';	
			}
			else 
			{
				echo'<script>
				alert("Gửi thất bại");
				</script>';	
				}
			break;
		}
	}
	?>
      </form>
    <!-- Contact End -->


    <!-- Footer Start -->
 	
     <!-- Footer End -->


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