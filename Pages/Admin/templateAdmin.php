<!DOCTYPE html>
<html>
<head>
    <title>LBAW - Tidder Admin</title>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="<?= resource('favicon.png') ?>"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    <?= HTML::style('css/bootstrap.min.css') ?>
    <?= HTML::style('css/bootstrap-changes.css') ?>

    <?= HTML::script('jquery-2.2.1.min.js') ?>
    <?= HTML::script('bootstrap.min.js') ?>

</head>
<body>
        <?php render('header'); ?>

        <?php importContent(); ?>

        <?php importNotifications(); ?>
</body>
</html>