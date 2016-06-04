<?php
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/admin/manageQuestions.php');

PagePermissions::create('admin')->check();


$questionID = intval($_POST['questionID']);

deleteQuestion($questionID);

redirect('pages/admin/manageQuestions.php');

