<!DOCTYPE html>
<html>
<head>
    <title>LBAW - Tidder</title>

    <link rel="shortcut icon" type="image/png" href="<?= resource('favicon.png') ?>"/>

    <?= HTML::style('css/bootstrap.min.css') ?>
    <?= HTML::style('css/bootstrap-changes.css') ?>
    <?= HTML::style('css/global-styles.css') ?>

    <?= HTML::script('jquery-2.2.1.min.js') ?>
    <?= HTML::script('bootstrap.min.js') ?>

</head>
<body>

    <?php importHeader(); ?>

    <?php importContent(); ?>

    <?php importNotifications(); ?>

    <br class="clearfix">
</body>
</html>