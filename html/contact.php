<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Contact-Jai bharath Textiles</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,600;1,800&display=swap" rel="stylesheet">
    <style>
        #top {
            padding: 90px;
            color: maroon;
        }
        
        body {
            background: rgb(232, 232, 232);
        }
        
        .price {
            color: red;
            font-weight: bold;
        }
        
        #map {
            color: red;
            font-weight: bold;
        }
        
        h1 {
            text-align: center;
        }
        
        .col1,
        .col3 {
            flex-basis: 33%;
            padding: 60px;
            font-size: 20px;
        }
        
        .col2 {
            padding: 0px;
            padding-top: 0;
            font-size: 20px;
        }
        
        .forms {
            padding: 20px;
            position: relative;
            background: white;
            width: 300px;
            height: 400px;
            margin: auto;
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px 0px gray;
        }
        
        input,
        textarea {
            margin-top: 20px;
            width: 100%;
            height: 30px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        textarea {
            height: 50px;
        }
        
        input[type="submit"] {
            background: rgba(255, 106, 171, 0.8);
            border-radius: 5px;
            border: none;
            width: 100px;
            margin-left:80px;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div class='header'>
        <div class="contain">
            <header>
                <div class="nav">
                    <img src="../images/logo4.jpg" alt="logo">
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="../index.html">HOME</a></li>
                            <li><a href="products1.php">PRODUCTS</a></li>
                            <li><a href="loginh.php">MY ACCOUNT</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            
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
                    <img src="../images/menu.png" alt="menu icon" class="menu" onclick="menuToggle()">
                </div>
            </header>
        </div>
    </div>
    <div class="contain">
        <div class="row">
            <div class="col1">
                <h2>Address:</h2>
                <h3>JaiBharath Textiles</h3>
                <p><b>73/10B ,New Ramnad Road,<br>Madurai-625009<br>TamilNadu.</b></p>
                <a href="https://goo.gl/maps/D8hFzngXb1mZHo8e6" id="map">Get the Directions...</a>
                <br>
                <hr>
                <br>
                <h2>Contact No.:</h2>
                <p><b>Contact Person : T J Ganesh </b>
                    <p>
                        <p><b>Mob No. :+91 9847362112 </b></p>
                        <br>
                        <hr>
                        <h3>Email:</h3>
                        <p><b>Email: info@jb.com</b></p>
            </div>
            <div class="col2">
                <h1>For more updates or queries....</h1>
                <div class="forms">
                    <form name="mform" method="post" action='mailto:keerthikumaresh30@gmail.com' enctype='plain'>
                        <label id="top"><b>Fill Up</b></label>
                        <input type="text" placeholder="Username" id="usname" name="un"><br>
                        <i class="fas fa-check-circle"></i>
                        <input type="email" placeholder="Email" id="email" name="email"><br>

                        <input type="tel" placeholder="Phone Number" id="mob" maxlength="10" name="mn"><br>
                        <br>
                        <label>Comments</label><br>
                        <textarea name='comments'></textarea><br>
                        <input type="submit" value="SUBMIT" class='btn' onclick="return validate()">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----footer---->
    < footer>
        <div class="container2">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="alogo">
                        <img src="../images/app.png" alt="apple store">
                        <img src="../images/goog.png" alt="google play store">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="../images/logo4.jpg" alt='logo'>
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
                    MenuItems.style.maxHeight == "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script>
            function validate() {
                var nm = document.getElementById("usname").value;
                if (nm == "" || isNaN(nm) === false) {
                    alert("Enter valid Username!")
                    return false;
                }
                else{
                var num = document.getElementById("mob").value;
                var no = parseInt(num);
                var nos = /^\d{10}$/;
                if (/^\d+$/.test(no)) {
                    return true;
                } else {
                    alert("Enter valid No.")
                    return false;
                }
                }
                
                alert('Sent Successfully')

            }
        </script>
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

</body>

</html>