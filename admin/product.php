<?php include "../include/header.php"; ?>


   
              

<div class="container mt-5">
  <div class="card">
  <form action="" method="get">
    <div class="input-group">
        <input type="search" name="search" placeholder="search for products" class="form-control">
        <button name="find" class="btn btn-dark"><i class="fa fa-search"></i></button>
    </div>
  </form>

<table class="table hover">
  <thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Brand</th>
    <th>Image</th>
    <th>Price</th>
    <th>QTY</th>
    <th>Date</th>
    <th>Seller name</th>
    <th>Seller address</th>
    <th>Action</th>
  </tr>
  </thead>
  <?php 
  if(isset($_GET['search'])):
        $search = $_GET['search'];
        $record = $saitama->getData("SELECT * FROM products WHERE products.p_name LIKE '%$search%'");

  else:
     $record = $saitama->getData("SELECT * FROM products");
  endif;
     foreach($record as $r): ?>

     <tbody>
        <tr>
           <td><?= $r['p_id'];?></td>
           <td><?= $r['p_name'];?></td>
           <td><?= $r['p_desc'];?></td>
           <td><?= $r['brand'];?></td>
           <td><?= $r['p_image'];?></td>
           <td><?= $r['price'];?></td>
           <td><?= $r['qty'];?></td>
           <td><?= $r['seller_name'];?></td>
           <td><?= $r['seller_address'];?></td>
           <td><?= $r['date'];?></td>
           <td>
           <a href="product.php?delete=<?= $value[0];?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
           </td>
           <!-- <td> 
           
             <a href="" class='btn btn-danger'><i class="bi bi-trash-fill"></a>
           </td>-->
        </tr>
     </tbody>
     <?php endforeach; ?>
</table>

</div>
    </div>
    <?php
 if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    deleteData("products where id = '$id'");
    redirect();
 }
 ?>
<?php include "../include/footer.php"; ?>