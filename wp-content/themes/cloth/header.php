<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cloth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="main">
    <!-- HEADER START -->
    <header class="navbar navbar-custom" id="header">
        <div class="header-top bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="top-link top-link-left">
                            <ul class="social-icon">
                                <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                                <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                                <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                                <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                                <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="top-link right-side">
                            <ul>
                                <li class="Compare-icon">
                                    <a href="#" title="Compare">
                                        <i class="fa fa-sign-in"></i>
                                        <span class="hidden-xs hidden-sm hidden-md">Compare</span>
                                    </a>
                                </li>
                                <li class="login-icon">
                                    <a href="login.html" title="Sing In">
                                        <i class="fa fa-user"></i>
                                        <span class="hidden-xs hidden-sm hidden-md">Sign In</span>
                                    </a>
                                </li>
                                <li class="Register-icon">
                                    <a href="register.html" title="Register">
                                        <i class="fa fa-user-plus"></i>
                                        <span class="hidden-xs hidden-sm hidden-md">Register</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="header-inner">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                        <?php the_custom_logo(); ?>
                    <div class="right-side float-none-sm">
                        <div class="right-side float-left-xs header-right-link">

                            <ul>
                                <li class="main-search">
                                    <div class="header_search_toggle desktop-view">
                                        <form>
                                            <div class="search-box">
                                                <input class="input-text" type="text" placeholder="Search Here...">
                                                <button class="search-btn"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <li class="cart-icon"> <a href="#"><span><i class="fa fa-shopping-cart"></i> <small class="cart-notification">0</small> </span> </a>
                                    <div class="cart-dropdown header-link-dropdown">
                                        <ul class="cart-list link-dropdown-list">
                                            <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                <div class="media"> <a class="pull-left"> <img alt=" " src="images/products/item-small-1.jpg"></a>
                                                    <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                                                        <p class="cart-price">$29.99</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                <div class="media"> <a class="pull-left"> <img alt=" " src="images/products/item-small-2.jpg"></a>
                                                    <div class="media-body"> <span><a>Summer Women Nice Cloth</a></span>
                                                        <p class="cart-price">$29.99</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                                        <div class="clearfix"></div>
                                        <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                                    </div>
                                </li>
                                <li class="account-icon"> <a href="#"><span><i class="fa fa-heart-o"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header_search_toggle mobile-view">
                        <form>
                            <div class="search-box">
                                <input class="input-text" type="text" placeholder="Search entire store here...">
                                <button class="search-btn"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container position-r">
                <div class="row m-0">
                    <div class="col-md-3 position-i p-0">
                        <div class="sidebar-menu-dropdown home ptb-20">
                            <a class="btn-sidebar-menu-dropdown"><span></span> Categories</a>
                            <div id="cat" class="cat-dropdown">
                                <div class="sidebar-contant">
                                    <div id="menu" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="level sub-megamenu">
                                                <span class="opener plus"></span>
                                                <a href="shop.html" class="page-scroll">Cloths<i class="fa fa-angle-right right-side"></i></a>
                                                <div class="megamenu mobile-sub-menu">
                                                    <div class="megamenu-inner-top">
                                                        <ul class="sub-menu-level1">
                                                            <li class="level2">
                                                                <a href="shop.html"><span>Kids Fashion</span></a>
                                                                <ul class="sub-menu-level2 ">
                                                                    <li class="level3"><a href="shop.html">Baby Suits</a></li>
                                                                    <li class="level3"><a href="shop.html">Tops</a></li>
                                                                    <li class="level3"><a href="shop.html">Trousers</a></li>
                                                                    <li class="level3"><a href="shop.html">Shorts</a></li>
                                                                    <li class="level3"><a href="shop.html">Jackets</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Women Cloths</a></li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Playsuits & Jumpsuits</a></li>
                                            <li class="level sub-megamenu">
                                                <span class="opener plus"></span>
                                                <a href="shop.html" class="page-scroll">Fashion<i class="fa fa-angle-right right-side"></i></a>
                                                <div class="megamenu mobile-sub-menu">
                                                    <div class="megamenu-inner-top">
                                                        <ul class="sub-menu-level1">
                                                            <li class="level2">
                                                                <a href="shop.html"><span>Women Clothings</span></a>
                                                                <ul class="sub-menu-level2">
                                                                    <li class="level3"><a href="shop.html">Dresses</a></li>
                                                                    <li class="level3"><a href="shop.html">Skirts</a></li>
                                                                    <li class="level3"><a href="shop.html">Tops</a></li>
                                                                    <li class="level3"><a href="shop.html">Sleepwear</a></li>
                                                                    <li class="level3"><a href="shop.html">Trousers</a></li>
                                                                    <li class="level3"><a href="shop.html">Shorts</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2">
                                                                <a href="shop.html"><span>Girls Fashion</span></a>
                                                                <ul class="sub-menu-level2 ">
                                                                    <li class="level3"><a href="shop.html">Dresses</a></li>
                                                                    <li class="level3"><a href="shop.html">Skirts</a></li>
                                                                    <li class="level3"><a href="shop.html">Tops</a></li>
                                                                    <li class="level3"><a href="shop.html">Sleepwear</a></li>
                                                                    <li class="level3"><a href="shop.html">Trousers</a></li>
                                                                    <li class="level3"><a href="shop.html">Shorts</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 hidden-xs hidden-sm">
                                                                <a href="shop.html">
                                                                    <img src="images/banner/menu-banner.jpg" alt="Xpent ">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Swimwear</a></li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Jackets</a></li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Playsuits & Jumpsuits</a></li>
                                            <li class="level sub-megamenu">
                                                <span class="opener plus"></span>
                                                <a class="page-scroll">Pages<i class="fa fa-angle-right right-side"></i></a>
                                                <div class="megamenu mobile-sub-menu">
                                                    <div class="megamenu-inner-top">
                                                        <ul class="sub-menu-level1">
                                                            <li class="level2">
                                                                <ul class="sub-menu-level2 ">
                                                                    <li class="level3"><a href="about.html">About</a></li>
                                                                    <li class="level3"><a href="account.html">Account</a></li>
                                                                    <li class="level3"><a href="checkout.html">Checkout</a></li>
                                                                    <li class="level3"><a href="contact.html">Contact</a></li>
                                                                    <li class="level3"><a href="404.html">404 Error</a></li>
                                                                    <li class="level3"><a href="blog.html">Blog</a></li>
                                                                    <li class="level3"><a href="single-blog.html">Single Blog</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Ladis Coats</a></li>
                                            <li class="level"><a href="shop.html" class="page-scroll">Tracksuits</a></li>
                                            <li class="level"><a href="shop.html" class="page-scroll">All Categories >></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 p-0">
                        <div class="nav_sec position-r">
                            <div class="mobilemenu-title mobilemenu">
                                <span>Menu</span>
                                <i class="fa fa-bars pull-right"></i>
                            </div>
                            <div class="mobilemenu-content">
                                <ul class="nav navbar-nav" id="menu-main">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Shop</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li class="level">
                                        <span class="opener plus"></span>
                                        <a class="page-scroll">Pages</a>
                                        <div class="megamenu mobile-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <ul class="sub-menu-level1">
                                                    <li class="level2">
                                                        <ul class="sub-menu-level2 ">
                                                            <li class="level3"><a href="account.html">Account</a></li>
                                                            <li class="level3"><a href="checkout.html">Checkout</a></li>
                                                            <li class="level3"><a href="404.html">404 Error</a></li>
                                                            <li class="level3"><a href="single-blog.html">Single Blog</a></li>
                                                            <li class="level3"><a href="product-page.html">Product Details</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
