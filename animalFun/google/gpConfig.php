<?php


//Include Google client library 
include_once 'Google_Client.php';
include_once 'contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '513456824967-3lrcspghjp3p4dhf8ieko3bc45d1tgqp.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'hHXxhalS-3xjzDmz5B-9KoiS'; //Google client secret
$redirectURL = 'http://animalFun.fun/animalFun/google/login.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>