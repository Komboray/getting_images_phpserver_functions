<?php
$db = mysqli_connect('localhost', 'root', '', 'kazi');
if(!$db){
    echo "Databse conn failed";
}

$image = $_FILES['image']['name'];
$name = $_POST['name'];

$imagePath = 'uploads/'.$image;
$tmp_name = $_FILES ['image']['tmp_name'];

move_uploaded_file($tmp_name, $imagePath);

$db->query("INSERT INTO products(name, image) VALUES('".$name."', '".$image."')");




?>