<?php include "../include/header.php"; ?>


   
              

<div class="container mt-5">
  <div class="card">
  <form action="" method="get">
    <div class="input-group">
        <input type="search" name="search" placeholder="search for user detils" class="form-control">
        <button name="find" class="btn btn-dark"><i class="fa fa-search"></i></button>
    </div>
  </form>

<table class="hover">
  <thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Address</th>
    <th>DOB</th>
    <th>DP</th>
    <th>Action</th>
  </tr>
  </thead>
  <?php 
  if(isset($_GET['search'])):
        $search = $_GET['search'];
        $record = $saitama->getData("SELECT * FROM accounts WHERE accounts.name LIKE '%$search%'");

  else:
     $record = $saitama->getData("SELECT * FROM accounts");
  endif;
     foreach($record as $r): ?>

     <tbody>
        <tr>
           <td><?= $r['id'];?></td>
           <td><?= $r['name'];?></td>
           <td><?= $r['contact'];?></td>
           <td><?= $r['email'];?></td>
           <td><?= $r['address'];?></td>
           <td><?= $r['dob'];?></td>
           <td><?= $r['dp'];?></td>
           
           <td>
           <a href="signup.php?delete=<?= $value[0];?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
           </td>
           <!-- <td> 
           
             <a href="" class='btn btn-danger'><i class="bi bi-trash-fill"></a>
           </td> -->
        </tr>
     </tbody>
     <?php endforeach; ?>
</table>

</div>
    </div>
    <?php
 if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    deleteData("accounts where id = '$id'");
    redirect();
 }
 ?>
<?php include "../include/footer.php"; ?>