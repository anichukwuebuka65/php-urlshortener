<?php
$shortUrl= $_GET['link'];

$host= 'ec2-44-199-52-133.compute-1.amazonaws.com';
$port= '5432';
$dbName= 'd72etvqnc2tc7n';
$user= 'nirbyceyngtaev';
$password= '0f4be1ae2ef2a6867f5885ccb4abdf7947ce187175686d7f7968ddd10a168002';

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

