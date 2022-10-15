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
                                            <p>description Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                Atque
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

                                            <div class="card-body section-table-content custom-hide">
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
                                                            <td class=""><a class="section-link" href="">Assignment</a>
                                                            </td>
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
                                                    <td>
                                                        <p class="badge  bg-warning">No submission</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.essay.php">01 Essay</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>~/50</td>
                                                    <td>
                                                        <p class="badge  bg-primary">Grading</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.project.php">03 Project</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>~/50</td>
                                                    <td>
                                                        <p class="badge bg-warning">No submission</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.assignment.php">01 Quiz</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>~/50</td>
                                                    <td>
                                                        <p class="badge  bg-warning">No submission</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.assignment.php">01 Major Exam</a></td>
                                                    <td>June 10, 7:00</td>
                                                    <td>~/100</td>
                                                    <td>
                                                        <p class="badge  bg-warning">No submission</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Finished Tab pane -->
                                <div class="tab-pane fade" id="finished-tab-pane" role="tabpanel"
                                    aria-labelledby="finished-tab" tabindex="0">
                                    <div class="custom-border">
                                        <table class="table align-middle mb-0 bg-white">
                                            <thead class="">
                                                <tr>
                                                    <th><span class="task-list">Finished List</span>
                                                    </th>
                                                    <th>Due</th>
                                                    <th>Grade</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="student.assignment.php">01 Quiz</a></td>
                                                    <td>June 05, 5:00</td>
                                                    <td>20/50</td>
                                                    <td>
                                                        <p class="badge  bg-success">Submitted</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="student.assignment.php">02 Major Exam</a></td>
                                                    <td>June 10, 7:00</td>
                                                    <td>70/100</td>
                                                    <td>
                                                        <p class="badge  bg-success">Taken</p>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- Progress Tab -->

                                <div class="tab-pane fade" id="progress-tab-pane" role="tabpanel"
                                    aria-labelledby="progress-tab" tabindex="0">
                                    <div class="custom-border p-5">

                                        <div class="container-fluid">
                                            <div class="row  px-0">
                                                <div class="col-md-4 mt-2" id="studentAssignmentProgress">
                                                    <div class="card p-3 justify-content-center align-items-center">
                                                        <div class="circular-progress">
                                                            <div class="value-container">0%</div>
                                                        </div>
                                                        <h4 class="mt-1">Assignment Progress</h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mt-2" id="studentQuizProgress">
                                                    <div class="card p-3 justify-content-center align-items-center">
                                                        <div class="circular-progress">
                                                            <div class="value-container">0%</div>
                                                        </div>
                                                        <h4 class="mt-1">Quiz Progress</h4>
                                                    </div>

                                                </div>

                                                <div class="col-md-4 mt-2" id="studentProjectsProgress">
                                                    <div class="card p-3 justify-content-center align-items-center">
                                                        <div class="circular-progress">
                                                            <div class="value-container">0%</div>
                                                        </div>
                                                        <h4 class="mt-1">Projects Progress</h4>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mt-2" id="studentExamProgress">
                                                    <div class="card p-3 justify-content-center align-items-center">
                                                        <div class="circular-progress">
                                                            <div class="value-container">0%</div>
                                                        </div>
                                                        <h4 class="mt-1">Exam Progress</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
    <script>
    //custom hide
    //subject.php #module-tab-pane .nav 
    let btn2 = document.querySelector("#module-tab-pane .table-control-collapse");
    let customHideTable = document.querySelector(".section-table-content");
    btn2.onclick = function() {
        customHideTable.classList.toggle("custom-hide");
    };


    //Progress Pane


    //subject.php ** Progress

    //Quiz
    // color indicator
    let quizProgress = document.querySelector("#studentQuizProgress .circular-progress");
    let quizStartValue = document.querySelector("#studentQuizProgress .value-container");
    var quizCount = document.querySelectorAll('#student p.student-quiz').length;

    let totalQuiz = 11; // change me
    let quizProgressEndValue = progressEndValue(quizCount, totalQuiz);

    //Projects
    let projectsProgress = document.querySelector("#studentProjectsProgress .circular-progress");
    let projectsStartValue = document.querySelector("#studentProjectsProgress .value-container");
    var projectsCount = document.querySelectorAll('#student p.project-quiz').length;

    let totalProjects = 0; // change me
    let projectsProgressEndValue = progressEndValue(projectsCount, totalQuiz);

    //Exam Progress
    let examProgress = document.querySelector("#studentExamProgress .circular-progress");
    let examStartValue = document.querySelector("#studentExamProgress .value-container");
    var examCount = document.querySelectorAll('#student p.student-exam').length;

    let totalExam = 15; // change me
    let examProgressEndValue = progressEndValue(examCount, totalExam);

    //end-----------------
    //Assignment
    let assignmentProgress = document.querySelector("#studentAssignmentProgress .circular-progress");
    let assignmentStartValue = document.querySelector("#studentAssignmentProgress .value-container");
    var assignmentCount = document.querySelectorAll('#student p.student-assignment').length;

    let totalAssignment = 11; // change me
    let assignmentProgressEndValue = progressEndValue(6, totalAssignment);



    let speed = 10;

    //Call index.php * subjectProgress functions
    progressDisplay(quizProgress, quizStartValue, quizProgressEndValue);


    //Call subject.php * progress functions
    progressDisplay(quizProgress, quizStartValue, quizProgressEndValue);
    progressDisplay(examProgress, examStartValue, examProgressEndValue);
    progressDisplay(projectsProgress, projectsStartValue, projectsProgressEndValue);
    progressDisplay(assignmentProgress, assignmentStartValue, assignmentProgressEndValue);

    function progressDisplay(progressIndicator, startValue, endValue) {
        let progressValue = 0;
        let progress = setInterval(() => {
            progressValue++;
            if (endValue == 0) {
                progressValue = 0;
            }

            startValue.textContent = `${progressValue}%`;
            progressIndicator.style.background = `conic-gradient(
        #389247 ${progressValue * 3.6}deg,
        #E0EBFF ${progressValue * 3.6}deg
    )`;
            if (progressValue == endValue) {
                clearInterval(progress);
            }
        }, speed);
    }

    // Calculate Percentage
    function progressEndValue(count, total) {
        let result = Math.round((count / total) * 100);
        if (result == 0) {
            return 100;
        }
        return result;
    }
    </script>

</body>

</html>