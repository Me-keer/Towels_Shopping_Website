<?php
session_start();
include('db.php');
if(isset($_POST['del'])){
    $remove = $_POST['id'];
    foreach($_SESSION['cart'] as $key => $value)
    {
     if($value['id']==$remove){
         unset($_SESSION['cart'][$key]);
         echo"<script>alert('Item removed');</script>";
         echo"<script>location.href='../html/cart.php'</script>";
     }
    }
}
 if(isset($_GET['add'])){
     $id = $_GET['id'];
     $sql = "SELECT * FROM products WHERE id='$id' ";
     $qry = mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($qry)){
        if(isset($_SESSION['cart'])){
            $check_arr= array_column($_SESSION['cart'],'id');
            if(in_array($id,$check_arr)){
                echo"<script>alert('Product already in cart');</script>";
                echo"<script>location.href='../html/pd$id.php'</script>";
            }
            else{
                $count=count($_SESSION['cart']);
                $item = array("id"=>$row['id'],"pdname"=>$row['pd_name'],"price"=>$row['price'],"Quantity"=>0,"img"=>$row['img']);
                $_SESSION['cart'][$count]=$item;  
                echo"<script>alert('Item Added');</script>";
                 echo"<script>location.href='../html/pd$id.php'</script>";

            }

     }
     else{
         $item = array("id"=>$row['id'],"pdname"=>$row['pd_name'],"price"=>$row['price'],"Quantity"=>0,"img"=>$row['img']);
         $_SESSION['cart'][0]=$item;
         echo"<script>alert('Item Added');</script>";
         echo"<script>location.href='../html/pd$id.php'</script>";

     }
    }
 }
?>