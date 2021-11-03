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
      while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
      echo json_encode($data);
  }
}


 ?>
