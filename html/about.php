<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>About -Jai bharath Textiles</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,600;1,800&display=swap" rel="stylesheet">
    <style>
        .price {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

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
    <div class="contain-abt">
        <div class="row">
            <div class="column-1">
                <h2>Overview</h2>
                <p>
                    Established in 1995, Jai Bharath Textiles Pvt. Ltd. is an Indian manufacturer and supplier of premier high quality towels. Since our inception, in the humble town of Madurai,TamilNadu, we have grown from strength to strength to become a leading supplier
                    of superior quality terry towels and a vast range of embroidered and appliqué work towels, to the biggest retailers across the country.</p>
            </div>
            <div class="column-2">
                <img src="../images/abt.jpg" alt="towel image">
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="column-1">
                <img src="../images/abt2.jpg" alt='abt'>
            </div>
            <div class="column-2">
                <h2>Our Motto</h2>
                <p>Our basic motto is the total customer satisfaction and we lead our-self in the synchronization as per the client's specification. With our wide range of products, we have carved out a niche in the industry with channelized client base.
                    To channelize our business in all directions, our network of sales partners supports us immensely. We serve our client diligently and specifically so as to give them complete satisfaction. We put forward a mix of most exquisite and
                    elegant traditional and modern designing skills to customers with a huge selection of colors, prints, embellished with skin comforting world-class products.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="column-1">
                <h2>Our Mission</h2>
                <p>JB Textiles shall strive to achieve constant improvement across the following key pillars of our business.<br>Product Innovation, Quality Enhancement, Customer Satisfaction, Stakeholder Value, Customer Relationships.<br>We believe that
                    in today’s competitive and liberalized business environment quality is the key to success and survival. At the core of our quality apparels lies the application of streamlined business processes, strategic planning, and hardworking
                    task force. Backed by all these strengths, we are able to satisfy widely varying demands of customers and deliver consignments within the promised time frame.</p>
            </div>
            <div class="column-2">
                <video width="520" height="340" controls>
				 <source src="../videos/vd1.mp4" type="video/mp4">
                 </video>
				 
		   </div>
		</div>
	 </div>
	 <footer>
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
					 <p>Our products are crafted with high-quality material. Great attention to detail is given to trims and execution.
					 Soft and luxurious or textured and earthy, we bring an entire range for you to choose from. Lovely homes are made 
					 with your unique touch and maspar. Whatever be your style, Maspar is here to bring alive your Home Decor.</p>
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
	     var MenuItems= document.getElementById("MenuItems");
		 MenuItems.style.maxHeight = "0px";
		 function menuToggle(){
		     if (MenuItems.style.maxHeight == "0px")
			 {
			    MenuItems.style.maxHeight = "200px";
				}
			else
			{
			MenuItems.style.maxHeight = "0px";
			}
		}
		 
	 </script>
	 <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>