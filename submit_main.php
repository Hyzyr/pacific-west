<?php

$comments = $_POST['comments'];
$name = $_POST['name'];
$telephone = $_POST['phone'];



$headers  = "From: sales@babylonunited.net\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";



$msg = "<p>Congratulations, you've received a new message!</p><br><h2>Messgae Details Here</h2> <p>Name: $name </p>\n <p>Comments: $comments </p>\n  <p>Telephone: $telephone </p>\n <p>Source: Home page</p> \n \n <p style='margin-top:150px'><img style='width: 200px; height:auto;' src='https://babylonunited.net/new-lead/images/logo_email.png' alt='babylon united'><p>"; 
if($name != "" &&  $telephone != ""){
$mail = mail("sales@babylonunited.net,obsidian@babylonunited.net,ravit@babylonunited.net,info@pacificwestbuilders.net","New Message from Pacific West Builders Home Page!",$msg,$headers);


if($mail){
      echo "<script>location.href='https://pacificwestbuilders.net/#success';</script>";
}else{
    echo "<script>location.href='Location: https://pacificwestbuilders.net/#failure';</script>";
}
}
?>