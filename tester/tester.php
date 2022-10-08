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


</head>

<body>

<div class="container bg-light p-5 m-4">
    <h1>Tab List tester</h1>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button"
                role="tab" aria-controls="messages" aria-selected="false">Messages</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content pt-3">
        <div class="tab-pane active " id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">Home content...</div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">Profile content...</div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">Message content...
        </div>
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">Settings content...
        </div>
    </div>
</div>

<div class="container m-4 p-5">
    <button class="btn btn-primary" id="firstBtn">First</button>
    <button class="btn btn-primary" id="secondBtn">Second</button>
    <button class="btn btn-danger" id="thirdDanger"> Third</button>

</div>



    <!-- Javascrpit Files -->



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

<script>
const triggerHome = document.querySelector('#myTab button[data-bs-target="#home"]')
const triggerFirstTabE1 = document.querySelector('#myTab li:first-child button')
const triggerSecondTabE2 = document.querySelector('#myTab li:nth-child(2) button')

const triggerSecondTab = document.querySelector('#profile-tab')

// bootstrap.Tab.getInstance(triggerEl).show()

$("#firstBtn").click(function() {
    alert("Open home pane");
    bootstrap.Tab.getInstance(triggerHome).show()
    
});

$("#secondBtn").click(function() {
    alert("Open home pane by selecting tab");
    bootstrap.Tab.getInstance(triggerFirstTabE1).show()
});

$("#thirdDanger").click(function() {
    alert("lol");
    bootstrap.Tab.getInstance(test).show()
});
</script>
</body>

</html>