<?php
      $conn = mysqli_connect('localhost', 'root');
      mysqli_select_db($conn, 'demo_db');
      $sql = "SELECT  * FROM products WHERE id=1";
      $id = $conn -> query($sql);
?>