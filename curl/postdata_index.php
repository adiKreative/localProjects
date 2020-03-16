<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">	
			<h2>Curl data submit</h2>
			<div class="row">
				<div class="col-md-4">
					<p>ssssssssssssssssssssssssssss</p>
				</div>
				<div class="col-md-4">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<input type="text" name="user_name" value="">
						<input type="text" name="user_age" value=""><br/>
						<input type="submit" name="submit" value="Submit">
					</form>
					
				</div>
			</div>	
	</div>

</body>
</html>

<?php
if(isset($_REQUEST['submit'])){

	$data = array("name"=>$_REQUEST['user_name'], "age"=> $_REQUEST['user_age']);
	$string = http_build_query($data);

$ch = curl_init("http://localhost/practice/curl/postdata_to_server.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
$response = curl_exec($ch);
if($response == true){
    echo "Data Inserted Succesfully";
}else{
    echo "Error: ".curl_error($ch);
}
curl_close($ch);

}


