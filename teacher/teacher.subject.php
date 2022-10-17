<!doctype html>
<html lang="en">

<head>
    <?php include('assets../link.view.php') ?>
</head>

<body>
    <!-- Modals -->
    <?php include('subject_task/create_task_modals.php') ?>

    <!-- Header global-->
    <?php include('assets/header.view.php') ?>

    <!--Body content -->

    <div class="container-fluid " id="content">

        <div class="row overflow-hidden">

            <!-- Left Side Nav global-->
            <div class="col-md-2 " id="sideNav">
                <?php include('assets/sidebar.view.php') ?>
            </div>

            <!-- Main Content -->
            <div class="col-md-8 py-4 main-content" id="teacherSubjectContent">
                <!-- <button class="dangerBtn" onclick="showTab()">Danger</button> -->
                <div class="row mx-0">

                    <div class="container-fluid">
                        <!-- Subject Header (tabpane header) -->
                        <div class="row">
                            <div class="col-8">
                                <div class="tab-header">
                                    <div class="active">
                                        Modules
                                    </div>
                                    <div>
                                        Task
                                    </div>
                                    <div>
                                        Students
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
                                                <p>description Lorem, ipsum dolor sit amet consectetur adipisicing elit.
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
                                                            <i class="fa-solid fa-circle-plus"></i>
                                                            <a class="nav-link content-collapse" type="">3 Content <i
                                                                    class="fa-solid fa-chevron-down"></i></a>
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
                                                            <th>Actions</th>
                                                            <th>Permit</th>
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.module.php">01 Module
                                                                    1</a></td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">01 Assignment
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">40/50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">01 Exam 1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">01 Exam 2</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">40/60</td>
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
                                                            <i class="fa-solid fa-circle-plus"></i>
                                                            <a class="nav-link content-collapse" type="">4 Content <i
                                                                    class="fa-solid fa-chevron-down"></i></a>
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
                                                            <th>Actions</th>
                                                            <th>Permit</th>
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.module.php">02 Module
                                                                    1</a></td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">02 Assignment
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">40/50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">02 Exam 1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
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
                                                            <i class="fa-solid fa-circle-plus"></i>
                                                            <a class="nav-link content-collapse" type="">7 Content <i
                                                                    class="fa-solid fa-chevron-down"></i></a>
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
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.module.php">03 Module
                                                                    1</a></td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">03 Assignment
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">40/50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">03 Exam 1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">03 Exam 2</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">03 Project
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">03 Essay
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">03 Quiz 1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Fourth Grading -->
                                        <div class="section-module mt-2 card">
                                            <div class="card-header">
                                                <h4 class="section-title">Section 3</h4>
                                                <br>
                                                <div>
                                                    <ul class="nav justify-content-between align-items-center">
                                                        <li class="nav-item">6 task</li>
                                                        <li class="nav-item d-flex align-items-center">
                                                            <i class="fa-solid fa-circle-plus"></i>
                                                            <a class="nav-link content-collapse" type="">7 Content <i
                                                                    class="fa-solid fa-chevron-down"></i></a>
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
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.module.php">04 Module
                                                                    1</a></td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">04 Assignment
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">40/50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">04 Exam 1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">04 Exam 2</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">04 Project
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">04 Essay
                                                                    1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class=""><a class="section-link"
                                                                    href="student.assignment.php">04 Quiz 1</a>
                                                            </td>
                                                            <td>
                                                                <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                                    type="button"></i>
                                                                <i class="fa-solid fa-trash text-danger me-2"
                                                                    type="button"></i>
                                                            </td>
                                                            <td class="">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="">35/60</td>
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
                                                <div class="col-8 d-flex justify-content-start align-items-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Create Task <i class="fa-solid fa-circle-plus ms-1"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#modalCreateTaskPlain">Assignment</a>
                                                            </li>
                                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#modalCreateTaskPlain">Activity</a>
                                                            </li>
                                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#modalCreateTaskPlain">Project</a>
                                                            </li><a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#modalCreateTaskPlain">Quiz</a>
                                                            </li>
                                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#modalCreateTaskPlain">Exam</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-4 d-flex">
                                                    <div
                                                        class="module-actions d-flex justify-content-end align-items-center p-2">
                                                        <i class="fa-regular fa-pen-to-square text-primary  me-2"
                                                            type="button"></i>
                                                        <i class="fa-solid fa-trash text-danger me-2" type="button"></i>
                                                        <select class="form-select w-50"
                                                            aria-label="Default select example">
                                                            <option selected>All</option>
                                                            <option value="1">Assignment</option>
                                                            <option value="2">Activity</option>
                                                            <option value="3">Project</option>
                                                            <option value="4">Quiz</option>
                                                            <option value="5">Exam</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <table class="table ms-1">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Task List</th>
                                                    <th scope="col" class="text-center">Progress</th>
                                                    <th scope="col" class="text-center">Duration</th>
                                                    <th scope="col" class="text-center">Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">01 Quiz 1</a></td>
                                                    <td>10/30</td>
                                                    <td>08/05/22 - 08/10/22</td>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="">01 Assignment 1</a></td>
                                                    <td>10/30</td>
                                                    <td>08/05/22 - 08/10/22</td>
                                                    <td class="">
                                                        <input class="form-check-input text-center " type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="">01 Project 1</a></td>
                                                    <td>10/30</td>
                                                    <td>08/05/22 - 08/10/22</td>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Subject Students -->
                                    <div class="tab-content " id="subjectStudentList">
                                        <!-- Sort -->
                                        <div
                                            class="container-fluid d-flex justify-content-between align-items-center py-2">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <h4 class="mb-0">BSIT 4.1B</h4>
                                                <p class="text-muted ms-2 mb-0">Data Algorithm</p>
                                            </div>
                                            <select class="form-select w-25" aria-label="Default select example">
                                                <option selected>All</option>
                                                <option value="1">Assignment</option>
                                                <option value="2">Activity</option>
                                                <option value="3">Project</option>
                                                <option value="4">Quiz</option>
                                                <option value="5">Exam</option>
                                            </select>
                                        </div>
                                        <div class="student-table ms-1">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="">Task List</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>
                                                        <th scope="col" class="text-center">1Q01</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="student.progress.php">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 1</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 2</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Student 3</a></td>
                                                        <td>10/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                        <td>30/30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

    <script>
    //Tabpane
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

    //Tester
    function showTab() {
        tabHeader.getElementsByClassName("active")[0].classList.remove("active");
        tabsPane[1].classList.add("active");
        tabBody.getElementsByClassName("active")[0].classList.remove("active");
        tabBody.getElementsByTagName("div")[1].classList.add("active");

        tabIndicator.style.left = `calc(calc(100% / 4) * ${1})`;
    }


    //Module collapse
    let hideContent = document.querySelectorAll("#teacherSubjectContent .content-collapse");
    let customHideTable = document.querySelectorAll(".section-table-content");

    for (let i = 0; i < hideContent.length; i++) {
        hideContent[i].addEventListener("click", function() {
            customHideTable[i].classList.toggle("custom-hide");
        });
    }

    //Change task type (modal - create_tas_modals.php)
    </script>

</body>

</html>