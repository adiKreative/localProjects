<?php
if(isset($_POST['name'], $_POST['age'])){
    $db = new mysqli("localhost","root","","postdata");
    // Check connection
// if ($db->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else{
// echo "Connected successfully";
//}
    $name = $db->real_escape_string($_POST['name']);
    $age = (int)$db->real_escape_string($_POST['age']);
    $query = "INSERT INTO `data` SET `mydata` = '$name, $age'";
    $db->query($query);

}