<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Jai bharath Textiles-login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,600;1,800&display=swap" rel="stylesheet">
    <style>
        .login-form {
            background-color: white;
            width: 300px;
            height: 400px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .col-2 img {
            padding-left: 20px;
            margin: auto;
            align: left;
        }
        
        .account-login {
            padding: 50px;
            background: rgb(232, 232, 232);
        }
        
        .login-form span {
            font-weight: bold;
            padding: 0 10px;
            color: #555;
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }
        
        .form-btn {
            display: inline-block;
        }
        
        .login-form form {
            max-width: 300px;
            padding: 0 20px;
            position: absolute;
            top: 130px;
            transition: transform 1s;
        }
        
        form input {
            width: 100%;
            height: 30px;
            margin: 10px 0;
            padding: 0 10px;
            border: 1px solid #ccc;
        }
        
        input[type="checkbox"] {
            width: 20px;
            height: 20px;
        }
        
        form .btn {
            width: 100%;
            border: none;
            cursor: pointer;
            margin: 10px 0;
        }
        
        form .btn:focus {
            outline: none;
        }
        
        #login {
            left: -300px;
        }
        
        #reg {
            left: 0;
        }
        
        form a {
            font-size: 12px;
        }
        
        #indicator {
            width: 100px;
            border: none;
            background: #ff523b;
            height: 3px;
            margin-top: 8px;
            transform: translateX(100px);
            transition: transform 1s;
        }
    </style>
</head>

<body>
    <div class="header">
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
                    
                    <img src="..\images\menu.png" alt="menu icon" class="menu" onclick="menuToggle()">
                </div>
            </header>
        </div>
    </div>
    <div class="account-login">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="..\images\login.jpg" alt="towelS">
                </div>
                <div class="col-2">
                    <div class="login-form">
                        <div class="form-btn">
                            <span onclick="ln()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>
                        <form name="myform" id="login" method="post" onsubmit="return validatelform()" action="..\php\login.php">
                            <input type="email" placeholder="Email" name="email" id="uname">
                            <input type="password" placeholder="Password" name="password" maxlength="8" id="pass"><br>
                            <input type="checkbox" id="remember" value="1" name="remember">
                            <label for="remember">Remember Me</label>
                            <input type="submit" class="btn" value="Login">
                            <a href="../php/change.php"><b>Change Password?</b></a>
                        </form>
                        <form id="reg" method="post" onsubmit="return validaterform()" action="..\php\register.php">
                            <input type="text" placeholder="Username" name="username" id="username">
                            <input type="email" placeholder="Email" name="email" id="email">
                            <input type="password" placeholder="Password" name="password" id="password" maxlength="8">
                            <input type="submit" class="btn" value="Register">
                        </form>
                    </div>
                </div>
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
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script>
            var login = document.getElementById("login");
            var reg = document.getElementById("reg");
            var indicator = document.getElementById("indicator");

            function register() {
                reg.style.transform = "translateX(0px)";
                login.style.transform = "translateX(0px)";
                indicator.style.transform = "translateX(100px)";

            }

            function ln() {
                reg.style.transform = "translateX(300px)";
                login.style.transform = "translateX(300px)";
                indicator.style.transform = "translateX(0px)";
            }
        </script>
        <script>
            function validatelform() {
                var name = document.getElementById("uname").value;
                if (name == "") {
                    alert("Enter valid email-id!")
                    return false;
                }
                var pwd = document.getElementById("pass").value;
                if (pwd == "") {
                    alert("Enter your password!")

                    return false;
                }
                return true;
            }

            function validaterform() {
                var name = document.getElementById("username").value;
                if (name == "") {
                    alert("Enter valid username!")

                    return false;
                } else if (ap < 1 || (dp - ap) < 2) {
                    alert("Enter valid email!")

                    return false;
                }
                var pwd = document.getElementById("password").value;
                if (pwd == "") {
                    alert("Enter your password!")

                    return false;
                }
                return true;
            }
        </script>



</body>

</html>