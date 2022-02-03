<?php
$shortUrl= $_GET['link'];

$host= 'localhost';
$port= '5432';
$dbName= 'postgres';
$user= 'root';
$password= '123456';
try {
    //code...
    $dsn = "pgsql:host=$host;dbname=$dbName;port=$port;";
    $conn = new PDO ($dsn, $user, $password);
    if($conn){
        echo "connected successfully";
    }
} catch (PDOException $e) {
    die($e->getMessage());
}

$sql = "SELECT longurl FROM urlshortener WHERE shorturl = :shorturl " ;
$stmt =$conn->prepare($sql);
$stmt->execute(['shorturl'=>$shortUrl]);
 if($stmt->rowCount()>0){
    
    while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
         header("location: ".$row['longurl']);
     }
 }
$conn = NULL;

