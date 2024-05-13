<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="photo/6.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
      body {
         background-image: url("<?php echo $background_image; ?>");
      }
   </style>
   </head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="photo/6.png" alt="Logo" style="width:40px;" class="rounded-pill">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="ATPS.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ABOUT US.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact-Us.php">contact-us</a>
                </li>
            </ul>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </div>
    <div class="d-flex">
        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#connexionModal">Connexion</button>
    </div>
</nav>
<!-- Add the modal HTML here -->
<div class="modal fade" id="connexionModal">
    <!-- modal content here -->
</div>
</body>
</html>