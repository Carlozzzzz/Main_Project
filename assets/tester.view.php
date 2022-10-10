<div class="row mx-0 mt-3 subject-list" id="mainPageSubject">
    <div class="container-fluid custom-border">

        <h3>Subjects</h3>
        <div class="row ">

        <!-- Subjects Display -->
            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                <div class="card">
                    <img src="images/test2.png" class="card-img-top" alt="Subject Image">

                    <div class="card-body">

                        <div class="progress-bar me-3">
                            <div class="circular-progress">
                                <div class="value-container"></div>
                            </div>
                        </div>
                        <h3 class="card-title">Tsismiss Algorithm</h3>
                        <p class="card-text">BSIT 4.1B</p>
                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                        <div class="text-center my-3">
                            <button class="btn startBtn">Start</button>
                        </div>

                        <div class="card-menus mt-4 d-flex justify-content-between ">
                            <button type="button" class="btn position-relative p-0">
                                <i class="fa-solid fa-bullhorn"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>

                            <button type="button" class="btn position-relative p-0">
                            <i class="fa-regular fa-clipboard"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                <div class="card">
                    <img src="images/test2.png" class="card-img-top" alt="Subject Image">

                    <div class="card-body">

                        <div class="progress-bar me-3">
                            <div class="circular-progress">
                                <div class="value-container"></div>
                            </div>
                        </div>
                        <h3 class="card-title">Tsismiss Algorithm</h3>
                        <p class="card-text">BSIT 4.1B</p>
                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                        <div class="text-center my-3">
                            <button class="btn startBtn">Start</button>
                        </div>

                        <div class="card-menus mt-4 d-flex justify-content-between ">
                            <button type="button" class="btn position-relative p-0">
                                <i class="fa-solid fa-bullhorn"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>

                            <button type="button" class="btn position-relative p-0">
                            <i class="fa-regular fa-clipboard"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                <div class="card">
                    <img src="images/test2.png" class="card-img-top" alt="Subject Image">

                    <div class="card-body">

                        <div class="progress-bar me-3">
                            <div class="circular-progress">
                                <div class="value-container"></div>
                            </div>
                        </div>
                        <h3 class="card-title">Tsismiss Algorithm</h3>
                        <p class="card-text">BSIT 4.1B</p>
                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                        <div class="text-center my-3">
                            <button class="btn startBtn">Start</button>
                        </div>

                        <div class="card-menus mt-4 d-flex justify-content-between ">
                            <button type="button" class="btn position-relative p-0">
                                <i class="fa-solid fa-bullhorn"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>

                            <button type="button" class="btn position-relative p-0">
                            <i class="fa-regular fa-clipboard"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 pt-2">
                <div class="card">
                    <img src="images/test2.png" class="card-img-top" alt="Subject Image">

                    <div class="card-body">

                        <div class="progress-bar me-3">
                            <div class="circular-progress">
                                <div class="value-container"></div>
                            </div>
                        </div>
                        <h3 class="card-title">Tsismiss Algorithm</h3>
                        <p class="card-text">BSIT 4.1B</p>
                        <p class="card-text ">Prof. Domeng Zu Gat</p>
                        <div class="text-center my-3">
                            <button class="btn startBtn">Start</button>
                        </div>

                        <div class="card-menus mt-4 d-flex justify-content-between ">
                            <button type="button" class="btn position-relative p-0">
                                <i class="fa-solid fa-bullhorn"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>

                            <button type="button" class="btn position-relative p-0">
                            <i class="fa-regular fa-clipboard"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    3
                                </span>
                            </button>
                            <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


<script>
//index.php **Progress working
let subjectProgress = document.querySelector("#mainPageSubject .circular-progress");
var moduleCount = document.querySelectorAll('#mainPageSubject p.project-quiz').length;

let totalModule = 10; // change me
let speed = 10;

// Calculate Progress - (viewed module / total module) * 100
let subjectProgressEndValue = progressEndValue(6, totalModule);

progressDisplay(subjectProgress, subjectProgressEndValue);

function progressDisplay(progressIndicator, endValue) {
    let progressValue = 0;
    let progress = setInterval(() => {
        progressValue++;
        if (endValue == 0) {
            progressValue = 0;
        }

        progressIndicator.style.background = `conic-gradient(
        #FFD61E ${progressValue * 3.6}deg,
        #fff ${progressValue * 3.6}deg
    )`;
        if (progressValue == endValue) {
            clearInterval(progress);
        }
    }, speed);
}

function progressEndValue(count, total) {
    let result = Math.round((count / total) * 100);
    if (result == 0) {
        return 100;
    }
    return result;
}
</script>