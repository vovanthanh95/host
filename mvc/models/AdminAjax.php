<?php
/**
 *
 */
/**
 *
 */


class AdminAjax extends DB
{
    public function getDataCategory()
    {
        $data = array();
        $qr = "SELECT * FROM category";
        $result = mysqli_query($this->conn, $qr);
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    public function getDataProduct()
    {
        $data = array();
        $qr = "SELECT * FROM product";
        $result = mysqli_query($this->conn, $qr);
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    public function deleteCategory($idcategory)
    {
        $qr ="DELETE FROM category WHERE id = $idcategory";
        $result = mysqli_query($this->conn, $qr);
        if ($result) {
            echo "xóa thành công";
        } else {
            echo "xóa thất bại";
        }
    }

    public function addCategory($namcategory)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $time = date("Y-m-d H:i:s");
        $qr ="INSERT INTO `category` (`id`, `category`, `create_at`, `edit_at`) VALUES (NULL, '$namcategory', '$time', '$time')";
        $result = mysqli_query($this->conn, $qr);
        if ($result) {
            echo "thêm thành công";
        } else {
            echo "thêm thất bại";
        }
    }

    public function editCategory($id,$newname){
      date_default_timezone_set("Asia/Ho_Chi_Minh");
      $time = date("Y-m-d H:i:s");
      $qr ="UPDATE `category` SET `category`= '$newname', `edit_at`= '$time' WHERE `id`= '$id'";
      $result = mysqli_query($this->conn, $qr);
      if ($result) {
          echo "sửa thành công";
      } else {
          echo "sửa thất bại";
      }
    }
    //check category name ajax
    public function checkNameCategory($name)
    {
        $qr = "SELECT * FROM category WHERE category = '$name'";
        $result = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($result) > 0) {
            echo "danh mục đã tồn tại";
        } else {
            echo "danh mục hợp lệ";
        }
        mysqli_close($this->conn);
    }

    //admin check Login ajax
    public function adminLogin($useremail, $pass ){
      $qr = "SELECT * FROM user WHERE username = '$useremail'";
      $result = mysqli_query($this->conn, $qr);
      if (mysqli_num_rows($result) > 0) {
          $row = $result->fetch_assoc();
          if (password_verify($pass, $row['password']) && $row['level']== 0 ) {
              $_SESSION["user-email"] = $useremail;
              $_SESSION["level"] = $row['level'];
              echo "1";
          } else {
              echo "tên hoặc mật khẩu không đúng";
          }
      } else {
          echo "tên hoặc mật khẩu không đúng";
      }
      mysqli_close($this->conn);
    }
}
