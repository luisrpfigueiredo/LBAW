<div class = "col-sm-12 question-info-container">
        {include file="questions/partials/question_info.tpl"}

        <button class="btn-primary btn-danger" onClick="loadDeleteModal({$question['id']})" data-toggle="modal" data-target="#deleteQuestion" >Delete Question</button>
        <button class="btn-primary btn-warning" onClick="loadWarnModal('{$question['username']}')" data-toggle="modal" data-target="#warnInfo" >Warn User</button>
</div>