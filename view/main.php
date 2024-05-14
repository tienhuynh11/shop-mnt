<?php   
/*
include ("../cls/func.php");
$p = new shopfunc;
*/

?>
<!-- Featured Start-->

	<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản Phẩm Tốt</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Giao Hàng Nhanh</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14 Ngày Hoàn Trả</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ Trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->



    <!-- Categories Start -->
    
    <!-- Categories End -->


    <!-- Offer Start -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="img/offer-1.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Giảm giá từ 10 - 15% cho các đơn hàng</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Phụ Kiện</h1>
                        <a href="index.php?pg=Shop&id_category=12" class="btn btn-outline-primary py-md-2 px-md-3">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="img/offer-2.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Giảm giá từ 15 - 20% cho các đơn hàng</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Quần Nỉ</h1>
                        <a href="index.php?pg=Shop&id_category=11" class="btn btn-outline-primary py-md-2 px-md-3">Mua ngay</a>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start
    
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h1 style="font-family:quicksand;" class="section-title px-5"><span class="px-2">Sản phẩm nổi bật</span></h1>
        </div>
        <div class="row px-xl-5 pb-3">
           
    </div>
     Products End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h1 style="font-family:quicksand;" class="section-title px-5"><span class="px-2">Sản phẩm mới</span></h1>
        </div>
        <div class="row px-xl-5 pb-3">
           <?php
		    $p->xuatsanpham("select * from tbl_product  limit 8 ");
			
		   ?>
        </div>
    </div>
    <!-- Products End -->


<!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Cập nhật thông tin về shop</span></h2>
                    <p>Thông tin mới nhất về shop sẽ được cập nhật qua email của bạn.</p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Nhập email tại đây">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
            <img src="img/1029px-UNIQLO_logo.svg_11zon.jpg" width="150" height="150" alt=""/> 
            <img src="img/Logo-Yame-Black_11zon.jpg" width="150" height="150" alt=""/>
            <img src="img/log-stressmama.jpg" width="150" height="150" alt=""/>
            <img src="img/logo-scottplaton.jpg" width="150" height="150" alt=""/>
            <img src="img/logo-shopee-trong-tin-part.png" width="150" height="150" alt=""/>
            <img src="img/logo-5theway.png" width="150" height="150" alt=""/>
            <img src="img/Logo-IUH.jpg" width="150" height="150" alt=""/>
            <img src="img/commission-icon.jpg" width="150" height="150" alt=""/>
            <img src="img/commission-icon.jpg" width="150" height="150" alt=""/>
            
            </div>
        </div>
    </div>
    <!-- Vendor End -->