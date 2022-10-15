<!doctype html>
<html lang="en">

<head>
    <?php include('assets../link.view.php') ?>
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
            <div class="col-md-8 py-4 main-content" id="subjectMainContent">
                <div class="row mx-0">
                    <div class="custom-border">
                        <a href="subjects.php" class="text-primary">Back</a>
                        <h3 class="text-center">Section 1 - Project</h3>
                        <p>03 Project</p>
                    </div>
                </div>
            </div>

            <!-- Right Banner -->
            <div class="custom-border col-md-2 mt-4" id="rightBanner">
               <?php include('assets/banner.view.php')?>
            </div>

        </div>
    </div>


    <!-- Javascrpit Files -->
    


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- J-query -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</body>

</html>