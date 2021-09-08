<?php include "../include/header.php"; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-6">
        <img src="..\include\images\IMG_20200304_215054_compress9_compress17.webp" alt="" class="img-fluid" style="height:400px; width:auto;">
        </div>
        <div class="col-6">
            <div class="container mt-5">
                <h2>Insert Category</h2>
                <form action="category.php" method="post">
                    <div class="mb-3">
                        <label for="">Category</label>
                        <input type="text" name="cat_title" class="form-control">
                    </div>
                   <div class="d-grid mb-2">
                       <input type="submit" name="submit" class="btn btn-success">
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $data = [
            'cat_title' => $_POST['cat_title']
        ];

        $saitama -> insert('category', $data);
    }
?>
<?php include "../include/footer.php"; ?>