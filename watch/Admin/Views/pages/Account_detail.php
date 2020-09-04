<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên tài khoản</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Email</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SDT</th>
      <th scope="col">Ngày đăng kí</th>
      <th scope="col">Quyền hạn</th>


    </tr>
  </thead>
    <tbody>
        <?php
        echo "<tr>";
        echo '<th>'.$data["account_id"]["user_id"].'</th>';
        echo '<td>'.$data["account_id"]["username"].'</td>';
        echo '<td>'.$data["account_id"]["name"].'</td>';
        echo '<td>'.$data["account_id"]["email"].'</td>';
        echo '<td>'.$data["account_id"]["address"].'</td>';
        echo '<td>'.$data["account_id"]["phone_number"].'</td>';
        echo '<td>'.$data["account_id"]["create_day"].'</td>';
        if($data["account_id"]["rule"] == 1){
        echo '<td>Quản trị</td>';
        }else echo '<td>Thành viên</td>';

        echo "</tr>";
        ?>
    </tbody>
</table>