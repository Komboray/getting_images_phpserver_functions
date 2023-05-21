
<?php
   

   $db = mysqli_connect('localhost', 'root', '', 'kazi');

   if(!$db) {
    echo "Database connection failed";
   }

  

   $product = $db->query("SELECT * FROM products");
   $list = array();

   while ($rowdata= $product->fetch_assoc()){
    $list[] = $rowdata;
   }

   echo json_encode($list);





?>