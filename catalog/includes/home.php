<?php

include("includes/configure.php");

include(APP_INCLUDES . "/app_top.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

?>

    <div class="container well">
        <div class="row-fluid">
            <div id="slider" class="carousel slide span10 offset1">

                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1" class=""></li>
                    <li data-target="#slider" data-slide-to="2" class=""></li>
                    <li data-target="#slider" data-slide-to="3" class=""></li>
                    <li data-target="#slider" data-slide-to="4" class=""></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/970x300.jpg" alt="Westinghouse" />
                    </div>
                    <div class="item">
                        <img src="images/970x300.jpg" alt="Satco" />
                    </div>
                    <div class="item">
                        <img src="images/970x300.jpg" alt="Philips" />
                    </div>
                    <div class="item">
                        <img src="images/970x300.jpg" alt="GE" />
                    </div>
                    <div class="item">
                        <img src="images/970x300.jpg" alt="Lithonia" />
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--This container below needs modifications to suit the needs of the store site...current information contained
was for temopary testing purposes-->

    <div class="container">
        <div class="row-fluid">
            <div class="row-fluid">
                <div class="span4 well">
                    <h4>Browse Products</h4>
                    <p>View a complete list of products.</p>
                    <center>
                    <a href="products_list.php?a=list" class="btn btn-primary">Products</a>
                    </center>
                </div>
                <div class="span4 well">
                    <h4>Manufacturers</h4>
                    <p>Page not built</p>
                    <center>
                    <a href="man_list.php" class="btn btn-primary">Manufacturers</a>
                    </center>
                </div>
                <div class="span4 well">
                    <h4>About Us</h4>
                    <p>Page not built</p>
                    <center>
                    <a href="page_construct.php" class="btn btn-primary">About Us</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
<!--End of testing container that needs to be modified-->

<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");

?>