<?php
session_start();
 if(isset($_SESSION['user'])){
    echo"<script>location.href='#';</script>";
 }
 else{
    echo"<script>location.href='../html/loginh.php';</script>";
 }
 
 ?>
 <!DOCTYPE html>
<html>

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
        #tag{
            text-align:left;
            font-weight:bold;
            color:maroon;
            font-size:25px;
            margin:30px;
        }
        form{
            margin-left:30px;
            padding:10px;
            background:white;
            display:inline-block;
            border-radius:5px;
            margin-bottom:20px;
        }
        label{
            font-weight:bold;
        }
        input{
            width:650px;
            height:30px;
            padding:10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;

        }
        body{
            background:rgb(232, 232, 232);
        }
        #btnp{
        background: rgba(255, 95, 136, 0.5);
        color: black;
        padding: 8px 30px;
        border-radius: 30px;
        width:170px;
        border-style: none;
        cursor:pointer;
       }
       #btnp:hover{
        background: rgba(255, 106, 171, 0.9);
       }
            
        }
            
    </style>
</head>

<body>

    <div class="contain">
        <header>
            <div class="nav">
                <img src="../images/logo4.jpg" alt="logo">
            </div>
        </header>
    </div>
     <br>
     <br>
   <?php
   
    echo "<p id = 'tag'>Enter delivery address</p>"; 


   ?>
    <div>
        <form method='post' action='deliver.php'>
            
             <label>Country/Region</label><br>
             <input type='text' name='region' required autocomplete='on'><br><br>
             <label>Full Name</label><br>
             <input type='text' name='uname' required><br><br>
             <label>Mobile No.</label><br>
             <input type='tel' name='num' maxlength="10" placeholder='10-digit mobile number without prefixes' required><br><br>
             <label>PIN code</label><br>
             <input type='number' name='code' placeholder='6 digits [0-9]' maxlength="6" required><br><br>
             <label>Flat,House no.,Building,Company,Apartment</label><br>
             <input type='text' name='flat' required><br><br>
             <label>Area,Colony,Street</label><br>
             <input type='text' name='area' required><br><br>
             <label>Town/City</label><br>
             <input type='text' name='city' required><br><br>
             <label>State</label><br>
             <input type='text' name='state' required><br><br>    
             <div>
                 <input type='submit' value='Continue'id='btnp' required>
            </div>
        </form>
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
				     <img src="../images/logo4.jpg">
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