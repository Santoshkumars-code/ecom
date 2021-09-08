<?php include "include/header.php"; ?>
<img src="include\images\en_slider-01.png" alt="" class="poster w-100">
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-3">
                <div class="list-group">
                    <?php
                    $callcat = $saitama->getData("SELECT * FROM category");
                    foreach($callcat as $yo): ?>
                    <a href="index.php?cat_id=<?= $yo['cat_id'];?> " class="list-group-item list-group-item-action"><?= $yo['cat_title'];?></a>
                    <?php endforeach; ?>
                </div>
        </div>
        <div class="col-lg-9">
            <div class="container-fluid">
                <h2>Latest Products</h2>
                <div class="row">
                    <?php
                    if(isset($_GET['cat_id'])){
                        $cat_id=$_GET['cat_id'];
                        $products = $saitama->getData("SELECT * FROM products WHERE p_cat_id='$cat_id'");
                    }
                    elseif(isset($_GET['find'])){
                        $search = $_GET['search'];
                        $products = $saitama->getData("SELECT * FROM products WHERE p_name LIKE '%$search%'");
                    }
                    else{
                        $products = $saitama->getData("SELECT * FROM products");
                    }
                   
                    foreach($products as $yo): ?>
                    <div class="col-3 p-0">
                    <a href="view.php?p_id=<?= $yo['p_id'];?>" class="nav-link text-dark">
                        <div class="card mx-0 g-0">
                            <img src="<?= "include/images/".$yo['p_image'];?>" class="card-img-top img-fluid" style="object-fit:cover; height:200px;   " alt="">
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
            
        </div>
    </div>
</div>


<?php include "include/footer.php"; ?>