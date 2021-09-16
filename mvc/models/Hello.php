<?php

class Hello extends DB {

    public function hL() {
        $qr = "SELECT * FROM user";
        $result = mysqli_query($this->conn, $qr);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $x = "id: " . $row["id"] . " - name: " . $row["name"] . " - age: " . $row["age"]. "<br>";
            }
        } else {
            echo "Không có record nào";
        }
        return $x;
    }

}
?>

