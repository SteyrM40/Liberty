<?php

include("configure.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

#check to see if user is authenticated
if (!$_SESSION["username"] && $_GET["q"] != "auth" && $_GET["a"] !="process") {
    $_GET["q"] = "auth";
    $_GET["a"] = "login";
}

function processAuth($user, $pass) {

    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

    $sql = "SELECT * FROM auth_user WHERE username = '$user'";
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);

    //Check if user exists
    if ($row) {

        //Check if password is valid
        if ($row["password"] == md5($pass) ) {
            $auth["return"] = true;
        }
        else{
            $auth["message"] = "Password is not correct";
        }
    }
    else {
        $auth["message"] = "User does not exist";
    }

    return($auth);
}

switch ( $_GET["a"] ) {

    case "login":

        header("Location: http://localhost" . APP_DOC_ROOT);
/*
        include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/nav.php");
        include(APP_VIEW . "/login.php");
        include(APP_VIEW . "/footer.php");*/
        break;

    case "logout":

        # Delete Session Data
        $_SESSION = 0;
        session_destroy();
        session_start();

        #Redirect to the index.php page
        header("Location: http://localhost" . APP_DOC_ROOT);

       /* include(APP_VIEW . "/header.php");
        include(APP_VIEW . "/nav.php");
        include(APP_VIEW . "/index.php");
        include(APP_VIEW . "/footer.php");*/
        break;

    case "process":

        $auth = processAuth($_POST["username"], $_POST["password"]);

        if (true == $auth["return"]) {
            # Setup Session
            $_SESSION["username"] = $_POST["username"];

            #Redirect to the index.php page
            header("Location: http://localhost" . APP_DOC_ROOT);
        }
        else {
            include(APP_VIEW . "/header.php");
            include(APP_VIEW . "/nav.php");
            include(APP_VIEW . "/index.php");
            include(APP_VIEW . "/footer.php");
        }

        break;
}
