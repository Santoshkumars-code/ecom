<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELL-IT</title>
    <link rel="stylesheet" href="include/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-dark shadow main sticky-top">
     <div class="container-fluid">
     <a href="index.php" class="navbar-brand ms-5 mx-auto text-warning">BSF.in</a>

         <form action="" class="mx-auto" method="get">
            <div class="input-group input-group-lg border border-light">
                <input type="search" name="search" size="60" placeholder="Search for products and more..." class="form-control">
                <button type="submit" name="find" class="btn btn-dark"><i class="fa fa-search"></i></button>
            </div>
           
         </form>
        
         
         
         <ul class="navbar-nav me-auto">
        
         
         <?php
            if(isset($_SESSION['user'])): ?>
        
         <li class="nav-item mx-2"> <a href="#sell" data-bs-toggle="modal" class="btn btn-light sell px-4 border border-dark"><i class="fa fa-plus"> Sell</i></a></li>
         <li class="nav-item mx-3"><a href="logout.php" class="nav-link text-white">Logout</a></li>

         <?php else: ?>
          <li class="nav-item mx-2"><a href="login.php" class="nav-link text-white">Login</a></li>
         <li class="nav-item mx-2"><a href="signup.php" class="nav-link text-white">Sign-up</a></li>
         </ul>
         <?php endif; ?>
        
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     </div>
 </nav>
 <nav2 class="navbar navbar-expand-lg navbar-light shadow">
     <form action="" class="d-sm-block d-lg-none mx-auto">
         <div class="input-group" >
         <input type="search" class="form-control">
         <input type="submit" class="btn btn-warning" value="GO">
         </div>
     </form>      
    <div class="collapse navbar-collapse" id="navcollapse">
    <ul class="navbar-nav me-auto mx-2">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu dropdown-menu-light border-0" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><a class="dropdown-item" href="#">Something else here Lorem, ipsum dolor sit amet consectetur adipisicing elit. At voluptates ut iusto, culpa natus voluptate ab velit odio nobis dignissimos quis ex veniam? Quia obcaecati vero corporis est earum voluptatem!</a></li>
          </ul>
        </li>
        <?php
                      $callcat = $saitama->getData("SELECT * FROM category");
                      foreach($callcat as $cat): ?>
                      
         <li class="nav-item"><a href="index.php?cat_id=<?= $cat['cat_id'];?>" class="nav-link"><?= $cat['cat_title'];?> </a></li>
        <?php endforeach ?>
         
     </ul>
     </div>
 </nav2>


<div class="modal fade" id="sell">
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="">Product Name</label>
                    <input type="text" name="product" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" name="desc" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category" id="" class="form-control">
                      <option value="" selected hidden disabled>Select Category</option>
                      <?php
                      $callcat = $saitama->getData("SELECT * FROM category");
                      foreach($callcat as $cat): ?>
                      <option value="<?= $cat['cat_id'];?>"><?= $cat['cat_title'];?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Product Image</label>
                    <input type="file" name="p_image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Brand</label>
                    <input type="text" name="brand" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Seller name</label>
                    <input type="text" name="Seller_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Seller address</label>
                    <input type="text" name="Seller_address" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Quantity</label>
                    <input type="number" name="qty" class="form-control">
                </div>
                <div class="d-grid gap-2">
                  <input type="submit" name="add" value="Add" class="btn btn-primary">
                </div>
            </form>
        </div>
      </div>
   </div>
</div>

<?php
  if(isset($_POST['add'])){
    $image = $_FILES['p_image']['name'];
    $tmp_image = $_FILES['p_image']['tmp_name'];

    move_uploaded_file($tmp_image, "include/images/$image");

    $data = [
      'p_name' => $_POST['product'],
      'p_desc' => $_POST['desc'],
      'p_image' => $image,
      'brand' => $_POST['brand'],
      'price' => $_POST['price'],
      'p_cat_id' => $_POST['category'],
      'qty' => $_POST['qty'],
      'Seller_name' => $_POST['Seller_name'],
      'Seller_address' => $_POST['Seller_address'],
    ];

    $saitama -> insert('products',$data);
  }
?>