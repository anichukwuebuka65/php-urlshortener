<?php
$longUrl= $_REQUEST['url'];


$shortUrl= substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),2,6);

$host= 'ec2-44-199-52-133.compute-1.amazonaws.com';
$port= '5432';
$dbName= 'd72etvqnc2tc7n';
$user= 'nirbyceyngtaev';
$password= '0f4be1ae2ef2a6867f5885ccb4abdf7947ce187175686d7f7968ddd10a168002';

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