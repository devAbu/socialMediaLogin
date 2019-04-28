<?php

    session_start();
    
    require_once "GoogleAPI/vendor/autoload.php";

    $gClient = new Google_Client();
    $gClient->setClientId("568847034820-9cr6qehutsp1ln2epluk7c45a0v5c25j.apps.googleusercontent.com");
    $gClient->setClientSecret("PAJoTuD_nCRFZKUyB4_IMJhm");
    $gClient->setApplicationName("CPI Login Tutorial");
    $gClient->setRedirectUri("http://localhost/github/socialMediaLogin/googleLogin/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>