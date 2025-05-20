<?php

/**
 * Google OAuth 2.0 Callback Script
 * This script handles the OAuth 2.0 callback from Google after the user has authenticated.
 * It retrieves the access token and user information, and stores it in the session.
 */

require_once 'vendor/autoload.php';
require_once 'config.php';

session_start();

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);

if (isset($_GET['code'])) {

    // get the token and access to all API functions
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // for example, you can get the user info with Google_Service_Oauth2
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    // Get user information
    $email = $google_account_info->email;
    $name = $google_account_info->name;

    // Save user information in session
    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $name;

    // Redirect to the dashboard (a page in your app that is only accessible to logged-in users)
    header('Location: dashboard.php');

    // or you can get the Google ID and other information with verifyIdToken
    // $payload = $client->verifyIdToken($id_token);
    // $googleId = $payload['sub'];
    // $email = $payload['email'];

    // ...and other information
    //   $picture = $payload['picture'];
    //   $surname = $payload['family_name'];
    //   $name = $payload['given_name'];
}
