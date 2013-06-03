<?php

 $host = "localhost";
 $user = "jrmh05_a100";
 $db   = "jrmh05_a100";
 $pass = "database";

 $odb = new PDO("mysql:host=" . $host . ";dbname=" . $db,$user,$pass);
 
 $odb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 if(isset($_POST['ContactName'])){
 
 	$contactName = $_POST['ContactName'];
 	$companyName = $_POST['CompanyName'];
 	$companyLocation = $_POST['Location'];
 	$contactEmail = $_POST['ContactEmail'];
 	$contactPhone = $_POST['Phone'];
 	$companyLinkedIn = $_POST['LinkedIn'];
 	$companyFacebook = $_POST['Facebook'];
 	$companyTwitter = $_POST['Twitter'];
 	$companyWebsite = $_POST['Website'];

 	
 	$q = "INSERT INTO Company_Signup
 	(dContactName,dCompanyName,dCompanyLocation,dContactEmail,dContactPhone,dCompanyLinkedIn,dCompanyFacebook,dCompanyTwitter,dCompanyWebsite)
 	VALUES
 	(:aContactName,:aCompanyName,:aCompanyLocation,:aContactEmail,:aContactPhone,:aCompanyLinkedIn,:aCompanyFacebook,:aCompanyTwitter,:aCompanyWebsite);";
 	
 	$query = $odb->prepare($q);
 	
 	$results = $query->execute(array(
 		":aContactName" => $contactName,
 		":aCompanyName" => $companyName,
 		":aCompanyLocation" => $companyLocation,
 		":aContactEmail" => $contactEmail,
 		":aContactPhone" => $contactPhone,
 		":aCompanyLinkedIn"=> $companyLinkedIn,
 		":aCompanyFacebook" => $companyFacebook,
 		":aCompanyTwitter" => $companyTwitter,
 		":aCompanyWebsite" => $companyWebsite
 	)); 
 }

?>
<html>
        <head></head>
        <body><h1>Thank You for your submission!</h1><br>Your information has been submitted successfully.<br>To view your profile, please click <a href=individualprofile.php>here</a><br>Otherwise, click <a href="index.html">home</a> to return to the main page.</body>
</html>
