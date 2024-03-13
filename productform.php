<?php
session_start();
require 'db.php';
if(isset($_POST['productName'])){

  $product_name= $_POST['productName'];
$product_price= $_POST['productPrice'];
$p_discount= $_POST['p_discount'];
$product_description= $_POST['productDescription'];

$product_image_type= $_FILES['productImage']['type'];
$product_image_name = $_FILES['productImage']['name'];
$product_image_size = $_FILES['productImage']['size'];
$product_image_file = $_FILES['productImage']['tmp_name'];
$dateTime=date("Y-m-d H:m:s");
// $gender=$_POST['gender'];

move_uploaded_file($product_image_file, 'images/'.$product_image_name);
$image_path = 'images/'.$product_image_name;
$sql = "INSERT INTO products(p_name,p_price,p_discount,p_description,images,created_at)VALUE('$product_name','$product_price','$p_discount','$product_description','$image_path','$dateTime')";
if($conn ->query($sql)==TRUE){
    echo ' ';
}else{
    echo 'Something Went Wrong !';
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <!-- action property used to where the form submit  method said to how the data submit  -->
      <form action="productform.php" method="POST" enctype="multipart/form-data">
        <div class="row">
        <div class="col-12">
           <div class="  d-flex justify-content-center mt-5">
            <h1>Enter products Details</h1>
           </div>
        </div>
        <!-- col-2 -->
        <div class="col-12">
            <label class="form-label">Product Name</label>
            <input name="productName"  class="form-control" type="text" placeholder="product Name"required>
        </div>
        <!-- col-3 -->
        <div class="col-6 mt-3">
        <label class="form-label">Product price</label>
            <input name="productPrice" class="form-control" type="text" placeholder="product price">
        </div>

        <!-- col-4 -->
        <div class="col-6 mt-3">
        <label class="form-label">Discount Price</label>
            <input name="p_discount" class="form-control" type="text" placeholder="Enter stock">
        </div>

        <!-- col-5 -->
        <div class="col-12 mt-3">
            <label class="form-label">Choose Image</label>
            <input name="productImage"  class="form-control" type="file" accept="image/png,image/jpg" placeholder="product Name"required>
        </div>

        <!-- col-6 -->
        <div class="col-12 mt-3" placeholder="product description">
         <label class="form-label">Product description</label>
            <textarea name="productDescription"  type="text" class="form-control" placeholder="product description">
           </textarea>
        </div>
      
        
        <!-- button1 -->
        <div class="col-12 mt-3">
          <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary mt-3 w-50" >Save Product</button>
        </div>

        <!-- radio button -->

      </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

 