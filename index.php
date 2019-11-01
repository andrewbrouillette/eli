<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('images/eli_background3.jpg');
            background-size: 100%;
        }
    </style>
    <link rel="stylesheet" href="styling/main.css">
    <link rel="script" href="js/javascript.js">
</head>
<body>

<div class="flickeli_index">

</div>
<div class="half">
    <button id="main_button" class="refresh" value="Refresh Page" onClick="window.location.reload();">Refresh</button>
</div>

<div class="half">
    <button id="myBtn" class="test_button">Tests</button>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-body">
            <span class="close">&times;</span>
            <p class="eli_text">Hello, I am ELI</p>
            <p class="eli_text">Which Stands for "Environmental Learning Intelligence"</p>
            <p class="eli_text">I am a program created for the purpose of training with Machine Learning and Artificial
                Intelligence</p>
            <p class="eli_text">If you are interested in testing my Machine Learning and Artificial Intelligence
                capabilities, please select the "Tests" button</p>
            <p class="eli_text">and select any of the options provided for you.</p>
        </div>
    </div>

</div>

<div id="myModal2" class="modal2">
    <!-- Modal content -->
    <div class="modal-content2">
        <div class="modal-body2">
            <span class="close2">&times;</span>
           <input type="button" id="modal_button" value="Apples & Oranges" onclick="window.location.href='/tpl/apples_oranges.php'" />
            <input type="button" id="modal_button" value="Neural Network" onclick="window.location.href='/NeuralNetworking/neural_network.php'" />

        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    var modal2 = document.getElementById("myModal2");


    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    var span2 = document.getElementsByClassName("close2")[0];


    btn.onclick = function() {
        modal2.style.display = "block";
    }


    // When the user clicks the button, open the modal
    window.onload = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    span2.onclick = function () {
        modal2.style.display = "none";
    }


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>

</html>