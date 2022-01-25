<?php
$longUrl= $_REQUEST['url'];
$shortUrl= substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),2,6);
$conn = new mysqli("localhost","root","","url");
if($conn->connect_error) {
    die("connection failed:".$conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO urlshortener(shorturl,longurl) VALUES(?,?)");
$stmt->bind_param("ss",$shortUrl,$longUrl);
$stmt->execute();
$stmt->close();
if(!$stmt){
    echo "data not inserted";
}

$data= ["long_url"=>$longUrl,"short_url"=>"$shortUrl"];
echo json_encode($data);