<!DOCTYPE html>
<html>
<head>
    <title>LBAW</title>
    <?= HTML::style('css/bootstrap.min.css') ?>
    <?= HTML::style('css/bootstrap-changes.css') ?>

    <?= HTML::script('jquery-2.2.1.min.js') ?>
    <?= HTML::script('bootstrap.min.js') ?>

</head>
<body>

    <?php importHeader(); ?>
    
    <?php importContent(); ?>

    <?php importNotifications(); ?>
</body>
</html>