<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Assests/CSS/navbar.css">
    <link rel="stylesheet" href="Assests/CSS/ConfigureTest.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">



</head>

<body>


    <?php
    require 'header.php';
    ?>

    <main>
        <div class="mainBox">




            <div class="box">

                <div class="boxContent">

                    <input id="testName" class="textInput" type="text" placeholder="Test title"> <br>

                    <label for="time" class="boldLabels">Publish Date & Time <input id="date" class="dateInput"
                            type="datetime-local" name="date"></label>
                    <label for="duration" class="boldLabels">Test duration</label>
                    <input id="durationHours" class="durationInput" type="number" min="0" max="23" name="duration"
                        placeholder="H">
                    <input id="durationMinuts" class="durationInput" type="number" min="1" max="59" name="duration"
                        placeholder="M">

                    <legend>Display</legend>
                    <input type="radio" name="selection1" checked="checked"> <label for="random"
                        class="radioLabel">Random</label>
                    <input type="radio" name="selection1"> <label for="ordered" class="radioLabel">Ordered</label>

                    <legend>Backtracing</legend>
                    <input type="radio" name="selection2" checked="checked"> <label for="random"
                        class="radioLabel">Enable</label>
                    <input type="radio" name="selection2"><label for="ordered" class="radioLabel">Disabled</label>
                </div>
            </div>

<form action=""></form>

            <div id="box2">

                <div class="questionBox">

                    <button class="addButton">+</button>
                    <label for="questionName" class="boldLabels">Question</label> <input placeholder="Type your question here" class="textInput" type="text"
                        name="questionName">

                    <!-- Text answar -->
                    <input type="text" class="textInput textAnswer hide" placeholder="Answer">

                    <div class="mcqBox">

                        <!-- mcq answar -->
                        <div class="mcq">
                            <input type="radio" class="answers" name="num0">
                            <input type="text" class="mcqLabel">
                            <button class="addMcq">+</button>
                        </div>
                    </div>



                    <label for="questionType" class="boldLabels">Type</label>

                    <select class="selectType" name="questionName">
                        <option value="questionType1">Text</option>
                        <option value="questionType1" selected>MCQ</option>
                    </select>




                </div>





            </div>
    </main>











    <script src="Assests/JS/ConfigreTest.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>