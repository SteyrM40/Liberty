        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-th-list"></span>
                    </a>
                    <a href="index.php" class="brand">Liberty Lighting of Kentucky</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><a href="index.php">Home</a></li>
                            <li>
                                <div class="btn-group">
                                    <a class="btn" href="products_list.php?a=list">Products</a>
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- dropdown menu links -->
                                        <li><a href="#">Flourescents</a></li>
                                        <li><a href="#">Incandescents</a></li>
                                        <li><a href="#">Ballasts</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group">
                                    <button class="btn">Manufacturers</button>
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- dropdown menu links -->
                                        <li><a href="#">Westinghouse</a></li>
                                        <li><a href="#">Satco</a></li>
                                        <li><a href="#">GE</a></li>
                                        <li><a href="#">Philips</a></li>
                                    </ul>
                                </div>
                            </li>

<?php if (!empty($_SESSION["username"]) ) { ?>

                            <li>
                                <div class="btn-group">
                                    <button class="btn">Welcome

<?php print $_SESSION["username"]; ?>

                                    </button>
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- dropdown menu links -->
                                        <li><a href="login.php?a=logout">Logout</a></li>
                                    </ul>
                                </div>
                            </li>

<?php } else { ?>

                            <li>
                                <div class="btn-group">
                                    <button class="btn">Welcome Guest
                                    </button>
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- dropdown menu links -->
                                        <li><a href="login.php">Login</a></li>
                                    </ul>
                                </div>
                            </li>

<?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

