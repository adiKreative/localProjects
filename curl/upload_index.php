<html>
<form action="upload_index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="submit" name="submit" value="Post" />
</form>
</html>

<?php

if(isset($_FILES['image']['tmp_name'])){
    $ch = curl_init();
    // Create a CURLFile object
    $c_file = new CURLFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name'] );
    $data = array("myimage"=>$c_file);
    curl_setopt($ch, CURLOPT_URL, "http://localhost/practice/curl/upload_file.php");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if($response == true){
        echo "File posted";
    }else{
        echo "Error: ". curl_error($ch);
    }
    curl_close($ch);
}

?>