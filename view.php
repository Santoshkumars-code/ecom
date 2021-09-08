<?php include "include/header.php"; ?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-2">  </div>
        <div class="col-lg-10">
           
                <?php

                $id = $_GET['p_id'];
                $xo = $saitama->getData("SELECT * FROM products WHERE p_id = '$id'");
                foreach($xo as $yo): ?>
            <div class="row">
                <div class="col-lg-7">
                <div class="card">
                    <img src="include/images/<?= $yo['p_image'];?>" class="img-fluid" style="height:500px; width:auto;" alt="">
                </div>
                </div>
                <div class="col-lg-5">
                <div class="card">
                <div class="card-header">
                <h2><?= $yo['p_name'];?></h2>
                </div>
               <div class="card-body">
                    <p class="lead"><?= $yo['p_desc'];?></p>
                    <p class="lead"><?= $yo['brand'];?></p>
                    <p class="lead text-muted">Rs. <?= $yo['price'];?></p>
                    </div>
                    </div>
                    <div class="card mt-5">
                    <div class="card-body">
                    <h3>Seller description</h3>
                    <p class="lead"><?= $yo['seller_name'];?></p>
                    <p class="lead"><?= $yo['seller_address'];?></p>
                    <button class="btn btn-info d-grid mt-3">Contact with seller</button>
                    <button class="btn btn-info d-grid mt-3">Chat with seller</button>
                </div>
                </div>
                </div>
            </div>
           
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="container-fluid">
                <h2>Related Products</h2>
                <div class="row">
                    <?php
                    $products = $saitama->getData("SELECT * FROM products");
                    foreach($products as $yo): ?>
                    <div class="col-3 p-0">
                    <a href="view.php?p_id=<?= $yo['p_id'];?>" class="nav-link text-dark">
                        <div class="card mx-0 g-0">
                            <img src="<?= "include/images/".$yo['p_image'];?>" class="card-img-top img-fluid" style="object-fit:cover; height:200px;" alt="">
                               <div class="card-body py-0">
                                   <p class="lead py-0"><?= $yo['p_name'];?></p>
                                   <p>Rs. <?= $yo['price'];?></p>
                               </div>   
                        </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

<?php include "include/footer.php"; ?>