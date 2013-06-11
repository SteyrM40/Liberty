<?php

include("includes/configure.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

//$id = $_GET['p'];

function prod($prodID) {

    $product = array();
    $sql = "SELECT
                p.id as product_id, p.name as prod_name,
                p.description as prod_drescription, p.retail,
                p.qty
            FROM product p
            WHERE p.id = $prodID";

    $res = mysql_query($sql);

    $row = mysql_fetch_array($res);

    return ($row);

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
$product = prod($_GET['p']);
?>

        <h2><?php print $product["prod_name"]; ?></h2>
        <img class="span2" src="http://placehold.it/200x200" />
        <h4 class="span3">Price <?php print $product["retail"]; ?></h4>
        <h4 class="span3">Qty <?php print $product["qty"]; ?></h4>
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
            <p><?php print $product["prod_drescription"]; ?></p>
        </div>

        <div id="tabs-2">
            <p>The layout for this section has yet to be determined so there is no information for this area at this time.</p>
        </div>

        <div id="tabs-3">
            <p>The layout for this section has yet to be determined so there is no information for this area at this time.</p>
        </div>
    </div>

</div>

<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");

?>