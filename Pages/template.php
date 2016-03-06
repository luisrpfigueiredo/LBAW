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

<script type = "text/javascript">
    $(document).ready(function () {
        $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
        $('#myTabs a:first').tab('show') // Select first tab
        $('#myTabs a:last').tab('show') // Select last tab
        $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
    });
</script>
</body>
</html>