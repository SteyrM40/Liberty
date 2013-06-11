<?php

//list all products unsorted on this page

include("includes/configure.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

switch ( $_GET["a"] ) {

    case "list":
        $product = list_products();
        break;

    case "addCart":
        #Add item to cart
        add_item_to_cart( $_GET["prodId"] );

        $product = list_products();

        break;

    default:
        $product = list_products();
        break;
}

function list_products() {

    $product = array();
    $sql = "SELECT
                p.id as product_id,
                c.name as cat_name, p.name as prod_name,
                p.description as prod_drescription, p.retail,
                p.qty
            FROM category c, product p
            WHERE c.id = p.category_id"; //something is wrong here ... its not listing product where product id = 1

    $res = mysql_query($sql);

    $row = mysql_fetch_array($res);

    while ($row = mysql_fetch_array($res)) {
        $product[] = $row;
    }

    return ($product);

}

function add_item_to_cart( $prodId = null ) {

    # Check for valid product id
    if ( null != $prodId && is_numeric( $prodId ) ) {

        // Probably should sql check database to see
        // if product exisits.

        if( $_SESSION["cart"][$prodId] ) {
            $_SESSION["cart"][$prodId]++;
        }
        else {
            $_SESSION["cart"][$prodId] = 1;
        }
    }
}

?>

<div class="container">

    <div class="span2 well">

    <?php
    include(APP_INCLUDES . "/cat-sidebar.php");

    include(APP_INCLUDES . "/man-sidebar.php");
    ?>

    </div>

      <!-- page content -->
      <div class="span9">
        <div class="well pageContent">
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>QTY</th>
                </thead>
                <tbody>
<?php

    foreach ($product as $key => $item) { ?>

                    <tr>
                        <td>
                            <a class="btn" href="products_list.php?a=addCart&prodId=<?php print $item['product_id']; ?>">
                                <i class="icon-plus"></i>
                            </a>
                        </td>
                        <td><a href="product_info.php?p=<?php print $item['product_id']; ?>"><?php print $item["prod_name"]; ?></a></td>
                        <td><?php print $item["prod_description"]; ?></td>
                        <td><?php print $item["retail"]; ?></td>
                        <td><?php print $item["qty"]; ?></td>
                    </tr>

<?php } ?>
                </tbody>
            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->

</div>
<p>This is left here just to show that the add buttons are working</p>
    <div id="debug">
      <pre>
        <?php print_r($_SESSION); ?>
      </pre>
    </div>


<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");
?>