<?php

$name = $_POST['name'];
$telephone = $_POST['phone'];
$email = $_POST['email'];



$headers  = "From: sales@babylonunited.net\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";



$msg = "<p>Congratulations, you've received a new lead! Be sure to follow up with them today. It's recommended to add them to the CRM and your phone contacts as well.</p><br><h2>Lead Details Here</h2> <p>Name: $name </p>\n   <p>Telephone: $telephone </p>\n <p>Email: $email </p>\n <p>Source: Landing page </p> \n \n <p style='margin-top:150px'><img style='width: 200px; height:auto;' src='https://babylonunited.net/new-lead/images/logo_email.png' alt='babylon united'><p>"; 
if($name != "" &&  $telephone != "" && $email != ""){
$mail = mail("sales@babylonunited.net,obsidian@babylonunited.net,ravit@babylonunited.net,info@pacificwestbuilders.net","New Lead from Pacific West Landing Page!",$msg,$headers);



if($mail){
      echo "<script>location.href='https://pacificwestbuilders.net/lp-main/#success';</script>";
}else{
    echo "<script>location.href='Location: https://pacificwestbuilders.net/lp-main/#failure';</script>";
}
}
?>