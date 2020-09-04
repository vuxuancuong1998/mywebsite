<div class = "container container-register">
    <div class = "register " style="margin: 50px 0px 50px 300px;">
    <form class="form-horizontal" role="form" method="POST" action="./Main/Account/verifyRegister">
        <div class="row">
            <div class="col ">
                <h2 class = "text-center">Đăng Ký Tài Khoản</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 field-label-responsive">
                <label for="name">Tên tài khoản:</label>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="username" class="form-control" 
                               placeholder="Tên tài khoản" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>


        
        <div class="row">
            <div class="col-sm-4 field-label-responsive">
                <label for="name">Họ và tên:</label>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="name" class="form-control" 
                               placeholder="Họ và tên" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>

        
        <div class="row">
            <div class="col-sm-4 field-label-responsive">
                <label for="name">Mật khẩu:</label>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="password" name="password" class="form-control" 
                               placeholder="Mật khẩu" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>


        <div class="row">
            <div class="col-sm-4 field-label-responsive">
                <label for="name">Nhập lại mật khẩu:</label>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="password" name="repassword" class="form-control" 
                               placeholder="Nhập lại mật khẩu" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>


        <div class="row">
            <div class="col-sm-4 field-label-responsive">
                <label for="email">Email</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@gmail.com" required autofocus>
                    </div>
                </div>
            </div>
        </div>
           
       
            <div class="row">
                <div class="col-sm-4 field-label-responsive">
                    <label for="name">Địa chỉ:</label>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <input type="text" name="address" class="form-control" 
                                placeholder="Địa chỉ" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-4 field-label-responsive">
                <label for="name">Số điện thoại:</label>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="phone_number" class="form-control" 
                               placeholder="+84123123" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>


            <div class="col-sm-4 " style="margin: 0px 0px 0px 286px;">
                <button type="submit" name="btnRegister" class="btn btn-success "><i class="fa fa-user-plus"></i> Register</button>
            </div>
        </div>
            
        </div>

        
    </form>
</div>
</div>
