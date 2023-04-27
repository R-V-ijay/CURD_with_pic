<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Employees</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="create_form.php">Create User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container row d-flex justify-content-center mt-5">
        <form class="col-lg-6" action="manage_function.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">User Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter User Name" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Id</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Adderss" name="email">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Profile picture</label>
                <input type="file" class="form-control" id="file" aria-describedby="emailHelp" placeholder="Enter Email Adderss" name="profile_pic">
            </div>
           <input type="submit" class="btn btn-primary" name="submite" value="Create"/>
        </form>
    </div>
</main>




<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="./asset/js/lib/bootstrap.bundle.min.js"></script>
<script src="./asset/js/script.js"></script>
    
</body>
</html>