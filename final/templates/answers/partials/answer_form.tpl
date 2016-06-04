<div class = "form-group">
    <label for = "username" class = "col-sm-3 control-label">Description</label>
    <div class = "col-sm-8">
        <textarea class = "form-control" rows = "5" placeholder = "Description" name = "body">{old('body', $answer['body'])}</textarea>
    </div>
</div>




{HTML::script('app/answerFormSelect2.js')}