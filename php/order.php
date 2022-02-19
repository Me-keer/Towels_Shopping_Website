<?php
 include('db.php');
 session_start();
 $no = count($_SESSION['cart']);
 $list='';
 $name = $_SESSION['user']['username'];
 for ($i=0 ;$i<$no;$i++){
     $pd = $_SESSION['cart'][$i]['pdname'];
     $list= $pd.",".$list;
      
 }
 $sql = "INSERT INTO purchase(items,customer) VALUES('$list','$name')";
 $qry = mysqli_query($conn,$sql);
 if(!$qry){
     echo"INSERT failed";
 }
 session_destroy();

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
        #order{
            background:rgba(255, 106, 171, 0.5);
            height:320px;
            margin:20px;
            text-align:center;
            padding:30px;
            font-weight:bold;
        }
        h2{
            font-size:30px;
        }
        p{
            color:black;
            font-size:20px;
            
        }
        a{
            text-decoration:underline;
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
  <div id = "order">
     <h2> Order Successful! </h2>
     <br>
     <P> Items will be delivered within 4-7 days from the date of purchase.</p>
     <br>
     <a href = '../html/loginh.php'>Check your order</a>

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