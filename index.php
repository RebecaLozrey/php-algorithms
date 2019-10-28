<?php
include "includes/bubble_sort.inc.php";
include "includes/selection_sort.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
$array1 = array(3,6,9,3,5,2,8,9,1);
?>
<div class="d-inline-flex p-2">
<h1>BUBBLE SORTER</h1>
<?php
$bubble_sorter = new BubbleSorter($array1);
var_dump($bubble_sorter);
echo "<br>";
var_dump($bubble_sorter->bubble_sort());
echo "<br>";
echo "<br>";
?>
</div>

<div class="d-inline-flex p-2">
<h1>SELECT SORTER</h1>
<?php
$selection_sorter = new SelectionSorter($array1);
var_dump($selection_sorter);
echo "<br>";
var_dump($selection_sorter->sel_sort());
echo "<br>";
echo "<br>";
?>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>