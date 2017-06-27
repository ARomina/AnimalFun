<?php
//Include GP config file && User class
include_once 'google/gpConfig.php';
include_once 'google/User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	
	//Render facebook profile data
    if(!empty($userData)){
        $output = $userData['first_name'];    
        $output2 = $userData['last_name'];     
        $output3 = $userData['email'];
        $Cerrar = '<p><h4>&nbsp;&nbsp;<a href="../google/logout.php"><button type="button" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></h4></p></button>';
		
    }else{
        $output = '<h3 style="color:red">Usuario no encontrado</h3>';
    }
} else {
//Include GP config file
include_once 'google/gpConfig.php';
//Redirect to homepage
header("Location:login.php");
}
?>