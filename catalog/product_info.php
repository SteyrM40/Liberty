<?php

include("includes/configure.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

?>

<div class="container">

    <div class="span3">

    <?php
    include(APP_INCLUDES . "/cat-sidebar.php");

    include(APP_INCLUDES . "/man-sidebar.php");
    ?>

    </div>

    <div class="span6 well">
        <!-- this is where the general discription and image of each product will appear-->

        <h3>test text</h3><!--php code for product title-->
        <img class="span2" src="http://placehold.it/200x200" /><!--src to be replaced with php to import image-->
        <p class="span3">testing text</p><!--Text to be imported by php-->
        <p class="span3">testing text</p><!--Text to be imported by php-->
        <div class="span3">
            <a class="btn btn-primary pull-right">Buy Now</a>
            <a class="btn btn-primary pull-right">Add to Cart</a>
        </div>
    </div>

    <div id="tabs" class="span6">
        <ul>
            <li><a href="#tabs-1">Description</a></li>
            <li><a href="#tabs-2">Specifications</a></li>
            <li><a href="#tabs-3">Spectrum</a></li>
        </ul>

        <div id="tabs-1">
            <p>Test Text for tab 1</p>
        </div>

        <div id="tabs-2">
            <p>Test Text and tab 2</p>
        </div>

        <div id="tabs-3">
            <p>Test Text and of course tab 3</p>
        </div>
    </div>

    <div class="span3">

        <!--Here will be the right sidebar that will contain the Cart and possibly more later-->

    </div>

</div>

<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");

?>