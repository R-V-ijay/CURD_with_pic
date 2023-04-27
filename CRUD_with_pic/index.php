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
                    <a class="nav-link active" aria-current="page" href="#">Employees</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="create_form.php">Create User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<main>
    <?php 
    $fetch_query = "SELECT * FROM user_details";
    $fetch_result = mysqli_query($connect,$fetch_query);


    if(mysqli_num_rows($fetch_result) > 0){
    ?>
    <div class="container mt-5">
    <table class="table text-center">
            <thead>
                <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody >
    <?php
        foreach($fetch_result as $key => $result){
    ?>
            <tr>
            <th><?= $key+1?></th>
            <td><?= $result['name']?></td>
            <td><?= $result['email_id']?></td>
            <td><img src="<?= $result['profile_pic']?>" alt="" style="width:100px; height:100px;"></td>
            <td class="w-25"><a class="btn btn-primary w-25 me-1" href="update.php?id=<?=$result['id']?>"> Edit</a><a class="btn btn-danger  w-25" >Delete</a></td>
            </tr>
    <?php
        }
    }
    ?>        
            </tbody>
        </table>
    </div>
</main>



<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="./asset/js/lib/bootstrap.bundle.min.js"></script>
<script src="./asset/js/script.js"></script>
    
</body>
</html>