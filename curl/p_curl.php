<?php 

// From URL to get webpage contents. 

$s = "games+2020"; 
$url = "https://www.amazon.in/s?k=$s"; 

// Initialize a CURL session. 
$ch = curl_init(); 



//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, $url); 
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

curl_setopt($ch, CURLOPT_HEADER, 0); 

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false ); 

$result = curl_exec($ch); 

preg_match_all("!https://m.media-amazon.com/images/I/[^\s]*?._AC_UL320_ML3_.jpg!", $result, $matches);

$imgs = array_values(array_unique($matches[0]));

foreach($imgs as $k=>$val){

	echo '<div style="float: left; margin: 10 0 0 0">';
	echo '<img src="'.$val.'" /><br/>';
    echo '</div>';

}
curl_close($ch);



?> 
