<?php include "include/header.php";

if(isset($_SESSION['user'])){
    $saitama->redirect('index');
}

?>

        <div class="container mt-5" style="height:100vh;">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-header text-center"><h2 style="font-family:fantasy;">Login Here</h2></div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-4">
                                    <label for="">Username/Email : </label>
                                    <input type="text" placeholder="Enter your email" name="email" class="form-control" required>
                                </div>
                                <div class="mb-4">
                                    <label for="">Password : </label>
                                    <input type="password" placeholder="Enter Password" name="password" class="form-control" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <input type="submit" value="Login" name="login" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
            if(isset($_POST['login'])){

                $email = $_POST['email'];
                $password = $_POST['password'];

                $checking = $saitama->countData("SELECT * FROM accounts WHERE email='$email' AND password='$password'");

                if($checking > 0){
                    $_SESSION['user'] = $email;
                    $saitama->redirect('index');
                }
                else{
                    echo "FAILED";
                }
            }
        ?>




<?php include "include/footer.php"; ?>