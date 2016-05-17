<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 19:20:49
         compiled from "/home/vagrant/feup/LBAW/final/templates/questions/search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630792976573b6f11b01c25-44297027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf5bf952cae1fa181ba473f196d87c3b2590af5' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/questions/search_results.tpl',
      1 => 1463512755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630792976573b6f11b01c25-44297027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'query' => 0,
    'questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573b6f11b3c8e4_42028079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573b6f11b3c8e4_42028079')) {function content_573b6f11b3c8e4_42028079($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class = "container">
    <?php echo $_smarty_tpl->getSubTemplate ('common/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1 class = "results">Search results for: "<span class = "search-string"><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</span>"</h1>

    <div class = "question-space">
        <?php if (count($_smarty_tpl->tpl_vars['questions']->value)==0) {?>
            No questions for your search query.
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ('questions/partials/question_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } ?>
    </div>

    <div class = "load-more col-sm-12 space-top text-center">
        <button id = "load_more_questions" data-url = "<?php echo url('api/questions/search_load_more');?>
" type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
    </div>

</div>

<script type = "text/javascript">
    $(document).ready(function () {
        var next_page = 1;
        $("#load_more_questions").on('click', function () {
            $.get($(this).data('url') + '?query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&page=' + next_page, function (data) {
                addNewQuestions($.parseJSON(data));
                next_page++;
            });
        });
    });

    function addNewQuestions(objects) {
        $.each(objects, function (i, object) {
            var newObject = $('.question-info-container:last-child').clone(true);

            newObject.find('.vote-count').html(object.votes);
            updateTitleAndLink(newObject.find('.question-title'), object);
            updateTitleAndLink(newObject.find('.question-body'), object);
            updateSolvedStatus(newObject.find('.question-solved-status'), object.solved);
            updateDate(newObject.find('.question-updated-at'), object);
            updateNumberAnswers(newObject.find('.question-answers'), object.number_answers);

            $('.question-space').append(newObject);
        });
    }
    
    function updateTitleAndLink(questionTitle, object) {
        questionTitle.attr('href', questionTitle.data('base-question-url') + object.id);
        questionTitle.html(object.title);
    }

    function updateBodyAndLink(questionTitle, object) {
        questionTitle.attr('href', questionTitle.data('base-question-url') + object.id);
        questionTitle.html(object.body);
    }

    function updateSolvedStatus(solvedObject, solved) {
        solvedObject.removeClass('text-success text-danger').addClass(solved ? 'text-success' : 'text-danger');
        solvedObject.find('span').html(solved ? 'Solved' : 'Not Solved');
    }

    function updateNumberAnswers(questionAnswers, number) {
        var answer = number + ' answer';
        if (number != 1) answer += 's';
        questionAnswers.html(answer);
    }

    function updateDate(questionDate, object) {
        if (object.updated_at === null || object.updated_at == '')
            questionDate.html(object.created_at);
        else
            questionDate.html(object.updated_at);
    }
</script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
