<div class="card">
    <div class="card-header">
        <h4 class="section-title">Section 2</h4>
        <div>
            <ul class="nav justify-content-between align-items-center">
                <li class="nav-item">3 task</li>
                <li class="nav-item table-control-collapse"><a class="nav-link"  type="">6 Content</a> </li>
            </ul>
        </div>
    </div>

    <div class="card-body section-table-content" >
        <table class="table table-hover p-0 section-table">
            <thead>
                <tr>
                    <th>asdf</th>
                    <th>Grade</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th class=""><a class="section-link" href="">Module
                            1</a></td>
                    <th class="">-</td>
                    <th class="">-</td>
                </tr>
                <tr>
                    <th class=""><a class="section-link" href="">Assignment</a></td>
                    <th class="">40/50</td>
                    <th class="">Passed</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




<script>
let btn2 = document.querySelector(".table-control-collapse");
let customHideTable = document.querySelector(".section-table-content");
btn2.onclick = function() {
    customHideTable.classList.toggle("custom-hide");
};



</script>