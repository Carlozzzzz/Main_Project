<div id="modalWrapper">

    <!-- Modal Create assignment|project|essay|activity-->
    <div class="modal fade my-auto" id="modalCreateTaskPlain" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="">Create Task Title</h5>
                </div>
                <div class="modal-body ">

                    <!-- Create Assignment form -->
                    <form>
                        <div class="row">
                            <div class="form-group col-6">
                                <div class="mb-3">
                                    <label for="gradingSelector">Select Grading</label>
                                    <select class="form-select" aria-label="select grading" id="gradingSelector">
                                        <option value="1">First Grading</option>
                                        <option value="2">Second Grading</option>
                                        <option value="3">Third Grading</option>
                                        <option value="4">Fourth Grading</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputAssignmentDescription" class="form-label mb-0">Task Name</label>
                                    <input type="name" class="form-control" id="inputAssignmentDescription"
                                        aria-describedby="taskname">
                                </div>
                                <div class="mb-3 ps-0 textarea-cont">
                                    <label for="">Assignment Content</label>
                                    <textarea class="form-control" placeholder="Content Description"
                                        id="floatingTextarea"></textarea>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="inputTaskType">Task type</label>
                                    <input type="text" class="form-control" id="inputTaskType" disabled
                                        value="task type here...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-check-label" for="inputDates">Duration</label>
                                    <div class="d-flex align-items-center">
                                        <input type="date" class="form-control" id="inputStartDate">
                                        <span class="mx-2">to</span>
                                        <input type="date" class="form-control" id="inputEndDate">
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="inputMaxScore">Max score</label>
                                    <input type="number" class="form-control" id="inputMaxScore">

                                </div>
                                <div class="form-group mb-3">
                                    <label>Allow late submission</label>
                                    <div class="mt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="submissionChoice"
                                                id="radioYes" checked>
                                            <label class="form-check-label" for="radioYes">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="submissionChoice"
                                                id="radioNo">
                                            <label class="form-check-label" for="radioNo">
                                                no
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ms-2">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create quiz|exams -->
    <div class="modal fade" id="modalCreateTaskChoices" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createQuizTitle">Create Quiz</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="colmd-6">
                                
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <div class="form-group mb-3">
                            <label for="inputQuestion " class="form-label">Question</label>
                            <input type="text" class="form-control" id="inputQuestion" aria-describedby="question">
                        </div>
                        <div class="form-group mb-3">
                            <label for="answerSelector">Select Grading</label>
                            <select class="form-select" aria-label="select answer" id="answerSelector">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="4">D</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Allow late submission</label>
                            <div class="mt-1">
                                <div class="form-check d-flex mt-2">
                                    <input class="form-check-input" type="radio" name="questionChoice" id="radioA"
                                        checked>
                                    <label class="form-check-label mx-2" for="radioA">
                                        A.
                                    </label>
                                    <input type="text" class="form-control" name="choiceA">
                                </div>
                                <div class="form-check d-flex mt-2">
                                    <input class="form-check-input" type="radio" name="questionChoice" id="radioB">
                                    <label class="form-check-label mx-2" for="radioB">
                                        B.
                                    </label>
                                    <input type="text" class="form-control" name="choiceB">
                                </div>
                                <div class="form-check d-flex mt-2">
                                    <input class="form-check-input" type="radio" name="questionChoice" id="radioC">
                                    <label class="form-check-label mx-2" for="radioC">
                                        C.
                                    </label>
                                    <input type="text" class="form-control" name="choiceC">
                                </div>
                                <div class="form-check d-flex mt-2">
                                    <input class="form-check-input" type="radio" name="questionChoice" id="radioD">
                                    <label class="form-check-label mx-2" for="radioD">
                                        D.
                                    </label>
                                    <input type="text" class="form-control" name="choiceD">
                                </div>

                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" href="teacher.subject.php">Cancel</a>
                            <a class="btn btn-primary ms-3">Next</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>