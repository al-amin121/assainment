<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2nd-Ass</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/0c4918b7c2.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-----banner navbar---->
<section>
    <nav class="navbar navbar-light bg-primary-subtle mb-0 pb-0">
        <div class="container-fluid">
            <div class="col-md-3">
                <form class="me-3 ms-2 shadow" role="search">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div class="col-md-6">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" class=" w-100" height="80px">
                </a>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <a href="web.php?page=calculator">
                    <button class="btn btn-danger" type="button"><i class="fa-regular fa-bell"></i></button>
                </a>
                <a href="web.php?page=login">
                    <button type="button" class="btn btn-outline-warning  text-black shadow fw-bold mx-2">Login</button>
                </a>


            </div>

        </div>
    </nav>
</section>




    <!-----menu navbar---->

<nav class="navbar navbar-expand-lg bg-success-subtle " >
    <div class="container-fluid ps-5">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mx-auto fw-bold fs-5" >
                <li class="nav-item">
                    <a class="nav-link active me-3" aria-current="page"  href=" web.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-3" href="web.php?page=blogs" >Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-3" href="web.php?page=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="web.php?page=contact" >Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="web.php?page=series" >Series</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
