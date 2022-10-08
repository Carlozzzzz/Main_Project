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
            <div class="col-md-8 py-4 main-content" id="subjectMainContent">
                <div class="row mx-0">
                    <div class="custom-border">
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="module-tab" data-bs-toggle="tab"
                                        data-bs-target="#module-tab-pane" type="button" role="tab"
                                        aria-controls="module-tab-pane" aria-selected="true">Modules</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="task-tab" data-bs-toggle="tab"
                                        data-bs-target="#task-tab-pane" type="button" role="tab"
                                        aria-controls="task-tab-pane" aria-selected="false">Task</button>
                                </li>
                                
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="exams-tab" data-bs-toggle="tab"
                                        data-bs-target="#exams-tab-pane" type="button" role="tab"
                                        aria-controls="exams-tab-pane" aria-selected="false">Exams</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="finished-tab" data-bs-toggle="tab"
                                        data-bs-target="#finished-tab-pane" type="button" role="tab"
                                        aria-controls="exfinishedams-tab-pane" aria-selected="false">Finished</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="progress-tab" data-bs-toggle="tab"
                                        data-bs-target="#progress-tab-pane" type="button" role="tab"
                                        aria-controls="progress-tab-pane" aria-selected="false">Progress</button>
                                </li>
                            </ul>

                            <!-- Subjects Content -->
                            <div class="tab-content" id="subjectTabContent">

                                <!-- Modules Tab -->
                                <div class="tab-pane fade show active" id="module-tab-pane" role="tabpanel"
                                    aria-labelledby="module-tab" tabindex="0">
                                    <div>
                                        <div class="section-control custom-border subject-desc mt-2">
                                            <h3>Mapehhhehe Design</h3>
                                            <p>BSIT 4.1B</p>
                                            <p>Course Description</p>
                                            <p>description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque
                                                ipsum
                                                reprehenderit voluptas sed et sint.</p>
                                        </div>
                                        <div class="section-module mt-2 card">
                                            <div class="card-header">
                                                <h4 class="section-title">Section 1</h4>
                                                <br>
                                                <div>
                                                    <ul class="nav justify-content-between align-items-center">
                                                        <li class="nav-item">3 task</li>
                                                        <li class="nav-item table-control-collapse"><a class="nav-link"
                                                                type="">6 Content <i
                                                                    class="fa-solid fa-chevron-down"></i></a> </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-body section-table-content">
                                                <table class="table table-hover p-0 section-table">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Grade</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.module.php">Module
                                                                    1</a></td>
                                                            <td class="">-</td>
                                                            <td class="">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link" href="">Assignment</a></td>
                                                            <td class="">40/50</td>
                                                            <td class="">Passed</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Task Tab -->
                                <div class="tab-pane fade" id="task-tab-pane" role="tabpanel" aria-labelledby="task-tab"
                                    tabindex="0">
                                    <div class="overflow-hidden m-1">
                                        <table class="table align-middle mb-0 bg-white">
                                            <thead class="">
                                                <tr>
                                                    <th><span class="task-list">Task List</span>
                                                    </th>
                                                    <th>Due</th>
                                                    <th>Grade</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="student.assignment.php">01 Assignment</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>~/20</td>
                                                    <td>Not Yet</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.essay.php">01 Essay</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>~/50</td>
                                                    <td>Not Yet</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.project.php">03 Project</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>~/50</td>
                                                    <td>Not Yet</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <!-- Exam Tab -->
                                <!-- Working -->
                                <?php include("assets/tester.view.php") ?>

                                <!-- Finished Tab -->
                                <div class="tab-pane fade" id="finished-tab-pane" role="tabpanel"
                                    aria-labelledby="finished-tab" tabindex="0">
                                    <div class="custom-border">
                                        <h3>Finished Tab</h3>
                                    </div>
                                </div>

                                <!-- Progress Tab -->
                                <div class="tab-pane fade" id="progress-tab-pane" role="tabpanel"
                                    aria-labelledby="progress-tab" tabindex="0">
                                    <div class="custom-border">
                                        <h3>Progress Tab</h3>
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


    <!-- Javascrpit Files -->
   


    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- J-query -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
 
</body>

</html>