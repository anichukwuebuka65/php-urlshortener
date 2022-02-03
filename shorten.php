<?php
$longUrl= $_REQUEST['url'];


$shortUrl= substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),2,6);

$host= 'localhost';
$port= '5432';
$dbName= 'postgres';
$user= 'root';
$password= '123456';

try {
    //code...
    $dsn = "pgsql:host=$host;dbname=$dbName;port=$port;";
    $conn = new PDO ($dsn, $user, $password);
    if(!$conn){
        die();
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
$data = ['shorturl'=> $shortUrl, 'longurl'=> $longUrl];
$sql = "INSERT INTO urlshortener(shorturl,longurl) VALUES(:shorturl,:longurl)";

$stmt=$conn->prepare($sql);
$stmt->execute($data);
if(!$stmt){
    die();
}

$data= ["long_url"=>$longUrl,"short_url"=>$shortUrl];
echo json_encode($data);

?>