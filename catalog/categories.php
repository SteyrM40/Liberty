<?php

include("includes/configure.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");
?>

<div class="container">

    <div class="span2 well">

    <?php
    include(APP_INCLUDES . "/cat-sidebar.php");

    include(APP_INCLUDES . "/man-sidebar.php");
    ?>

    </div>

    <div class="span6 well">
        now some text for test

        <!--In this area will be the database retrieval of all products unsorted...this is the genral product page
        The products will be listed in a table that is three wide and five deep with javascript to move to additional pages.-->

    </div>

    <div class="span2 well">

        <!--Here will be the right sidebar that will contain the Cart and possibly more later-->

    </div>

</div>

<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");

?>