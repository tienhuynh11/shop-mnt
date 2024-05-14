

<?php include ("header.php");?>
<div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Sản phẩm</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Thêm xóa sửa sản phẩm</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Danh sách đơn hàng	</a>
                </div>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-pane-1">
                    <h1>Danh sách sản phẩm</h1>
                          
                          <?php
						    $p->loadds_sanpham("select * from tbl_product");
						  ?>
                                               
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                    
                           <h1>Thêm xóa sửa sản phẩm</h1> 
                    
                    <form id="form1" name="form1" method="post" enctype="multipart/form-data">
  
  

  <?php 
   

	switch(isset($_POST['nut']))
	{
		case 'Thêm sản phẩm':
		{	
				
				$title = $_REQUEST['txttitle'];
				$des = $_REQUEST['txtdes'];
				$price = $_REQUEST['txtprice'];
				$discount = $_REQUEST['txtdiscount'];
				$quantity= $_REQUEST['txtquantity'];
				$type = $_FILES['myfile']['type'];
			$name = $_FILES['myfile']['name'];
				$id_category = $_REQUEST['cate'];
				$tmp_name = $_FILES['myfile']['tmp_name'];
			
			if ($type=='image/jpeg')
			{	
				$name = time()."_".$name;
				if($p->uploadhinh($name,"../img",$tmp_name))
		
				{
				
					if($p->themxoasua("Insert into tbl_product(id_category,title,quantity,price,discount,image,description) values ('$id_category','$title','$quantity','$price','$discount','$name','$des')")==1)
					{
						echo'<script>
							alert("Thêm thành công");
							</script>';
						echo'<script>
							window.location="../admin/";
							</script>';
							
					}
					else
					{
						echo'Thêm thất bại';	
					}
				
				}
				else
				{
					echo'Upload hình thất bại';	
				}
			}
			else
			{
				echo 'vui lòng chọn file hình ảnh';	
			}
			break;	
		}
		case'Xóa sản phẩm':
		{
			
				
			$layidchon =$_REQUEST['idchon'];	
			
			if ($layidchon >0)
			{
				$hinh =$p->choncot("select image from tbl_product where id = '$layidchon' limit 1");
				$vitrihinh = "../img/".$hinh;
				if (unlink($vitrihinh))
				{
					if($p->themxoasua("delete from tbl_product where id ='$layidchon' limit 1")==1)
					{
							echo'<script>
							alert("Xóa thành công");
							</script>';
						echo'<script>
							window.location="../admin/";
							</script>';
							
					}
					else
					{
					echo 'Xóa không thành công';	
					}
				}
				else
				{
					echo'Không xóa được hình ảnh';	
				}
			}
			else
			{
				echo 'Vui lòng chọn sản phẩm cần xóa';	
			}
			break; 
		}
		case 'Sửa sản phẩm':
		{	
				$layidchon =$_REQUEST['idchon'];
				$title = $_REQUEST['txttitle'];
				$description = $_REQUEST['txtdes'];
				$price = $_REQUEST['txtprice'];
				$discount = $_REQUEST['txtdiscount'];
				$quantity= $_REQUEST['txtquantity'];
				$id_category = $_REQUEST['cate'];
				
			if ($layidchon >0)	
				{
					if($p->themxoasua("UPDATE tbl_product SET id_category = '$id_category',title = '$title',quantity = '$quantity
					', price='$price', discount='$discount', description='$description' WHERE id =$layidchon LIMIT 1 ")==1)
					{
						echo'<script>
							alert("Sửa thành công");
							</script>';
						echo'<script>
							window.location="../admin/";
							</script>';
							
					}
					else
					{
						echo'Sửa thất bại';	
					}
				
				}
				else
				{
					echo'Chọn sản phẩm cần sửa';	
				}
			
			break;
		} 	
		
	}
	
			
			
?>

<table width="800" border="1" align="center" cellpadding="10" cellspacing="0">
    <tbody>
      <tr>
        <td colspan="2" align="center"><strong>Danh sách sản phẩm</strong></td>
      </tr>
      <tr>
        <td width="174" align="center"><strong>Title</strong></td>
        <td><input name="txttitle" type="text" id="txttitle" size="80" value="<?php echo $p->choncot("select title from tbl_product where id= '$layid' limit 1 ");?>" ></td>
      </tr>
    
      <tr>
        <td height="25" align="center"><strong>Description </strong></td>
        <td><textarea name="txtdes" cols="75" rows="6" id="txtdes"><?php echo $p->choncot("select description from tbl_product where id= '$layid' limit 1 ");?></textarea></td>
      </tr>
      <tr>
        <td align="center"><strong>Price</strong></td>
        <td><input name="txtprice" type="text" id="txtprice" size="80" value="<?php echo $p->choncot("select price from tbl_product where id= '$layid' limit 1 ");?>"></td>
      </tr>
        <tr>
        <td align="center"><strong>Discount</strong></td>
        <td><input name="txtdiscount" type="text" id="txtdiscount" size="80" value="<?php echo $p->choncot("select discount from tbl_product where id= '$layid' limit 1 ");?>"></td>
      </tr>
        <tr>
        <td align="center"><strong>Quantity</strong></td>
        <td><input name="txtquantity" type="text" id="txtquantity" size="80" value="<?php echo $p->choncot("select quantity from tbl_product where id= '$layid' limit 1 ");?>"></td>
      </tr>
      <tr>
        <td height="23" align="center"><strong>Image</strong></td>
        <td><input name="myfile" type="file"  id="myfile" ></td>
      </tr>
    <tr>
        <td height="23" align="center"><strong>Category</strong></td>
        <td><?php 
		$id_category=$p->choncot("select id_category from tbl_product where id ='$layid' limit 1");
	  $p->loadcategory("select * from tbl_category order by name asc",$id_category);
	 
	 ?>
        <input name="idchon" type="hidden" id="idchon" value="<?php echo $layid; ?>"></td>
      </tr>
      <tr>
        <td height="23" colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Thêm sản phẩm">
        <input type="submit" name="nut" id="nut" value="Sửa sản phẩm">
        <input type="submit" name="nut" id="nut" value="Xóa sản phẩm"></td>
      </tr>
    </tbody>
  </table>			

</form> 
                    
                    </div>
                    <div class="tab-pane fade " id="tab-pane-3">
                    	<h2 style="text-align:center">Danh sách đơn hàng</h2>
                        <?php 
						$p->loadds_donhang("select * from tbl_order");
						
						?>
                        
                    </div>
                </div>
            </div>
        </div>     


    <div id="admin-footer" style="margin-top:10px">
        <div class="container">
            <div class="left-panel">
                © Copyright 2023 - MNT Shop
            </div>
            <div class="right-panel">
                <a target="_blank" href="https://www.facebook.com/HuuMjnt.0610" title="Facebook MNT Shop"><img height="48" src="img/icon_fb.png" /></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCL0TRguwV_cNU-YEuYLo2Mw" title="Youtube Andn Training Channel"><img height="48" src="img/icon_ytb.png" /></a>
            </div>
            <div class="clear-both"></div>
        </div>
    </div>