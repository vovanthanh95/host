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
        $qr = "SELECT p.id, p.productname, p.productprice, p.productquantity, p.productdescription, p.productimage, p.productother, c.category FROM product as p, category as c WHERE p.productcategory = c.id";
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
            echo "0";
        } else {
            echo "1";
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

    //upload image product AjaxProduct
    public function addProduct(){
      $qr = "SELECT MAX(id) FROM product";
      $result = mysqli_query($this->conn, $qr);
      $row = $result->fetch_assoc();
      $id = $row['MAX(id)'];
      if($id == NULL){
        $qr = "ALTER TABLE product AUTO_INCREMENT = 1";
        $r = mysqli_query($this->conn, $qr);
        $id = 0;
      }

      $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

      $productname = $_POST["name"];
      $productprice = $_POST["price"];
      $productcategory = $_POST["idcategory"];
      $productquantity = $_POST["quantity"];
      $productdescription = $_POST["description"];
      $productimage = ($id+1).".".$ext;
      $productother = $_POST["other"];
      $qr2 = "INSERT INTO `product` (`id`, `productname`, `productprice`, `productcategory`, `productquantity`, `productdescription`, `productimage`, `productother`) VALUES (NULL, '$productname', '$productprice', '$productcategory', '$productquantity','$productdescription', '$productimage', '$productother')";

      $result2 = mysqli_query($this->conn, $qr2);
      if(isset($_FILES['file'])) {
                    $path= "./../mvc/public/images/products/".++$id.".".$ext;
                    $flag = move_uploaded_file($_FILES["file"]["tmp_name"],$path);
                    if($flag && $result2) {
                      echo "thêm thành công";
                    }else{
                      echo "thêm thất bại";
                    }
                }
    }

    public function deleteProduct($idproduct)
    {
        $qr ="DELETE FROM product WHERE id = $idproduct";
        $result = mysqli_query($this->conn, $qr);
        $removeimg = unlink("./../mvc/public/images/products/".$idproduct.".jpg");
        if ($result && $removeimg) {
            echo "xóa thành công";
        } else {
            echo "xóa thất bại";
        }
    }

    //get product by id
    public function getProductById($id){
      $qr = "SELECT p.id, p.productname, p.productprice, p.productquantity, p.productdescription, p.productimage, p.productother, c.category FROM product as p, category as c WHERE p.productcategory = c.id and p.id = $id";
      $result = mysqli_query($this->conn, $qr);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
    }

    public function editProduct()
    {
      $id = $_POST["id"];
      $productname = $_POST["name"];
      $productprice = $_POST["price"];
      $productcategory = $_POST["idcategory"];
      $productquantity = $_POST["quantity"];
      $productdescription = $_POST["description"];
      $productother = $_POST["other"];
      $qr = "UPDATE `product` SET `productname` = '$productname', `productprice` = '$productprice', `productcategory` = '$productcategory', `productquantity` = '$productquantity', `productdescription` = '$productdescription', `productother` = '$productother' WHERE `product`.`id` = $id";
      $result = mysqli_query($this->conn, $qr);
      if(isset($_FILES['file'])){
        $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        $path= "./../mvc/public/images/products/".$id.".".$ext;
        $flag = move_uploaded_file($_FILES["file"]["tmp_name"],$path);
      };
      if($result){
        echo "thay đổi thành công";
      }else{
        echo "thay đổi thất bại";
      }
    }

    //check products name ajax
    public function checkNameProduct($name)
    {
        $qr = "SELECT * FROM product WHERE productname = '$name'";
        $result = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($result) > 0) {
            echo "0";
        } else {
            echo "1";
        }
        mysqli_close($this->conn);
    }
}
