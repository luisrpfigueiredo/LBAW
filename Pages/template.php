<!DOCTYPE html>
<html>
<head>
    <title>LBAW</title>
    <?= HTML::style('css/bootstrap.min.css'); ?>
</head>
<body>
<div class = "container">

    <?php

    importHeader();

    importContent();
    ?>

</div>

<?= HTML::script('jquery-2.2.1.min.js') ?>
<?= HTML::script('bootstrap.min.js') ?>
</body>
</html>