<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/master.css" rel="stylesheet">
    <link href="css/maincontent.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;1,200;1,700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/72c32f013b.js" crossorigin="anonymous"></script>
    <style>
    a {
        color: red;
    }
    </style>

</head>

<body>
    <!-- Header -->
    <?php include('assets../header.view.php') ?>

    <!--Body content -->

    <div class="container-fluid " id="content">

        <div class="row overflow-hidden">

            <!-- Left Side Nav -->
            <div class="col-md-2 vh-100 " id="sideNav">
                <?php include('assets../sidebar.view.php') ?>
            </div>

            <!-- Main Content -->
            <div class="col-md-8 py-4 " id="mainContent">
                <div class="row mx-0">
                    <div class="container-fluid custom-border">
                        <h3 class="content-header">Welcome, Momolande'er</h3>

                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="8000">
                                    <div class="overlay-image" style="background-image:url(images/img-4.jpg);"></div>
                                    <div class="container text-center">
                                        <p>Sample text</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="8000">
                                    <div class="overlay-image" style="background-image:url(images/img-3.jpg);"></div>
                                    <div class="container text-center">
                                        <p>Sample text 2</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
                                <span class="sr-only">Previous</span>
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
                                <span class="sr-only">Next</span>
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Subjects List -->
                <div class="row mx-0 mt-3 subject-list">
                    <div class="container-fluid custom-border">

                        <h3>Subjects</h3>
                        <div class="row ">
                            <div class="col-sm-6 col-md-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">
                                    <div class="card-body">
                                        <h4 class="card-title">Subject Title 1</h4>
                                        <p class="card-text">Student Section</p>
                                        <p class="card-text">Subject Duration</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">
                                    <div class="card-body">
                                        <h4 class="card-title">Subject Title 1</h4>
                                        <p class="card-text">Student Section</p>
                                        <p class="card-text">Subject Duration</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">
                                    <div class="card-body">
                                        <h4 class="card-title">Subject Title 1</h4>
                                        <p class="card-text">Student Section</p>
                                        <p class="card-text">Subject Duration</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">
                                    <div class="card-body">
                                        <h4 class="card-title">Subject Title 1</h4>
                                        <p class="card-text">Student Section</p>
                                        <p class="card-text">Subject Duration</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 pt-2">
                                <div class="card">
                                    <img src="images/img-2.jpg" class="card-img-top" alt="Subject Image">
                                    <div class="card-body">
                                        <h4 class="card-title">Subject Title 1</h4>
                                        <p class="card-text">Student Section</p>
                                        <p class="card-text">Subject Duration</p>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>

            <!-- Right Banner -->
            <div class="col-md-2 py-4 " id="rightBanner">
                    <?php include('assets../banner.view.php') ?>
            </div>

        </div>
    </div>


    <!-- Javascrpit Files -->
    <script src="js/main.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script> -->

    <!-- J-query -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>