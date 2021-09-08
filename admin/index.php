<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

</head>
<body>


 <div class="container mt-5"  style="background-image: linear-gradient(to right,rgba(25,0,4),rgba(5,55,102));">

    <div class="row">
        <div class="col-lg-3 mt-1 mb-1">
            <div class="list-group">
           
               <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-house-door-fill"></i>Dashboard</a>
                <a href="category.php" class="list-group-item list-group-item-action"><i class="bi bi-stack"></i>Categories</a>
                <a href="product.php" class="list-group-item list-group-item-action"><i class="bi bi-truck"></i>Products</a>
                <a href="apply.php" class="list-group-item list-group-item-action"><i class="bi bi-person-square"></i>Apply</a>
                <a href="logout.php" class="list-group-item list-group-item-action "><i class="bi bi-power"></i>logout</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">

                <div class="col-6 mt-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h2>Products</h2>
                            <h1 class="display-4">300+</h1>
                        </div>
                    </div>
                </div>

                <div class="col-6 mt-4">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h2>Categories</h2>
                            <h1 class="display-4">100+</h1>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    
    </div>

 </div>
    
</body>
</html>