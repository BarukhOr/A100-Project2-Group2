<?php

 $host = "localhost";
 $user = "jrmh05_a100";
 $db   = "jrmh05_a100";
 $pass = "database";

 $odb = new PDO("mysql:host=" . $host . ";dbname=" . $db,$user,$pass);
 
 $odb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "test";
 
 if(isset($_POST['FirstName'])){
 
 	$individualName = $_POST['FirstName'];
 	$individualLocation = $_POST['Location'];
 	$individualEmail = $_POST['Email'];
 	$individualPhone = $_POST['Phone'];
 	$individualLinkedIn = $_POST['LinkedIn'];
 	$individualFacebook = $_POST['Facebook'];
 	$individualTwitter = $_POST['Twitter'];
 	$individualGithub = $_POST['Github'];
 	$individualWebsite = $_POST['PersonalWebsite'];
 	$individualBio = $_POST['Bio'];
 	$individualFunFacts = $_POST['FunFacts'];
 	$individualSkills = $_POST['Skills'];
 	$individualExperience = $_POST['Experience'];
 	$individualOther = $_POST['Other'];
 	$individualStatus = $_POST['Status'];
 	
 	echo "2nd test";
 	
 	$q = "INSERT INTO Individual_Signup
(dIndividualName,dIndividualLocation,dIndividualEmail,dIndividualPhone,dIndividualLinkedIn,dIndividualFacebook,dIndividualTwitter,dIndividualGithub, dIndividualWebsite,dIndividualBio,dIndividualFunFacts,dIndividualSkills,dIndividualExperience,dIndividualOther,dIndividualStatus)
 	VALUES
 	(:aIndividualName,:aIndividualLocation,:aIndividualEmail,:aIndividualPhone,:aIndividualLinkedIn,:aIndividualFacebook,:aIndividualTwitter,:aIndividualGithub,:aIndividualWebsite,
 	:aIndividualBio,:aIndividualFunFacts,:aIndividualSkills,:aIndividualExperience,:aIndividualOther,:aIndividualStatus);";
 	
 	$query = $odb->prepare($q);
	
 	echo "final test";
	
 	$results = $query->execute(array(
 		":aIndividualName" => $individualName,
 		":aIndividualLocation" => $individualLocation,
 		":aIndividualEmail" => $individualEmail,
 		":aIndividualPhone" => $individualPhone,
 		":aIndividualLinkedIn" => $individualLinkedIn,
 		":aIndividualFacebook"=> $individualFacebook,
 		":aIndividualTwitter" => $individualTwitter,
 		":aIndividualGithub" => $individualGithub,
 		":aIndividualWebsite" => $individualWebsite,
 		":aIndividualBio" => $individualBio,
 		":aIndividualFunFacts" => $individualFunFacts,
 		":aIndividualSkills" => $individualSkills,
 		":aIndividualExperience" => $individualExperience,
 		":aIndividualOther" => $individualOther,
 		":aIndividualStatus"=> $individualStatus
	)); 
 		
 		
 }

?>
<html>
        <head></head>
        <body><h1>Thank You for your submission!</h1><br>Your information has been submitted successfully.<br>To view your profile, please click <a href=individualprofile.php>here</a><br>Otherwise, click <a href="index.html">home</a> to return to the main page.</body>
</html>
