<?php include "include/header.php"; ?>


    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
           <div class="col-6">
           <div class="card shadow">
                <div class="card-header text-center"><h3>Register on BSF.in</h3></div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" placeholder="Your Name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" placeholder="Your Contact" name="contact" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" placeholder="Your Address" name="address" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" placeholder="abc@xyz.com" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Profile Photo</label>
                            <input type="file" name="dp" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Date of birth</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" placeholder="Create a Strong Password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" name="register" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>


    <?php
        if(isset($_POST['register'])){
            $dp = $_FILES['dp']['name'];
            $tmp_image = $_FILES['dp']['tmp_name'];

            move_uploaded_file($tmp_image, "include/images/$dp");

            $data = [
                'name' => $_POST['name'],
                'contact' => $_POST['contact'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'dob' => $_POST['dob'],
                'password' => $_POST['password'],
                'dp' => $dp,
            ];

            $saitama -> insert('accounts',$data);
            $saitama-> redirect('login');
        }
    ?>

<?php include "include/footer.php"; ?>