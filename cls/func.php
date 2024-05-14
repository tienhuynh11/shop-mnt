	
<?php
class shopfunc
{
    public function connect()
    {
        $con = mysqli_connect("localhost", "admin", "123456", "shop");
        if (!$con) {
            die("Khong ket noi duoc den CSDL");
            exit();
        } else {
            mysqli_set_charset($con, "utf8");
            return $con;
        }
    }




    public function themxoasua($sql)
    {
        $link = $this->connect();
        if (mysqli_query($link, $sql)) {
            return 1;
        } else {
            return 0;
        }
    }
    public function choncot($sql)
    {
        $link = $this->connect();
        $ketqua = mysqli_query($link, $sql);
        $i = mysqli_num_rows($ketqua);
        $giatri = '';
        if ($i > 0) {
            while ($row = mysqli_fetch_array($ketqua)) {
                $giatri = $row[0];
            }
        }

        return $giatri;
    }
    public function xuatsanpham($sql)
    {
        $link = $this->connect();

        $ketqua = mysqli_query($link, $sql);
        $i = mysqli_num_rows($ketqua);
        if ($i > 0) {
            while ($row = mysqli_fetch_array($ketqua)) {
                $id = $row['id'];
                $title = $row['title'];

                $price = $row['price'];
                $discount = $row['discount'];
                $img = $row['image'];
                $des = $row['description'];


                echo '   
							
							<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
							<form action="index.php?pg=cart" method="post"> 
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100 " src="img/' . $img . '" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">' . $title . '</h6>
                        <div class="d-flex justify-content-center">
                            <h6>' . $discount . ' VND</h6><h6 class="text-muted ml-2"><del>' . $price . ' VND</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="index.php?pg=Detail&id=' . $id . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <input type="submit" name="themgiohang" value="Add To Cart" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>
                    </div>
                </div>
				<input type="hidden" name="quantity" value="1">
				<input type="hidden" name="title" value="' . $title . '">
				<input type="hidden" name="id" value="' . $id . '">
				<input type="hidden" name="discount" value="' . $discount . '">
				<input type="hidden" name="image" value="img/' . $img . '">
				
			</form>
            </div>
			';
            }
        } else {
            echo 'Không có dữ liệu!!';
        }
        mysqli_close($link);
    }

    public function xuatdanhmuc($sql)
    {
        $link = $this->connect();
        $ketqua = mysqli_query($link, $sql);
        $i = mysqli_num_rows($ketqua);
        if ($i > 0) {
            while ($row = mysqli_fetch_array($ketqua)) {
                $id = $row['id_category'];
                $name = $row['name'];


                echo '<a href="index.php?pg=Shop&id_category=' . $id . '" class="nav-item nav-link">' . $name . '</a>';
            }
        } else {
            echo 'Không có dữ liệu!!';
        }
    }
    public function xuatshop($sql)
    {
        $link = $this->connect();

        $ketqua = mysqli_query($link, $sql);
        $i = mysqli_num_rows($ketqua);
        if ($i > 0) {
            while ($row = mysqli_fetch_array($ketqua)) {
                $id = $row['id'];
                $title = $row['title'];

                $price = $row['price'];
                $discount = $row['discount'];
                $img = $row['image'];
                $des = $row['description'];


                echo '     <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
							<form action="index.php?pg=cart" method="post"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/' . $img . '" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">' . $title . '</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>' . $discount . '</h6><h6 class="text-muted ml-2"><del>' . $price . '</del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="index.php?pg=Detail&id=' . $id . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
								<input type="hidden" name="quantity" value="1">
				<input type="hidden" name="title" value="' . $title . '">
				<input type="hidden" name="id" value="' . $id . '">
				<input type="hidden" name="discount" value="' . $discount . '">
					<input type="hidden" name="image" value="img/' . $img . '">
                                <input type="submit" name="themgiohang" value="Add To Cart" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>
                            </div>
                        </div>
						</form>
                    </div>';
            }
        } else {
            echo 'Không có dữ liệu!!';
        }
        mysqli_close($link);
    }
    public function xuatchitiet($sql)
    {
        $link = $this->connect();

        $ketqua = mysqli_query($link, $sql);
        $i = mysqli_num_rows($ketqua);
        if ($i > 0) {
            while ($row = mysqli_fetch_array($ketqua)) {
                $id = $row['id'];
                $title = $row['title'];

                $price = $row['price'];
                $discount = $row['discount'];
                $img = $row['image'];
                $des = $row['description'];


                echo '     <div class="container-fluid py-5">
							<form action="index.php?pg=cart" method = "post">
							
							
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/' . $img . '" alt="Image">
							
                        </div>
                     
                    </div>
               </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">' . $title . '</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">' . $discount . ' VND</h3>
                <p class="mb-4">' . $des . '</p>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                   
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-1" name="size"value="XS">
                            <label class="custom-control-label" for="size-1">XS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-2" name="size" value="S">
                            <label class="custom-control-label" for="size-2">S</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-3" name="size"value="M">
                            <label class="custom-control-label" for="size-3">M</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-4" name="size"value="L">
                            <label class="custom-control-label" for="size-4">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-5" name="size"value="XL">
                            <label class="custom-control-label" for="size-5">XL</label>
                        </div>
                   
				   	
				<input type="hidden" name="title" value="' . $title . '">
				<input type="hidden" name="id" value="' . $id . '">
				<input type="hidden" name="discount" value="' . $discount . '">
					<input type="hidden" name="image" value="img/' . $img . '">
                </div>
               
                <div class="d-flex align-items-center mb-4 pt-2">
				
                    <div class="d-flex align-items-center mb-4 pt-2">
					
                    
                    
					
                </div>
				 <div class="d-flex align-items-center mb-4 pt-2">
				 <input style="width: 70px;margin-right:2px;text-align: center;" class="form-control" type="number" value="1" min="1 max="50" name="quantity">
			 <input type="submit" style="margin-right:2px;" name="themgiohang" value="Add To Cart" class="btn btn-primary px-3"  >

                 	
					
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
				</div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Chi tiết sản phẩm</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Thông tin sản phẩm</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Đánh giá (1)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Chi tiết sản phẩm</h4>
                        <p>' . $des . '</p>
                        
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Thông tin sản phẩm</h4>
                        <p>' . $des . '</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                       Vải rất đẹp
                                    </li>
                                    <li class="list-group-item px-0">
                                      Không bay màu
                                    </li>
                                    <li class="list-group-item px-0">
                                        Có thể giặt máy
                                    </li>
                                    <li class="list-group-item px-0">
                                        Khó bị hư hỏng
                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                       Chịu được thời tiết khắc nghiệt
                                    </li>
                                    <li class="list-group-item px-0">
                                        Nên phơi ngoài trời
                                    </li>
                                    <li class="list-group-item px-0">
                                        Phù hợp nhiều lứa tuổi
                                    </li>
                                    <li class="list-group-item px-0">
                                        Sản phẩm được chứng nhận
                                    </li>
                                  </ul> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 review for "' . $title . '"</h4>
                                <div class="media mb-4">
                                    <img src="img/nguoidung.jpeg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>Thầy Phước<small> - <i>05 May 2023</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Tôi khá hài lòng với sản phẩm nhưng giao hàng chậm. 3.5 Sao !!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Để lại bình luận</h4>
                                <small>Email của bạn sẽ không được công khai</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Đánh giá của bạn :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                
                                <form>
                                    <div class="form-group">
                                        <label for="message">Nhận xét của bạn</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên của bạn</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Địa chỉ email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Xác nhận" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</form>
    </div>';
            }
        } else {
            echo 'Không có dữ liệu!!';
        }
        mysqli_close($link);
    }
}
?>
