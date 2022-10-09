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
                        <button class="tablinks" onclick="openCity(event, 'studentInfoPane')"
                            id="defaultOpen">Info</button>
                        <button class="tablinks" onclick="openCity(event, 'studentSubjectPane')">Subject</button>
                        <button class="tablinks" onclick="openCity(event, 'studentProgressPane')">Progress</button>
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
                            <h3>Dingdong Panter</h3>
                            <p>Ancestor</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!-- 
 -->