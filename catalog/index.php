<?php

# Load bootstrap to apply configuration
include("includes/configure.php");



# Route request to desired controller
switch ($_GET["q"]) {

    case "home":
        include(APP_INCLUDES . "/home.php");
        break;

    default:
        include(APP_INCLUDES . "/home.php");
        break;
}
