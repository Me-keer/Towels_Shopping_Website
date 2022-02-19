<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hand Towel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="..\css\style1.css">
    <style>
        input[type='submit'] {
            width: 120px;
        }
        
        ul>li>span>a {
            border: 2px solid rgba(255, 95, 136, 0.5);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="contain">
            <header>
                <div class="nav">
                    <img src="..\images\logo4.jpg" alt="logo">
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="../index.html">HOME</a></li>
                            <li><a href="products1.php">PRODUCTS</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            <li><a href="loginh.php">MY ACCOUNT</a></li>
                            <li><span><a href="cart.php"> CART
                                <?php
							  session_start();
							  if(isset($_SESSION['cart'])){
							  $no=count($_SESSION['cart']);
							  echo"($no)";
							  }
							  else{
								  echo"(0)";
							  }
							 ?>
                            </a></span></li>
                        </ul>
                    </nav>
                    
                    <img src="..\images\menu.png" alt="menu icon" class="menu" onclick="menuToggle()">
                </div>
            </header>
        </div>
    </div>

    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="..\images2\f12.jpg">
                        <img src="..\images2\f12a.jpg">
                        <img src="..\images2\f12b.jpg">

                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="../images2/f12.jpg" alt="towel image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="../images2/f12a.jpg" alt="towel image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="../images2/f12b.jpg" alt="towel image">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title">Mark Home 100% Cotton 500 GSM Zero Twist Anti Microbial Treated Simply Soft Hand Towel Maroon</h2>
                <div class="product-price">
                    <h4 class="price">M.R.P&nbsp;&nbsp;<b>&#8377;</b>&nbsp;519</h4>
                    </br>
                </div>

                <div class="product-detail">
                    <ul>
                        <li>Color: <span>Maroon</span></li>
                        <li>Category: <span>Hand Towel</span></li>
                        <li>Set Content:<span>2 Hand towel</span></li>
                        <li>Shipping Fee: <span>Free</span></li>
                    </ul>
                </div>
                <div class="purchase-info">
                    <form method='get' action='../php/acart.php'>
                    <label>QTY: </label>
                        <input type="number" min="0" value="1">
                        <input type='submit' name='add' value='Add to cart' class='btna'>
                        <input type='hidden' value='12' name='id'>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    <hr>
    </br>
    <div class="small-container">
        <div class="row-row-2">
            <h2>Related Products</h2>
        </div>
    </div>
    </br>
    </br>
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <a href="pd9.php">
                    <img src="..\images\f9.jpg" alt="white towel">
                    <h4>Red Cotton 450 GSM Bath Towel</h4>
                </a>
                <p class="price"><b>&#8377;</b>799</p>
            </div>
            <div class="col-4">
                <a href="pd10.php">
                    <img src="..\images2\f10.jpg" alt="kids towel">
                    <h4>Peach Cotton Casper Solid 550 GSM Large Bath Towel</h4>
                </a>
                <p class="price"><b>&#8377;</b>1,299</p>
            </div>
            <div class="col-4">
                <a href="pd11.php">
                    <img src="..\images\f11.jpg" alt="ladies towel">
                    <h4>Coral Textured Stripe Cotton 550 GSM Bath Towel</h4>
                </a>
                <p class="price"><b>&#8377;</b>749</p>
            </div>
            <div class="col-4">
                <a href="pd12.php">
                    <img src="..\images\f12.jpg" alt="face towel">
                    <h4>Mark Home 100% Cotton 500 GSM Zero Twist Anti Microbial Treated Simply Soft Hand Towel Maroon</h4>
                </a>
                <p class="price"><b>&#8377;</b>519</p>
            </div>
        </div>
    </div>
    <div footer>
        <div class="container2">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="alogo">
                        <img src="..\images\app.png" alt="apple store">
                        <img src="..\images\goog.png" alt="google play store">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="..\images\logo4.jpg">
                    <p>Our products are crafted with high-quality material. Great attention to detail is given to trims and execution. Soft and luxurious or textured and earthy, we bring an entire range for you to choose from. Lovely homes are made with
                        your unique touch and maspar. Whatever be your style, Maspar is here to bring alive your Home Decor.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return policy</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twittwer</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="copy">
                <p>JaiBharath &#169; 2021</p>
            </div>
        </div>
        </footer>
        <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";

            function menuToggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script src="../js/script.js"></script>
</body>

</html>