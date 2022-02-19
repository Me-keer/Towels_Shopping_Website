<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale = 1.0">
    <link rel="stylesheet" href="..\css\style1.css">
    <title>My Cart-Jai bharath Textiles</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,600;1,800&display=swap" rel="stylesheet">
    <style>
        .cart >table {
            margin-left:80px;
            font-weight:bold;
            width:85%;
        }
        .total>table {
        border-top: 3px solid black;
        width: 100%;
        margin-top: 20px;
        margin-right:120px;
        max-width: 400px;
        font-weight:bold;
        font-size:20px;
        }
        .total>table>tr{
            padding:20px;
        }
        #del{
            border-radius:10px;
            border:none;
            background:white;
            font-weight:bold;
            height:30px;
            width:70px;
           margin:10px 0 10px 0;
           cursor: pointer;
           font-style:italic;
        }
        #del:hover{
            background:yellow;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="contain">
            <div class="nav">
                <img src="..\images\logo4.jpg" alt="logo" id="logo">
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
        </div>
    </div>
    <div class="cart">
        <table>
            <tr>
                <th class='t1'>Product</th>
                <th class='t1'>Price</th>
                <th class="t2">QTY</th>
                <th class='t2'>Subtotal</th>
            </tr>
            <?php
              $tax=0;
              if(isset($_SESSION['cart'])){
                  foreach($_SESSION['cart']  as $key => $value){
                      echo"<tr>
                      <td class='t1'>
                          <div class='cinfo'>
                              <p>$value[pdname]</p>
                              <img src='$value[img]'>
                              <form method='post' action='../php/acart.php'>
                              <input type='submit' value='Remove' name='del' id='del'>
                              <input type='hidden' class='id' name='id' value=$value[id]>
                              <input type='hidden' class='price'  value=$value[price]>
                              </form>
                          </div>
                      </td>
                      <td class='t1'>Rs.$value[price]</td>
                      <td class='t2'><input type='number' class='quantity' value=$value[Quantity] min='1' onchange='subTotal()'></td>  
                      <td class='t2 stotal'>0</td>      
                  </tr>";
                  }
              }
            ?>
            </table>
            <div class="total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td id='total'>0</td>
                </tr>
                <tr>
                    <td>Tax - 5%</td>
                    <td id='tax'>0</td>
                </tr>
                <tr>
                    <td>G-Total</td>
                    <td id='gt'>0</td>
                </tr> 
                <tr> 
                <td>
                    <form action='../php/pay.php'>
                    <input type='submit' class='btn' value="Proceed to Pay" name='pay'>
                    </form> 
                </td>
                 </tr> 
            </table>
            <br>
            
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
        <script>
             var price = document.getElementsByClassName('price');
             var quantity = document.getElementsByClassName('quantity');
             var st = document.getElementsByClassName('stotal');
             var gt=0;
             var total = document.getElementById('total');
             var tax = document.getElementById('tax');
             var tax1=0;
             var tax2;
             var gt2=0;
             var gtotal = document.getElementById('gt');
             function subTotal(){
                 gt=0;
                 tax1=0;

                 for(i=0;i<price.length;i++){
                     st[i].innerText = 'Rs'+(price[i].value )*(quantity[i].value);
                     gt+=(price[i].value )*(quantity[i].value);
                     
                 }
                 total.innerText= 'Rs.'+gt.toFixed(2);
                 tax1=0.05*gt;
                 tax2 = tax1.toFixed(2);
                 tax.innerText = 'Rs.'+ tax2;
                 gt2 = parseFloat(gt)+parseFloat(tax2);
                 gtotal.innerText = 'Rs.'+gt2.toFixed(2);
             }
        </script>
</body>

</html>