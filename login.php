<?php

/**
 * Draw google login button with Auth URL
 */

 require_once 'vendor/autoload.php';
require_once 'config.php';

session_start();

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);
$client->addScope("email");
$client->addScope("profile");

$auth_url = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login with Google</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <button class="google-login-button" onclick="window.location = '<?= $auth_url ?>'; return false;">
        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo" />
        Sign in with Google
    </button>
</body>

</html>