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
                <?php include('assets/sidebar.view.php') ?>
            </div>

            <!-- Main Content -->
            <div class="col-md-8 py-4 main-content" id="subjectMainContent">
                <div class="row mx-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-8">
                                    <!-- Tab header   -->
                                    <div class="tab-header">
                                        <div class="active">
                                            Modules
                                        </div>
                                        <div>
                                            Task
                                        </div>
                                        <div>
                                            Progress
                                        </div>
                                    </div>
                                    <div class="tab-indicator"></div>
                                </div>
                            </div>

                            <!-- Subject Content (tabpane body) -->
                            <div class="row mt-2">
                                <div class="tabs px-0">
                                    <div class="tab-body">

                                        <!-- Subject Modules Tab -->
                                        <div class="active tab-content p-2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3>Mapehhhehe Design</h3>
                                                    <p>BSIT 4.1B</p>
                                                    <p>Course Description</p>
                                                    <p>description Lorem, ipsum dolor sit amet consectetur adipisicing
                                                        elit.
                                                        Atque
                                                        ipsum
                                                        reprehenderit voluptas sed et sint.</p>
                                                </div>

                                            </div>

                                            <!-- First Grading -->
                                            <div class="section-module mt-2 card ">
                                                <div class="card-header ">
                                                    <h4 class="section-title">Section 1</h4>
                                                    <br>
                                                    <div>
                                                        <ul class="nav justify-content-between align-items-center">
                                                            <li class="nav-item">3 task</li>
                                                            <li class="nav-item d-flex align-items-center">
                                                                <a class="nav-link content-collapse" type="">3 Content
                                                                    <i class="fa-solid fa-chevron-down"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- First Grading Content -->
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
                                                                        href="student.module.php">01 Module
                                                                        1</a></td>
                                                                <td class="">-</td>
                                                                <td class="">-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">01 Assignment
                                                                        1</a>
                                                                </td>
                                                                <td>40/50</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">01 Exam 1</a>
                                                                </td>
                                                                <td>40/50</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">01 Exam 2</a>
                                                                </td>
                                                                <td>20/50</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Second Grading -->
                                            <div class="section-module mt-2 card">
                                                <div class="card-header">
                                                    <h4 class="section-title">Section 2</h4>
                                                    <br>
                                                    <div>
                                                        <ul class="nav justify-content-between align-items-center">
                                                            <li class="nav-item">2 task</li>
                                                            <li class="nav-item d-flex align-items-center">
                                                                <a class="nav-link content-collapse" type="">4 Content
                                                                    <i class="fa-solid fa-chevron-down"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Second Grading Content -->
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
                                                                        href="student.module.php">02 Module
                                                                        1</a></td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">02 Assignment
                                                                        1</a>
                                                                </td>
                                                                <td class="">40/60</td>
                                                                <td class="">Late</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.exam.php">02 Exam 1</a>
                                                                </td>
                                                                <td class="">35/60</td>
                                                                <td class="">Finished</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Third Grading -->
                                            <div class="section-module mt-2 card">
                                                <div class="card-header">
                                                    <h4 class="section-title">Section 3</h4>
                                                    <br>
                                                    <div>
                                                        <ul class="nav justify-content-between align-items-center">
                                                            <li class="nav-item">6 task</li>
                                                            <li class="nav-item d-flex align-items-center">
                                                                <a class="nav-link content-collapse" type="">7 Content
                                                                    <i class="fa-solid fa-chevron-down"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Third Grading Content -->
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
                                                                        href="student.module.php">03 Module
                                                                        1</a></td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">03 Assignment
                                                                        1</a>
                                                                </td>
                                                                <td>40/60</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">03 Exam 1</a>
                                                                </td>
                                                                <td>40/50</td>
                                                                <td>Late</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">03 Exam 2</a>
                                                                </td>
                                                                <td>30/50</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">03 Project
                                                                        1</a>
                                                                </td>
                                                                <td>40/60</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">03 Essay
                                                                        1</a>
                                                                </td>
                                                                <td>40/60</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">03 Quiz 1</a>
                                                                </td>
                                                                <td>35/50</td>
                                                                <td>Late</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Fourth Grading -->
                                            <div class="section-module mt-2 card">
                                                <div class="card-header">
                                                    <h4 class="section-title">Section 4</h4>
                                                    <br>
                                                    <div>
                                                        <ul class="nav justify-content-between align-items-center">
                                                            <li class="nav-item">6 task</li>
                                                            <li class="nav-item d-flex align-items-center">
                                                                <a class="nav-link content-collapse" type="">7 Content
                                                                    <i class="fa-solid fa-chevron-down"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Third Grading Content -->
                                                <div class="card-body section-table-content custom-hide">
                                                    <table class="table table-hover p-0 section-table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Actions</th>
                                                                <th>Permit</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.module.php">04 Module
                                                                        1</a></td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">04 Assignment
                                                                        1</a>
                                                                </td>
                                                                <td>30/50</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">04 Exam 1</a>
                                                                </td>
                                                                <td>20/30</td>
                                                                <td>Late</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">04 Exam 2</a>
                                                                </td>
                                                                <td>-</td>
                                                                <td>No Submission</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">04 Project
                                                                        1</a>
                                                                </td>
                                                                <td>40/50</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">04 Essay
                                                                        1</a>
                                                                </td>
                                                                <td>10/10</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=""><a class="section-link"
                                                                        href="student.assignment.php">04 Quiz 1</a>
                                                                </td>
                                                                <td>14/20</td>
                                                                <td>Finished</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Subject Task -->
                                        <div class="tab-content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="d-flex  ">
                                                        <div
                                                            class="module-actions d-flex justify-content-end align-items-center p-2">
                                                            <select class="form-select w-25"
                                                                aria-label="Default select example">
                                                                <option selected>All</option>
                                                                <option value="1">Assignment</option>
                                                                <option value="2">Activity</option>
                                                                <option value="3">Essay</option>
                                                                <option value="4">Project</option>
                                                                <option value="5">Quiz</option>
                                                                <option value="6">Exam</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Task List</th>
                                                        <th scope="col" class="text-center">Grade</th>
                                                        <th scope="col" class="text-center">Duration</th>
                                                        <th scope="col" class="text-center">Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="student.quiz.php">01 Quiz 1</a></td>
                                                        <td>10/30</td>
                                                        <td>08/05/22 - 08/10/22</td>
                                                        <td>Graded</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="student.assignment.php">01 Assignment 1</a></td>
                                                        <td>10/30</td>
                                                        <td>08/05/22 - 08/10/22</td>
                                                        <td class="">Late</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="student.project.php">01 Project 1</a></td>
                                                        <td>10/30</td>
                                                        <td>08/05/22 - 08/10/22</td>
                                                        <td>Graded</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="student.essay.php">01 Essay 1</a></td>
                                                        <td>10/30</td>
                                                        <td>08/05/22 - 08/10/22</td>
                                                        <td>Graded</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="student.exam.php">01 Exam 1</a></td>
                                                        <td>10/30</td>
                                                        <td>08/05/22 - 08/10/22</td>
                                                        <td>Graded</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Subject Progress -->
                                        <div class="tab-content">
                                            <div class="custom-border p-5">

                                                <div class="container-fluid">
                                                    <div class="row  px-0">
                                                        <div class="col-md-4 mt-2">
                                                            <div
                                                                class="card p-3 justify-content-center align-items-center">
                                                                <div class="circular-progress">
                                                                    <div class="value-container">0%</div>
                                                                </div>
                                                                <h4 class="mt-1">Assignment Progress</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2">
                                                            <div
                                                                class="card p-3 justify-content-center align-items-center">
                                                                <div class="circular-progress">
                                                                    <div class="value-container">0%</div>
                                                                </div>
                                                                <h4 class="mt-1">Quiz Progress</h4>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-4 mt-2">
                                                            <div
                                                                class="card p-3 justify-content-center align-items-center">
                                                                <div class="circular-progress">
                                                                    <div class="value-container">0%</div>
                                                                </div>
                                                                <h4 class="mt-1">Activity Progress</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2">
                                                            <div
                                                                class="card p-3 justify-content-center align-items-center">
                                                                <div class="circular-progress">
                                                                    <div class="value-container">0%</div>
                                                                </div>
                                                                <h4 class="mt-1">Projects Progress</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2">
                                                            <div
                                                                class="card p-3 justify-content-center align-items-center">
                                                                <div class="circular-progress">
                                                                    <div class="value-container">0%</div>
                                                                </div>
                                                                <h4 class="mt-1">Exam Progress</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2">
                                                            <div
                                                                class="card p-3 justify-content-center align-items-center">
                                                                <div class="circular-progress">
                                                                    <div class="value-container">0%</div>
                                                                </div>
                                                                <h4 class="mt-1">Essay Progress</h4>
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
            </div>

            <!-- Right Banner -->
            <div class="custom-border col-md-2 mt-4" id="rightBanner">
               <?php include('assets/banner.view.php')?>
            </div>

        </div>
    </div>

    <!-- Script Links Bootstrap/Jquery -->
    <?php include('assets/scriptlink.view.php')?>
    
    <script src="js/main.js"></script>

    <script> 
    //Tab pane control ----------
    let tabHeader = document.getElementsByClassName("tab-header")[0];
    let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
    let tabBody = document.getElementsByClassName("tab-body")[0];

    let tabsPane = tabHeader.getElementsByTagName("div");

    for (let i = 0; i < tabsPane.length; i++) {
        tabsPane[i].addEventListener("click", function() {
            tabHeader.getElementsByClassName("active")[0].classList.remove("active");
            tabsPane[i].classList.add("active");
            tabBody.getElementsByClassName("active")[0].classList.remove("active");
            tabBody.getElementsByClassName("tab-content")[i].classList.add("active");

            tabIndicator.style.left = `calc(calc(100% / 4) * ${i})`;
        });
    }

    //Module collapse ----------
    let hideContent = document.querySelectorAll(".content-collapse");
    let customHideTable = document.querySelectorAll(".section-table-content");

    for (let i = 0; i < hideContent.length; i++) {
        hideContent[i].addEventListener("click", function() {
            customHideTable[i].classList.toggle("custom-hide");
        });
    }

    // Task Progress ----------
    let totalModule = 10;
    let speed = 10;

    // --List of progress bar --
    var progressList = document.querySelectorAll('.circular-progress');
    var valueContList = document.querySelectorAll('.value-container');

    // --Calculate the subject progress --
    let subjectProgressEndValue = progressEndValue(6, totalModule);

    // --Loop through each progress bar
    for (i = 0; i < progressList.length; i++) {
        progressList[i];
        progressDisplay(progressList[i], valueContList[i], subjectProgressEndValue);
    }

    function progressDisplay(progressIndicator, startValue, endValue) {
        let progressValue = 0;
        let progress = setInterval(() => {
            progressValue++;
            if (endValue == 0) {
                progressValue = 0;
            }

            if( progressValue <= 60){
                startValue.textContent = `${progressValue}%`;
                progressIndicator.style.background = `conic-gradient(
                    #38E54D ${progressValue * 3.6}deg,
                    #888 ${progressValue * 3.6}deg
                )`;
            }

            if (progressValue == endValue) {
                clearInterval(progress);
            }
        }, speed);
    }

    // --Calculate Progress Result
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