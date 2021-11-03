<?php

//kiểm tra tên người dùng có tồn tại trong database hay không
class UserModel extends DB
{
    //check user ajax
    public function checkUserModel($user)
    {
        $qr = "SELECT * FROM user WHERE username = '$user'";
        $result = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($result) > 0) {
            echo "user không hợp lệ";
        } else {
            echo "có thể dùng";
        }
        mysqli_close($this->conn);
    }
    //check email ajax
    public function checkEmailModel($email)
    {
        $qr = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($result) > 0) {
            echo "email không hợp lệ";
        } else {
            echo "có thể dùng";
        }
        mysqli_close($this->conn);
    }
    //thêm user mới
    public function insertUser($username, $email, $password)
    {
        $qr = "INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`) VALUES (NULL, '$username', '$email', '$password', '1')";
        $result = mysqli_query($this->conn, $qr);
        if($result){
          $_SESSION["user_email"] = $email;
        }
        mysqli_close($this->conn);
    }

    // kiểm tra đăng nhập

    public function checkUserNamePass(){
        $email = $_POST['Email'];
        $pass = $_POST['password'];
        $qr = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($result) > 0) {
            $row = $result->fetch_assoc();
            if(password_verify($pass, $row['password'])){
              $_SESSION["user_email"] = $email;
              return true;
            }else{
              return false;
            }

        } else {
            return false;
        }
        mysqli_close($this->conn);

    }
}
