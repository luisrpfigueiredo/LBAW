<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageAnswers.php');

PagePermissions::create('admin')->check();


$answerID = intval($_POST['answerID']);

deleteAnswer($answerID);

redirect('pages/admin/manageAnswers.php');