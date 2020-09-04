<div class="d-sm-flex align-items-center justify-content-between mb-4">
		   <a href="#" class = "btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Thêm Slider</a>
		  

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Thêm Slider</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
                    <form action="./Admin/Slider/AddSlider" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên Slider</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên slider" name="slider_name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Hình ảnh</label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="slider_image">
  </div>
  <button type="submit" class="btn btn-primary" name="btnCreateAccount">Thêm slide</button>
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
      <th scope="col">Tên slider</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Ngày đăng kí</th>
      <th scope="col">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php 
		while ($row=mysqli_fetch_array($data["list_slider"])) {
			echo '<tr>';
			echo '<th scope="row">'.$row["slider_id"].'</th>';	
            echo '<td>'.$row["slider_name"].'</td>';
            echo '<td><img src = "./public/img/sliders/'.$row["slider_image"].'" width = 80px;></td>';
			echo '<td>'.$row["create_day"].'</td>';	
			echo 
			'<td> 
				<a href = "./Admin/Slider/DeleteSlider/'.$row["slider_id"].'"><i class="far fa-trash-alt">Delete</i></a>
                <a href = "./Admin/Slider/UpdateSlider/'.$row["slider_id"].'" data-toggle="modal" data-target="#myModal'.$row["slider_id"].'"><i class="fas fa-edit">Edit</i></a>
				
 

<!-- The Modal -->
<div class="modal" id="myModal'.$row["slider_id"].'">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sửa Slider</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

      <form class ="text-center border border-light p-5" action = "./Admin/Account/UpdateSlider/'.$row["slider_id"].'" method="POST" >
      <div class="form-group ">
        <div class="input-group-prepend">
              <label class="input-group-text" >Tên slider</label>
          <input type="text" class="form-control" id="inputEmail" placeholder="Tên slider" name="slider_name" value="'.$row["slider_name"].'">
        </div>
      </div>

      <div class="form-group">
             <div class="input-group-prepend">
              <label class="input-group-text" >Hình ảnh</label>
                <input type="file" class="form-control" id="inputPassword" name="slider_image">
             </div>
      </div>
     
     
      <button type="submit" class="btn btn-primary" name="update">Sửa slider</button>
  </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
			</td>'	;		
		 	echo '</tr>';
		}
		?>
      
   
  </tbody>
</table>

		
	
		
		
