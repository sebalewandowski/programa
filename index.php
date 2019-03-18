<?php
require __DIR__ . '/vendor/autoload.php';

use Programa\Controller\MenuController;

$r = new MenuController();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="assets/file.js"></script>
    <title>CV</title>
</head>
<body>
<div id="menu">
<?php $r->display_children(0, 1);?>
</div>
<br>
<br>
<br>
</body>
</html>