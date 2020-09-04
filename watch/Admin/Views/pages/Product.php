<div class="d-sm-flex align-items-center justify-content-between mb-4">
		   <a href="#" class = "btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Thêm Sản Phẩm</a>
		  

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
          <form action="./Admin/Product/AddProduct" method="POST" enctype="multipart/form-data">
   
         <div class="form-group">
            <label for="exampleInputPassword1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm" name="product_name">
          </div>
           <div class="form-group">
           <label for="exampleFormControlTextarea1" >Thông tin</label>
            <textarea name="product_descript" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Hãng</label>
            <select id="exampleInputPassword1" name="product_category_id">
                            <option selected>Choose...</option>
              <option value=1>Casio</option>
              <option value=2>Bulova</option>
              <option value=3>Orient</option>
              <option value=4>Ogival</option>
              <option value=5>Senko</option>

            </select>
          </div>
         
         <div class="form-group">
            <label for="exampleInputPassword1">Giá sản phẩm</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Giá sản phẩm" name="product_price">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Hình ảnh</label>
            <input type="file" class="form-control" id="exampleInputPassword1"  name="product_url">
          </div>

         <div class="form-group">
            <label for="exampleInputPassword1">Số lượng</label>
            <input type="text" class="form-control"  name="quantity">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Giới tính</label>
            <select id="exampleInputPassword1" name="product_gender">
              <option selected>Choose...</option>
              <option value=1>Nam</option>
              <option value=2>Nữ</option>
            </select>


            <label for="exampleInputPassword1">Trạng thái</label>
            <select id="exampleInputPassword1" name="product_status">
              <option selected>Choose...</option>
              <option value=1>New</option>
              <option value=2>On Sale</option>
            </select>
         
             <label for="exampleInputPassword1">Loại</label>
            <select id="exampleInputPassword1" name="type">
              <option selected>Choose...</option>
              <option value=1>Đồng hồ</option>
              <option value=2>Phụ kiện</option>
            </select>
          </div>


         
           
       

          <button type="submit" class="btn btn-primary" name="btnAdd">Add Product</button>

        </form>



	
					
					
				
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
					</div>
				</div>
				</div>
          </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Thông tin</th>
      <th scope="col">Giá</th>
      <th scope="col">Hình ảnh</th>
       <th scope="col">Giới tính</th>
      <th scope="col">Ngày đăng kí</th>

      <th scope="col">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php 
		while ($row=mysqli_fetch_array($data["listProduct"])) {
			echo '<tr>';
			echo '<th scope="row">'.$row["product_id"].'</th>';	
			echo '<td>'.$row["product_name"].'</td>';	
			echo '<td>'.$row["product_descript"].'</td>';  
			echo '<td>'.$row["product_price"].'</td>';
      echo '<td><img src = "./public/img/product/'.$row["product_url"].'" width = 80px;></td>';
       echo '<td>';if($row["product_gender"] == 1){
          echo "Nam";
         }else echo "Nữ";
         echo '</td>';
			echo '<td>'.$row["create_day"].'</td>';	
			echo 
			'<td> 
				<a href = "./Admin/Product/DeleteProduct/'.$row["product_id"].'"><i class="far fa-trash-alt">Delete</i></a>
                <a href = "./Admin/Product/UpdatePrduct/'.$row["product_id"].'" data-toggle="modal" data-target="#myModal'.$row["product_id"].'"><i class="fas fa-edit">Edit</i></a>
				
 
<!-- The Modal Edit-->


<div class="modal" id="myModal'.$row["product_id"].'">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form class ="text-center border border-light p-5" action = "./Admin/Product/UpdateProduct/'.$row["product_id"].'" method="POST"  enctype="multipart/form-data">
      <div class="form-group ">
       <div class="input-group-prepend">
              <label class="input-group-text" >Tên sản phẩm</label>
            
          <input type="text" class="form-control" id="inputEmail" placeholder="Tên sản phẩm" name="product_name" value="'.$row["product_name"].'">
          </div>
      </div>
    <div class="input-group ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Hãng</label>
            </div>';
            echo '<select class="custom-select" id="inputGroup" name="product_category_id">';
            
 echo '<option value="'.$row['product_category_id'].'"'; if($row['product_category_id']==1) echo 'selected = "selected"'; echo '>Casio</option>';
          
  echo '<option value="'.$row['product_category_id'].'"'; if($row['product_category_id']==2) echo 'selected = "selected"'; echo '>Bulova</option>';
  
  echo '<option value="'.$row['product_category_id'].'"'; if($row['product_category_id']==3) echo 'selected = "selected"'; echo '>Orient</option>';
  
  echo '<option value="'.$row['product_category_id'].'"'; if($row['product_category_id']==4) echo 'selected = "selected"'; echo '>Ogival</option>';
  
  echo '<option value="'.$row['product_category_id'].'"'; if($row['product_category_id']==5) echo 'selected = "selected"'; echo '>Senko</option>';
            echo '</select>
        </div>

     <div class="form-group">
           <div class="input-group-prepend">
              <label class="input-group-text" >Thông tin</label>
           
           <textarea name="product_descript" class="form-control" id="exampleFormControlTextarea" rows="3" value = "'.$row['product_descript'].'"></textarea>
            </div>
      </div>
       <div class="input-group ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Giá sản phẩm</label>
            </div>
            <input class="form-control" id="inputGroup" type = "text" name="product_price" value = "'.$row['product_price'].'">
              
        </div>

        <div class="input-group ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Số lượng</label>
            </div>
            <input class="form-control" id="inputGroup" type = "number" min = "0" name="quantity" value = "'.$row['product_quantity'].'">
              
        </div>

       <div class="input-group ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Hình ảnh</label>
            </div>
            <input class="custom-select" id="inputGroup" type = "file" value = "'.$row['product_url'].'" name="product_url">
              
        </div>
      <div class="form-group">
         <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Giới tính</label>
                 <select id="exampleInputPassword1" name="product_gender">';
                        echo'<option>Choose...</option>';

                         echo '<option value="'.$row['product_gender'].'" ';if($row['product_gender'] == 1) echo 'selected = "selected"'; echo '>Nam</option>';
                         echo '<option value="'.$row['product_gender'].'" ';if($row['product_gender'] == 2) echo 'selected = "selected"'; echo '>Nữ</option>';
                  

                echo '</select>
            </div>
          
      </div>
    

      <div class="form-group">
         <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Trạng thái</label>
                 <select id="exampleInputPassword1" name="product_status">';
                        echo'<option>Choose...</option>';
                         echo '<option value="'.$row['product_status'].'" ';if($row['product_status'] == 0) echo 'selected = "selected"'; echo '>Bình thường</option>';
                         echo '<option value="'.$row['product_status'].'" ';if($row['product_status'] == 1) echo 'selected = "selected"'; echo '>New</option>';
                         echo '<option value="'.$row['product_status'].'" ';if($row['product_status'] == 2) echo 'selected = "selected"'; echo '>On Sale</option>';
                  

                echo '</select>
            </div>
          
      </div>






        <div class="input-group ">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroup">Loại</label>
            </div>
            <select id="exampleInputPassword1" name="type">';
                        echo'<option>Choose...</option>';
                         echo '<option value="'.$row['type'].'" ';if($row['type'] == 1) echo 'selected = "selected"'; echo '>Đồng hồ</option>';
                         echo '<option value="'.$row['type'].'" ';if($row['type'] == 2) echo 'selected = "selected"'; echo '>Phụ kiện</option>';
                        
                  

                echo '</select>
        </div>
      
  
      
      <button type="submit" class="btn btn-primary" name="update">Update Product</button>
  </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
            <a href = "./Admin/Product/DetailProduct/'.$row['product_id'].'"><i class="fas fa-info-circle">Detail</i></a>
			</td>'	;		
		 	echo '</tr>';
		}
		?>
      
   
  </tbody>
</table>

		
	
		
		
