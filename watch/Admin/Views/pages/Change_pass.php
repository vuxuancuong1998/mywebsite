<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <h2 class="text-center">ĐỔI MẬT KHẨU</h2>
            <form action="./Admin/ChangePass/verify/<?php echo $data['id'] ?>" method="POST">
                <div class="form-group">
                    <label>Mật khẩu cũ</label>
                    <input type="password" class="form-control form-control-lg" placeholder="Mật khẩu cũ" name="olpassword">
                </div>
                <div class="form-group">
                    <label>Mật khẩu mới</label>
                    <input class="form-control form-control-lg" placeholder="Mật khẩu mới" type="password" name="password">
                </div>
                 <div class="form-group">
                    <label>Xác nhận mật khẩu</label>
                    <input class="form-control form-control-lg" placeholder="Xác nhận mật khẩu" type="password" name="repassword">
                </div>
                <div class="form-group">
                    <button class="btn btn-info btn-lg btn-block" name="btnChangePass">Đổi mật khẩu</button>
                </div>
            </form>
        </div>
    </div>
</div>