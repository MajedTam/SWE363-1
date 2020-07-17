<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Assests/CSS/navbar.css">
    <link rel="stylesheet" href="Assests/CSS/Test.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">



</head>

<body>



    <div class="header">

        <h1>Exam Platform</h1>


    </div>

    <main>

       
                <span id="time"></span>

                <div id="outerLine">
                    <div id="innerLine">

                    </div>
                </div>  
            
                <div style="clear: none;"></div>

                <div claas="outsideBox">
                    <div class="questionBlock">
                         <h1>
                            Question 1: What is this website </h1>
                    
                        <form>
                    
                            <!-- label tag starts from here -->
                            <input type="radio" name="answer" id="examMaker" value="examMaker">
                            <label> 
                                Exam Platform 
                            </label><br>
                    
                            <input type="radio" name="answer" id="shoping" value="shoping">
                            <label> 
                                Shoping Website
                            
                            </label><br>
                            <input type="radio" name="answer" id="other" value="other">
                            <label> 
                                Other  
                            </label>
                            <!-- label tag ends from here -->
                        
                            </form>
                    </div>        
                </div>



                <div>                   
                    <button class="nextButton">></button>
                    <button class="previousButton">  <</button>

                </div>
            <div class="flexContainer">
            <div class="question">

            </div>

            <div class="nextQuestion">


            </div>

        </div>

    </main>








    <script src="Assests/JS/Test.js"></script>
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