<?php

/**
 * 1.- Go to https://console.developers.google.com/apis/credentials (in your project)
 * 2.- Configure the OAuth consent screen and choose scopes
 * 3.- Create OAuth client 
 * 4.- Choose Web application
 * 5.- Add authorized redirect URIs
 * 6.- Copy the client ID and client secret
 * 7.- Add the client ID and client secret to your config.php file
 * 8.- Add the redirect URI to your config.php file
 * 9.- Add the authorized redirect URI to your Google API console
 * 10.- Go here and put client ID, client secret and redirect URI
 * 
 * @author: Tizedit 2025
 * 
 */
define('GOOGLE_CLIENT_ID', 'YOURCLIENTID');
define('GOOGLE_CLIENT_SECRET', 'YOURSECRET');
define('GOOGLE_REDIRECT_URI', 'http://your/path/to/callback.php');

