<div class = "form-group">
    <label for = "title" class = "col-sm-3 control-label">Title</label>
    <div class = "col-sm-8">
        <input type = "text" name = "title" class = "form-control" placeholder = "Title" required
               value = "{old('title', $question['title'])}">
    </div>
</div>

<div class = "form-group">
    <label for = "username" class = "col-sm-3 control-label">Description</label>
    <div class = "col-sm-8">
        <textarea class = "form-control" rows = "5" placeholder = "Description" name = "body">{old('body', $question['body'])}</textarea>
    </div>
</div>


<div class = "form-group">
    <label for = "title" class = "col-sm-3 control-label">Tags</label>
    <div class = "col-sm-8">
        <select multiple name = "tags[]" class = "form-control tagable">
            {foreach old('tags', $question_tags) as $tag}
                <option value = "{$tag}" selected>{$tag}</option>
            {/foreach}
        </select>
    </div>
</div>

<script type = "text/javascript">
    $(".tagable").select2({
        tags: true,
        placeholder: 'Type Tag',
    });
</script>