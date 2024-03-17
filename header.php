<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <?php wp_head();?>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="<?php echo get_template_directory_uri();?>assets/img/logo.png" alt="Atk logo">
                                <img class="logo-img logo-img-active" src="<?php echo get_template_directory_uri();?>assets/img/logo-dark.png" alt="Atk logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Our services</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">About</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.html">Products</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->