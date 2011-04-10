<?php
$key = "your_api_key";
$id=$_GET['id'];
if(!isset($_GET['id'])) 
	{
	echo "<p>Please supply a JSON object id by appending the id variable to the url	e.g. curl_get.php?id=37</p>";
	die;
	}
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://my.1010uk.org/api/profile/energy/electricity/$id?key=$key");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
?>
