<?php
require_once __DIR__ . '/../PHPML/vendor/autoload.php';

//use the php ml not rubix
use Phpml\Classification\KNearestNeighbors;

$samples = [
        [0, 0], 
    [0, 0], 
    [0, 0], 
    [70, 1], 
    [100, 1], 
    [82, 1], 
    [96, 2], 
    [143, 2], 
    [183, 2], 
    [110, 1], 
    [55, 1], 
    [134, 1], 
    [82, 1], 
    [84, 2], 
    [200, 2], 
    [148, 2]];
$labels = [
        0, 
    0,
    0, 
    1,
    1, 
    1, 
    2, 
    2, 
    2, 
    1, 
    1, 
    1, 
    1, 
    2, 
    2, 
    2];

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);
$weight = isset($_GET['weight']) ? $_GET['weight'] : '';
$weight_num = (int)$weight;

$roughness = isset($_GET['roughness']) ? $_GET['roughness'] : '';
$rough_num = (int)$roughness;

$result = $classifier->predict([$weight_num, $rough_num]);
if (isset($result)) {

}

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('/../images/eli_background.jpg');
            background-size: 100%;
        }
    </style>
    <link rel="stylesheet" href="/../styling/main.css">
    <link rel="script" href="/../js/javascript.js">
</head>
<body>

<div class="navbar">
    <a class="refresh" onclick="window.location.href='../index.php'">Home</a>
    <a class="refresh" value="Refresh Page" onClick="window.location.reload();">Refresh</a>
</div>
<!-- Button to open the modal login form -->
<div class="face">
    <img src="/images/face.gif">
</div>
<form method="get" id="form_submit" action="apples_oranges.php">
    <!-- The Modal -->
    <div id="myModal3" class="modal3">
        <!-- Modal content -->
        <div class="modal-content3">
            <div class="modal-header3">
                <h2>APPLES & ORANGES</h2>
            </div>
            <div class="modal-body3">
                <p class="eli_text">In this test, ELI will try to guess whether you have either an "APPLE" or an
                    "ORANGE".
                    You will enter in the Weight in Grams and also the "Smoothness" of the Fruit by entering either:
                </p>
                <p class="eli_text">
                    1 for "Smooth"
                </p>
                <p class="eli_text">
                    or
                </p>
                <p class="eli_text">
                    2 for "Rough".
                </p>
                <p class="eli_text">
                    After you click the "Submit" Button, ELI will provide his best
                    educated guess as to what fruit you currently have.
                </p>
                <p class="eli_text">A typical Apple Weighs anywhere between 70 - 100 grams while an Orange weighs
                    between 96 - 184 grams.</p>


            </div>
        </div>

    </div>

    <div id="myModal4" class="modal4">
        <!-- Modal content -->
        <div class="modal-content4">
            <div class="modal-header3">
                <h2>INPUT DATA</h2>
            </div>

            <div class="modal-body4">
                <p class="eli_text">Weight (Grams):</p>
                <input type="text" name="weight">
                <p class="eli_text">Smoothness (1 for smooth, 2 for rough):</p>
                <input type="text" name="roughness">
                <p></p>
                <input id="mySubmitBtn" type="submit">Submit</input>
            </div>

        </div>

    </div>

</form>
<div id="myModal5" class="modal5">
    <!-- Modal content -->
    <div class="modal-content5">
        <div class="modal-header3">
            <h2>RESULT</h2>
        </div>

        <div class="modal-body5">

            <? if ($result == 1) { ?>
                <p class="eli_text_apple" id="half">
                    Apple
                </p>
                <p id="half">
                    <img src="../images/apples-20clip-20art-jRcG8zGTL.png" class="apple">
                </p>
            <? } elseif ($result == 2) { ?>
                <p class="eli_text_orange" id="half">
                    Orange
                </p>
                <p id="half">
                    <img src="../images/orange.png" class="orange">
                </p>
            <? } elseif ($result == 0) { ?>
                <p class="eli_text">
                    Please enter a valid Weight and Smoothness
                </p>
            <? } ?>

        </div>

    </div>

</div>


<script>
    // Get the modal
    var modal3 = document.getElementById("myModal3");

    var modal4 = document.getElementById("myModal4");

    var modal5 = document.getElementById("myModal5");

    // When the user clicks the button, open the modal
    window.onload = function () {
        modal3.style.display = "block";
        modal4.style.display = "block";
        modal5.style.display = "block";

    }



</script>


</body>

</html>
