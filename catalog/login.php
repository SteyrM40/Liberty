<?php

include("includes/configure.php");

include(APP_INCLUDES . "/app_top.php");

# Load header.php
include(APP_INCLUDES . "/header.php");

# Load navbar.php
include(APP_INCLUDES . "/navbar.php");

?>

      <!-- page content -->
      <div class="offset3 span6">
        <div class="well">

<?php
    if ($_POST && false == $auth["return"]) {
?>
            <p>Authentication Failed</p>
<?php } ?>

            <form class="form-signin" action="index.php?a=process" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input name="username" type="text" class="input-block-level" placeholder="Username">
                <input name="password" type="password" class="input-block-level" placeholder="Password">
                <button class="btn btn-large btn-primary" type="submit">Sign in</button>
            </form>

        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->

<?php
#Load app-bottom.php
include(APP_INCLUDES . "/app-bottom.php");

# Load footer.php
include(APP_INCLUDES . "/footer.php");

?>