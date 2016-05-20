<?php /* Smarty version Smarty-3.1.15, created on 2016-05-17 19:20:27
         compiled from "/home/vagrant/feup/LBAW/final/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10636534195736667903b5f8-33221430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63433c8897a020f40b061a2c4f060c05c865451e' => 
    array (
      0 => '/home/vagrant/feup/LBAW/final/templates/index.tpl',
      1 => 1463512824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10636534195736667903b5f8-33221430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5736667928cf56_18562669',
  'variables' => 
  array (
    'questionsArray' => 0,
    'key' => 0,
    'tabs' => 0,
    'questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5736667928cf56_18562669')) {function content_5736667928cf56_18562669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class = "intro-header">
    <div class = "row" style = "margin: 0 auto">
        <div class = "col-lg-12">
            <div class = "overlay"></div>
            <div class = "intro-message">
                <h1>Tidder</h1>
                <p>You ask, we answer!</p>
                <hr class = "intro-divider">
                <ul class = "list-inline intro-social-buttons">
                    <li>
                        <a href = "<?php echo url('pages/about');?>
" class = "btn btn-warning btn-lg">
                            <span class = "network-name">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "<?php echo url('pages/register');?>
" class = "btn btn-success btn-lg">
                            <span class = "network-name">Join Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "http://fe.up.pt" class = "btn btn-danger btn-lg" target = "_blank"><i class = "fa fa-twitter fa-fw"></i>
                            <span class = "network-name">@FEUP</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class = "container">
    <?php echo $_smarty_tpl->getSubTemplate ('questions_tabs_partials/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class = "tab-content" style = "margin-top: 1em;">
        <?php  $_smarty_tpl->tpl_vars['questions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['questions']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questionsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['questions']->key => $_smarty_tpl->tpl_vars['questions']->value) {
$_smarty_tpl->tpl_vars['questions']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['questions']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
                <?php $_smarty_tpl->tpl_vars['panelActive'] = new Smarty_variable("active", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['panelActive'] = new Smarty_variable('', null, 0);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ('questions_tabs_partials/question_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tabName'=>$_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->tpl_vars['key']->value][0],'questions'=>$_smarty_tpl->tpl_vars['questions']->value), 0);?>

        <?php } ?>
    </div>
</div>

<script type = "text/javascript">
    $(document).ready(function () {
        $(".load-more").on('click', function () {
            var next_page = $(this).data('next-page');
            var tab = $(this).data('tab');

            $.get($(this).data('url') + '?tab=' + tab + '&page=' + next_page, function (data) {
                addNewQuestions($.parseJSON(data));
            });
            $(this).data('next-page', parseInt(next_page) + 1);
        });
    });

    function addNewQuestions(objects) {
        var chunks = arrayChunk(objects, 2);

        $.each(chunks, function (j, chunk) {
            var lastItem = $('div.active[role="tabpanel"] .question-line:last');
            var newLine = lastItem.clone(true);
            $.each(chunk, function (i, object) {
                var newObject = newLine.find('.question-col:eq(' + i + ')');
                newObject.find('.vote-count').html(object.votes);
                updateTitleAndLink(newObject.find('.question-title'), object);
                updateTitleAndLink(newObject.find('.question-body'), object);
                updateSolvedStatus(newObject.find('.question-solved-status'), object.solved);
                updateDate(newObject.find('.question-updated-at'), object);
                updateNumberAnswers(newObject.find('.question-answers'), object.number_answers);
            });

            lastItem.after(newLine);
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

    function arrayChunk(array, size) {
        //declare vars
        var output = [];
        var i = 0; //the loop counter
        var n = 0; //the index of array chunks

        for (var item in array) {

            //if i is > size, iterate n and reset i to 0
            if (i >= size) {
                i = 0;
                n++;
            }

            //set a value for the array key if it's not already set
            if (!output[n] || output[n] == 'undefined') {
                output[n] = [];
            }

            output[n][i] = array[item];

            i++;

        }

        return output;

    }
    ;
</script>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
