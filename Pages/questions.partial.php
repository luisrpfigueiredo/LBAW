<ul class = "nav nav-tabs" id = "questions">
    <li class = "active">
        <a href = "#latest" aria-controls = "latest" role = "tab" data-toggle = "tab">Latest Questions</a>
    </li>
    <li>
        <a href = "#answered" aria-controls = "answered" role = "tab" data-toggle = "tab">Recently Answered</a>
    </li>
    <li>
        <a href = "#week" aria-controls = "week" role = "tab" data-toggle = "tab">Past Week</a>
    </li>
    <li>
        <a href = "#month" aria-controls = "month" role = "tab" data-toggle = "tab">Past Month</a>
    </li>
</ul>

<!-- TAB CONTENT -->
<div class = "tab-content" style = "margin-top: 1em;">
    <div id = "latest" role = "tabpanel" class = "tab-pane active">
        <?php render('question-col-2') ?>
    </div>
</div>