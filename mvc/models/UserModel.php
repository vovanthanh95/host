<?php

//kiểm tra tên người dùng có tồn tại trong database hay không
class UserModel extends DB {
public function checkUserModel($user){
  $qr = "SELECT * FROM user WHERE username = '$user'";
  $result = mysqli_query($this->conn, $qr);
if(mysqli_num_rows($result) > 0)
{
  echo "user không hợp lệ";
}else{
  echo "có thể dùng";
}

}

public function insertUser($username, $email, $password){
  $qr = "INSERT INTO user (username, email, password, level) VALUES ($username, $email, $password, 1)";
  var_dump($qr);
  $result = mysqli_query($this->conn, $qr);
  var_dump($result);
}
}

 ?>
