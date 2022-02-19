<?php
$email = $_POST["email"];
$password = $_POST["password"];

//selecting data from database
$sql = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
 
//making connenction
include('db.php');
$qry = mysqli_query($conn,$sql);
$count = mysqli_num_rows($qry);
if($count==1)
{
  if(isset($_POST["remember"])){
    setcookie('email',$email,time()+60*60*7);
  }
  session_start();
  while($row = mysqli_fetch_assoc($qry)){
      $name=$row['username'];
   $item = array("username"=>$row['username'],"id"=>$row['id'],"pass"=>$row['password'],"email"=>$row['email']);
   $_SESSION['user']=$item;
  }
  echo "<script>alert('Login successful!');</script>";
  

}
else{
    echo "<script>alert('Login failed! Please try again');</script>";
    echo "<script>location.href='../html/loginh.php';</script>";
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
        #wel{
          text-align:left;
          margin:20px;
          font-weight:bold;
          color:black;
          font-size:20px;
          

        }
        #tag{
            text-align:center;
            font-weight:bold;
            color:maroon;
            font-size:20px;
        }
        .dis{
         background:rgba(255, 106, 171, 0.5);
         margin:20px;
         padding:20px;
         font-weight:bold;
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
                        <li><a href="../html/products1.php">PRODUCTS</a></li>
                        <li><a href="../html/about.php">ABOUT</a></li>
                        <li><a href="../html/contact.php">CONTACT</a></li>
                        <li><a href="session.php">LOG-Out</a></li>
                        <li><span><a href="../html/cart.php"> CART
                            <?php
                          
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
     <br>
     <?php
    echo"<p id='wel'>Welcome! $name</p>";
    echo "<p id = 'tag'>Your Purchase History </p>";
     ?>
     <br>
     <table>
     <tr>
     <?php
    $sql2 = "SELECT * FROM purchase WHERE customer = '$name'";
    $qry2 = mysqli_query($conn,$sql2);
    if($qry2){
        $arr=array();
    while($row = mysqli_fetch_assoc($qry2)){
     $item = $row['items'];
     $arr = explode(",",$item);  
    }
    
    $len = count($arr);
    for($i=0;$i<$len;$i++){
        $pro =$arr[$i];
    echo"<div class='dis'>
    Item Name: $pro <br>
    </div>";
    }
}
  else {
      echo"<p class='dis'>No Purchase History</p>";
      }
    ?>
    <tr>
    </table>
    <br>
    <br>
    <br>
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