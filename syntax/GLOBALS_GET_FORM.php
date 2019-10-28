<?php
// PHP Hypertext Preprocesor, is not secuencial links
// banana in a box, double binding directives
// php global variables
// with no method it defaults in GET
// get appends the parameters in the URL
// with POST is the same just hides the parameters in the url
?>

<?php
    print_r($_REQUEST);
    echo "<br>";
?>

<body>
<form method="post" action="GLOBALS_GET_FORM.php?someParam=3">

    <input type="text" name="first_name">
    <button type="submit" name="submit">SUBMIT</button>
</form>
</body>

<?php
if(isset($_GET['submit']) AND (!empty($_GET['first_name']))){
    $first_name = $_GET['first_name'];
    echo $first_name." is a handsome fellow! <br>";

}
?>