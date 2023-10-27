<?php
require 'Figure.php';
require 'Circle.php';
require 'Square.php';
require 'Rectangle.php';
?>

<html>
<head>
    <title>Малювання фігур</title>
</head>

<?php
if(isset ($_POST)) {
    if (isset($_POST['height'])) {
        $Figure = new Rectangle($_POST['width'], $_POST['color'], $_POST['height']);
    } else {
        if (isset($_POST['circle'])) {
            $Figure = new Circle($_POST['width'], $_POST['color']);

        } else {
            $Figure = new Square($_POST['width'], $_POST['color']);
        }
    }
}
?>
<br>
<form action = "" method = "POST">
    <input type = 'number' value = 100 name = "width" id = "width" placeholder = "width">
    <input type = "number" value = 100 name = "height" id = "height" placeholder = "height">
    <input type = "color" value = "#000000" name = "color" id = "color" placeholder = "#000000">
    <input type = "submit" value = "Paint rectangle">
</form>
<form action = "" method = "POST">
    <input type = 'number' value = 100 name = "width" id = "width" placeholder = "width/height">
    <input type = "color" value = "#000000" name = "color" id = "color" placeholder = "#000000">
    <input type = "submit" value = "Paint square">
</form>
<form action = "" method = "POST">
    <input type = 'number' value = 100 name = "width" id = "width" placeholder = "radius">
    <input type = "color" value = "#000000" name = "color" id = "color" placeholder = "#000000">
    <input type = "text" value = 1 name = "circle" hidden>
    <input type = "submit" value = "Paint circle">
</form>
<div style="<?php echo $Figure->getAttributes()?>"></div>
<p>Area: <?php echo $Figure->getArea()?></p>
<p>Perimeter: <?php echo $Figure->getPerimeter()?></p>
</body>
</html>