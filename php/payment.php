<?php
include_once('db.php');
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>About -Jai bharath Textiles</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,600;1,800&display=swap" rel="stylesheet">
    <style>
 body{
            margin:0px;
            background:rgb(232, 232, 232);
        }
       
 h2 {
    text-align: center;
    padding-top: 20px;
    color:maroon;
       }

#form {
    background:white;
    color: black;
    border-radius:5px;
    margin-left: 430px;
    display: inline-block;
    height: 450px;
    padding-left: 20px;
    width: 400px;
    padding-top: 10px;
    font-size: 20px;
    border: 1px solid #ccc;
    font-weight:bold;
    margin-bottom:20px;
}

input {
    border-radius: 3px;
    font-size: 15px;
    height: 30px;
    border: 1px solid #ccc;
    padding:20px;
}
input[type='submit']{
    margin-left:120px;
    cursor:pointer;
}
    </style>
        
</head>
<body>
<body>

<div class="contain">
    <header>
        <div class="nav">
            <img src="../images/logo4.jpg" alt="logo">
        </div>
    </header>
</div>
     <?php  
		if(isset($_POST['b1'])){
            if(!empty($_POST['usno'])&&!empty($_POST['hold'])&&!empty($_POST['exp'])&&!empty($_POST['pass'])){

            echo"<script>alert('Transaction being processed');</script>";
            echo"<script>alert('Payment Successful!');</script>";
            echo"<script>alert('Ordered Successfully!');</script>";
            
        echo"<script>location.href='order.php'</script>";
    }
    else{
        echo"<script>alert('Enter valid input');</script>";
    }
}
		?>
     <h2>Payment Details</h2>
     <br>
	 <div id="form">
	 <form method="post" action="#">
     <input type='radio' value='Debit' name='pay'><label>Debit Card</label>
     <input type='radio' value='Debit' name='pay'><label>Credit Card</label><br><br>
		<label>Enter Card No.:</label>
	    <input type="text"  name="usno" >
        <br>
		<br>
		<label>Card Holder:</label>
        <input type="text" name="hold">
		<br>
		<br>
        <label>Expires On:</label>
        <input type="text" name="exp" placeholder='   MM/YY  '><br>
        <br>
        <label>Enter cvv:</label>
        <input type="password" name="pass" maxlength='3'>
		<br>
        <br>
		<input type="submit" value="Submit" name="b1" class="btn">
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
