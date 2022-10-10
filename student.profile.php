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

</head>

<body>
    <!-- Header global-->
    <?php include('assets../header.view.php') ?>

    <!--Body content -->

    <div class="container-fluid " id="content">

        <div class="row overflow-hidden">

            <!-- Left Side Nav global-->
            <div class="col-md-2 " id="sideNav">
                <?php include('assets../sidebar.view.php') ?>
            </div>

            <!-- Main Content -->

            <div class="col-md-8 py-4 main-content" id="studentProfile">
                <div class=" custom-border">
                    <div class="img-section">
                        <img class="profile-img ms-5" src="images/img-profile.png" alt="">

                        <div class="overlay-image" style="background-image:url(images/bg-profile.png);"></div>
                    </div>
                    <div class="container-fluid">
                        <div class="row profile-info mx-4">

                            <!-- Main student information -->
                            <div class="col-md-8 col-sm-12" id="studentProfile">
                                <h3>Maralit III, Carlos Romulo P.</h3>
                                <p class="text-muted">BSIT 4.1B</p>
                                <div class="tab mt-5">
                                    <button class="tablinks" onclick="openInfoPane(event, 'studentInfoPane')"
                                        id="defaultOpen">Info</button>
                                    <button class="tablinks"
                                        onclick="openInfoPane(event, 'studentSubjectPane')">Subject</button>
                                    <button class="tablinks"
                                        onclick="openInfoPane(event, 'studentProgressPane')">Progress</button>
                                </div>

                                <div id="studentInfoPane" class="tabcontent">
                                    <p>Campus : STI College Lipa</p>
                                    <p>Academic level : Tertiary</p>
                                    <p>Section : BSIT 4.1B</p>
                                    <p>Program : BSIT</p>
                                    <p>Year level : 4Y1</p>
                                    <p>Student ID : 2000149946</p>
                                </div>

                                <div id="studentSubjectPane" class="tabcontent">
                                    <p>Subject 1</p>
                                    <p>Subject 2</p>
                                    <p>Subject 3</p>
                                    <p>Subject 4</p>
                                </div>

                                <div id="studentProgressPane" class="tabcontent">
                                    <p>Progress...</p>
                                </div>
                            </div>

                            <!-- Student Guardian/Paarent -->
                            <div class="col-md-4 col-sm-12">
                                <div class="student-parent d-flex justify-content-end">
                                    <div class="custom-border d-inline-flex flex-column ">
                                        <h3>Juan Dela Crux</h3>
                                        <p>Ancestor</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <!-- Right Banner global-->
            <div class="col-md-2 py-4 " id="rightBanner">
                <?php include('assets../banner.view.php') ?>
            </div>

        </div>
    </div>





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
    <!-- Javascrpit Files -->
    <script src="js/main.js"></script>
    <script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</body>

</html>