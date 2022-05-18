<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <script src="./assets/js/search.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-2">
                <br>
                <div class="row m-0">
                    <a class="mx-auto" href="">Admin</a>
                </div>
                <br>
                <div class="row m-0 mx-auto">
                    <div >
                        <img src="./assets/img/product/product-1.jpg" alt="">
                    </div>
                    <div class="username">
                         <a>Thanhmach</a>
                    </div>
                </div>
                <div class="row m-0">
                    <a data-toggle="collapse" href="#Dashboard1" aria-expanded="false" class="mx-auto">Dashboard</a>
                </div>
                <div class="row m-0">
                    <div class="collapse multi-collapse mx-auto" id="Dashboard1">
                        <div class="nav-item">
                        <input class="form-check-input" type="radio" disabled>
                            Dashboard 1
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="collapse multi-collapse mx-auto" id="Dashboard1">
                        <div class="nav-item">
                        <input class="form-check-input" type="radio" disabled>
                            Dashboard 2
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="collapse multi-collapse mx-auto" id="Dashboard1">
                        <div class="nav-item">
                        <input class="form-check-input" type="radio" disabled>
                            Dashboard 3
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <a data-toggle="collapse" href="#Form1" aria-expanded="false" class="mx-auto">Form</a>
                </div>
                <div class="row m-0">
                    <div class="collapse multi-collapse mx-auto" id="Form1">
                        <div class="nav-item">
                        <input class="form-check-input" type="radio" disabled>
                            Form 1
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="collapse multi-collapse mx-auto" id="Form1">
                        <div class="nav-item">
                        <input class="form-check-input" type="radio" disabled>
                            Form 2
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="collapse multi-collapse mx-auto" id="Form1">
                        <div class="nav-item">
                        <input class="form-check-input" type="radio" disabled>
                            Form 3
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                        <form class="form-inline">
                            <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-prepend">
                                <span class="input-group-text" type="button"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                            </div>
                        </form>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>