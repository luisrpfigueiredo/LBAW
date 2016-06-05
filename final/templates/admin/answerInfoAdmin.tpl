<div class = "col-sm-12 answer-info-container">
    {include file="answers/partials/answer_info.tpl"}

        <button class="btn-primary btn-danger" onClick="loadDeleteModal({$answer['id']})" data-toggle="modal" data-target="#deleteAnswer" >Delete Answer</button>
        <button class="btn-primary btn-warning" onClick="loadWarnModal('{$answer['username']}')" data-toggle="modal" data-target="#warnInfo" >Warn User</button>
</div>