<?php

include("includes/configure.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

    if (!empty($_GET['p'])) $id = $_GET['p'];

function prod() {

    $product = array();
    $sql = "SELECT * FROM product p WHERE p.id = '$id'";
    $res = mysql_query($sql);

    $row = mysql_fetch_array($res);

    while ($row = mysql_fetch_array($res)) {
        $product[] = $row;
    }

    return ($product);
}

?>

<div class="container">

    <div class="span3">

    <?php
    include(APP_INCLUDES . "/cat-sidebar.php");

    include(APP_INCLUDES . "/man-sidebar.php");
    ?>

    </div>

    <div class="span6 well">

<?php

    foreach ($product as $key => $item) { ?>

        <h2><?php print $item["name"]; ?></h2>
        <img class="span2" src="http://placehold.it/200x200" />
        <h4 class="span3">Price <?php print $item["retail"]; ?></h4>
        <h4 class="span3">Qty <?php print $item["qty"]; ?></h4>
        <div class="span3">
            <a class="btn btn-primary pull-right">Add to Cart</a><a class="btn btn-primary pull-right" style="margin-right:10px">Buy Now</a>
        </div>
    </div>

    <div id="tabs" class="span6">
        <ul>
            <li><a href="#tabs-1">Description</a></li>
            <li><a href="#tabs-2">Specifications</a></li>
            <li><a href="#tabs-3">Spectrum</a></li>
        </ul>

        <div id="tabs-1">
            <p><?php print $item["description"]; ?></p>
        </div>

        <div id="tabs-2">
            <p>The layout for this section has yet to be determined so there is no information for this area at this time.</p>
        </div>

        <div id="tabs-3">
            <p>The layout for this section has yet to be determined so there is no information for this area at this time.</p>
        </div>
    </div>

<?php } ?>

    <div class="span3">

        <!--Here will be the right sidebar that will contain the Cart and possibly more later-->

    </div>

</div>

<div style="clear:both">
    <pre>
        <?php

            if(empty($_GET))
                echo "No GET variables";
            else
                print_r($_GET);
                print($id);

        ?>
    </pre>
</div>

<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");

?>