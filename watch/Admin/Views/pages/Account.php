<div class="d-sm-flex align-items-center justify-content-between mb-4">
		   <a href="#" class = "btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Thêm tài khoản</a>
		  

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Thêm tài khoản</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
                    <form action="./Admin/Account/CreateAccount" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên tài khoản</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên tài khoản" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Họ và tên</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập họ và tên" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mật khẩu</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập mật khẩu" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu" name="repassword">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Nhập email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Địa chỉ</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ" name="address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SDT</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập số điện thoại" name="phone_number">
  </div>
  <button type="submit" class="btn btn-primary" name="btnCreateAccount">Thêm tài khoản</button>
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
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Email</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SDT</th>
      <th scope="col">Ngày đăng kí</th>

      <th scope="col">Tác vụ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php 
		while ($row=mysqli_fetch_array($data["list_account"])) {
			echo '<tr>';
			echo '<th scope="row">'.$row["user_id"].'</th>';	
			echo '<td>'.$row["username"].'</td>';	
			echo '<td>'.$row["email"].'</td>';  
			echo '<td>'.$row["address"].'</td>';
			echo '<td>'.$row["phone_number"].'</td>';
			echo '<td>'.$row["create_day"].'</td>';	
			echo 
			'<td> 
				<a href = "./Admin/Account/DeleteAccount/'.$row["user_id"].'"><i class="far fa-trash-alt">Delete</i></a>
                <a href = "./Admin/Acccount/UpdateAccount/'.$row["user_id"].'" data-toggle="modal" data-target="#myModal'.$row["user_id"].'"><i class="fas fa-edit">Edit</i></a>
				
 

<!-- The Modal -->
<div class="modal" id="myModal'.$row["user_id"].'">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sửa tài khoản</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form class ="text-center border border-light p-5" action = "./Admin/Account/UpdateAccount/'.$row["user_id"].'" method="POST" >
      <div class="form-group ">
          <input type="text" class="form-control" id="inputEmail" placeholder="Tên tài khoản" name="username" value="'.$row["username"].'">
      </div>
      <div class="form-group">
         
          <input type="text" class="form-control" id="inputPassword" placeholder="Họ và tên" name="name" value = "'.$row["name"].'">
      </div>
     
      <div class="form-group">
         
          <input type="email" class="form-control" id="inputPassword" placeholder="Email" name="email" value = "'.$row["email"].'">
      </div>
      <div class="form-group">
          
          <input type="text" class="form-control" id="inputPassword" placeholder="Địa chỉ" name="address" value = "'.$row["address"].'">
      </div>
      <div class="form-group">
         
          <input type="text" class="form-control" id="inputPassword" placeholder="SDT" name="phone_number" value = "'.$row["phone_number"].'">
  
      </div>
     
  
      
      <button type="submit" class="btn btn-primary" name="update">Sửa tài khoản</button>
  </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
            <a href = "./Admin/Account/AccountDetail/'.$row['user_id'].'"><i class="fas fa-info-circle">Detail</i></a>
			</td>'	;		
		 	echo '</tr>';
		}
		?>
      
   
  </tbody>
</table>

		
	
		
		
