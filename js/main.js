// sidebar.view.php **Sidebar Responsive
let btn = document.querySelector("#sidenavBtn");
let sidenav = document.querySelector("#sideNav");
btn.onclick = function () {

    if (window.innerWidth < 768) {
        sidenav.classList.toggle("customActive");
    }
}

//custom hide
let btn2 = document.querySelector(".table-control-collapse");
let customHideTable = document.querySelector(".section-table-content");
customHideTable.classList.toggle("custom-hide");
btn2.onclick = function () {
    customHideTable.classList.toggle("custom-hide");
};



//subject.php **tabpane
/*
Navigating to task
button -> id="task-tab" 
data-bs-target="#task-tab-pane"
*/
// ***Not working navigating ng tabpane in subjects
const triggerHome = document.querySelector('#myTab button[data-bs-target="#module-tab-pane"]')
const triggerTask = document.querySelector('#myTab button[data-bs-target="#task-tab-pane"]')
const triggerExam = document.querySelector('#myTab button[data-bs-target="#exam-tab-pane"]')
const triggerFinished = document.querySelector('#myTab button[data-bs-target="#finished-tab-pane"]')
$("#examFirstBtn").click(function() {
    alert("Open Task pane");
    bootstrap.Tab.getInstance(document.querySelector('#myTab button[data-bs-target="#task-tab-pane"]')).show()
    
});
$("#examSecondBtn").click(function() {
    alert("Open finished pane");
    bootstrap.Tab.getInstance(triggerFinished).show()
    
});

$("#taskLinkBtn").click(function() {
    alert("Open exam pane");
    bootstrap.Tab.getInstance(triggerTask).show()
    
});


//subject.php ** Progress
//Quiz
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

//Call functions
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















































// const test = document.querySelector('#myTab button[data-bs-target="#task-tab-pane"]')




// const triggerEl = document.querySelector('#task-tab')
// $('#coolkid').click(function(){
//     alert('clicked');
//     bootstrap.Tab.getInstance(triggerEl).show()
// })

// // working task-tab-pane
// const trigerTab1 = document.querySelector('#myTab li button[data-bs-target="#module-tab-pane"]')
// $('#dumbass').click(function () {
//     alert("dumbass");
//     bootstrap.Tab.getInstance(trigerTab1).show()
// })

// const trigerTab2 = document.querySelector('#myTab li button[data-bs-target="#finished-tab-pane"]')
// $('#coolkid').click(function () {
//     alert("coolkid");
//     bootstrap.Tab.getInstance(trigerTab2).show()
// })

// const triggerFirstTabEl = document.querySelector('#myTab li:nth-child(3) button')
// bootstrap.Tab.getInstance(triggerFirstTabEl).show()
// $('#dumbass').click(function () {
//     alert('clicked');
//     bootstrap.Tab.getInstance(triggerTab).show()
// })