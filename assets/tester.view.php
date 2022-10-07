<div class="subject-section custom-border mt-2">
    <div class="subject-header">
        <h4 class="section-title">Section 2</h4>
        <div>
            <ul class="d-flex">
                <li>3 task</li>
                <li><a id="tableControlCollapse" href="#user-section">6 Content</a> </li>
            </ul>
        </div>
    </div>

    <div class="subject-table" id="sectionTableContent">
        <table class="section-table">
            <thead>
                <tr>
                    <th class="cell-1"></th>
                    <th class="cell-2">Grade</th>
                    <th class="cell-2">Status</th>
                </tr>
            </thead>

            <!-- do a loop here to display many items -->
            <tbody>
                <tr>
                    <th class="cell-1"><a class="section-link" href="">Module
                            1</a></td>
                    <th class="cell-2">-</td>
                    <th class="cell-2">-</td>
                </tr>
                <tr>
                    <th class="cell-1"><a class="section-link" href="">Assignment</a></td>
                    <th class="cell-2">40/50</td>
                    <th class="cell-2">Passed</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<script>
let btn2 = document.querySelector("#tableControlCollapse");
let customHideTable = document.querySelector("#sectionTableContent");
btn2.onclick = function() {
    customHideTable.classList.toggle("custom-hide");
};
</script>