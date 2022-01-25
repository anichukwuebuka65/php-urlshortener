<?php
$shortUrl= $_GET['link'];
$conn = new mysqli("localhost","root","","url");
if($conn->connect_errno){
    die("failed to connect to database,".$conn->connect_error);
};
$sql = "SELECT longurl FROM urlshortener WHERE shorturl = ? " ;
$stmt = $conn->prepare($sql);
$stmt->bind_param( "s", $shortUrl);
$stmt->execute();
$result= $stmt->get_result();
 if($result->num_rows>0){
    
    while($row = $result->fetch_assoc()){
         header("location: ".$row['longurl']);
     }
 }
$stmt -> free_result();
$conn-> close();

