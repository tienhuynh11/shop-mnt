<?php include ("func.php");
	 class admin extends shopfunc 
	 {
		public function themxoasua($sql)
		{
			$link = $this->connect();
			if(mysqli_query($link, $sql))
			{
				 return 1;
			}
			else
			{	
				return 0;
			}
		}
		public function loadcategory($sql,$idcongty)
		{
			$link =$this->connect();
			$ketqua = mysqli_query($link, $sql);
			$i = mysqli_num_rows($ketqua);
			
			if ($i >0)
			{	echo '<select name="cate" id="cate">
          				<option>Vui lòng chọn loại sản phẩm</option>';
				while ($row=mysqli_fetch_array($ketqua))
				{
				$id = $row['id_category'];
				$name = $row['name'];
					if ($id == $idcongty)
					{
						echo '  <option value="'.$id.'" selected>'.$name.'</option>';
					}
					else
					{
						echo '  <option value="'.$id.'">'.$name.'</option>';
					}
				}
				echo '</select>';
			}
			else
			{
				echo 'Chưa có dữ liệu ';
			}
			mysqli_close($link);	
		} 
		public function uploadhinh ($name,$folder,$tmp_name)
		{
			if($name!= '' & $folder != '' && $tmp_name !='')
			{
				$newname = $folder ."/".$name;
				if(move_uploaded_file($tmp_name,$newname))
				{
					return 1;
				}
				else
				{
					return 0;	
				}
			}
			else 
			{
				return 0;	
			}
		}
		public function loadds_sanpham($sql)
		{
			$link =$this->connect();
			$ketqua = mysqli_query($link, $sql);
			$i = mysqli_num_rows($ketqua);
			
			if ($i >0)
			{
				echo '<table width="895" border="1" align="center">
					  <tbody>
						<tr>
						  <td width="54" align="center"><strong>STT</strong></td>
						  <td width="235" align="center"><strong>TênSP</strong></td>
						  <td width="156" align="center"><strong>Mô tả</strong></td>
						   <td width="156" align="center"><strong>Giá gốc</strong></td>
						  <td width="422" align="center"><strong>Giá giảm</strong></td>
						   <td width="156" align="center"><strong>Số lượng</strong></td>
						</tr>';
				$stt=0;
				while ($row=mysqli_fetch_array($ketqua))
				{
				$id = $row['id'];
				$title = $row['title'];
				$des = $row['description'];
				$price = $row['price'];
				$discount = $row['discount'];
				$quantity = $row['quantity'];
				$stt++;
				echo ' <tr>
					  <td align="center"><a href="?layid='.$id.'">'.$stt.'</a></td>
					  <td align="center"><a href="?layid='.$id.'">'.$title.'</a></td>
					  
					  <td align="center"><a href="?layid='.$id.'">'.$des.'</a></td>
					  <td align="center"><a href="?layid='.$id.'">'.$price.'</a></td>
					  <td align="center"><a href="?layid='.$id.'">'.$discount.'</a></td>
					  <td align="center"><a href="?layid='.$id.'">'.$quantity.'</a></td>
					</tr>';
				
				}
				echo '  </tbody>
						</table>';

			}
			else
			{
				echo 'Chưa có dữ liệu ';
			}
			mysqli_close($link);		
		}
		public function loadds_donhang($sql)
		{
			$link =$this->connect();
			$ketqua = mysqli_query($link, $sql);
			$i = mysqli_num_rows($ketqua);
			
			if ($i >0)
			{
				echo '<table width="895" border="1" align="center">
					  <tbody>
						<tr>
						  <td width="54" align="center"><strong>ID đơn hàng</strong></td>
						  <td width="235" align="center"><strong>ID sản phẩm</strong></td>
						  <td width="156" align="center"><strong>Tên sản phẩm</strong></td>
						   <td width="156" align="center"><strong>Số lượng</strong></td>
						  <td width="422" align="center"><strong>Đơn giá</strong></td>
						   <td width="156" align="center"><strong>Tổng tiền</strong></td>
						</tr>';
				$stt=0;
				$tong=0;
				while ($row=mysqli_fetch_array($ketqua))
				{
				$id_tran = $row['id_tran'];
				$id_product= $row['id_product'];
				$title=$row['title'];
				$qty= $row['qty'];
				$amout = $row['amout'];
				$total= $row['total'];
				
				$stt++;
				echo ' <tr>
					  <td align="center"><a href="">'.$id_tran.'</a></td>
					  <td align="center"><a href="">'.$id_product.'</a></td>
					  
					  <td align="center"><a href="">'.$title.'</a></td>
					  <td align="center"><a href="">'.$qty.'</a></td>
					  <td align="center"><a href="">'.$amout.'</a></td>
					  <td align="center"><a href="">'.$total.'</a></td>
					</tr>';
					$tong = $tong+$total;
				
				}
				echo '  </tbody>
						</table>';

			}
			else
			{
				echo 'Chưa có dữ liệu ';
			}
			mysqli_close($link);		
		}
		public function choncot($sql)
		{
			$link =$this->connect();
			$ketqua = mysqli_query($link, $sql);
			$i = mysqli_num_rows($ketqua);
			$giatri = '';
			if ($i >0)
			{
				while ($row=mysqli_fetch_array($ketqua))
				{
					$giatri= $row[0];
				}
				
			}
			
			return $giatri;	
		}
		  
	}
?>