<?php

session_start();
?>

<div class="header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ExamPlatform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto nav-links">

                <a class="nav-item nav-link item" href="LandingPage.php">Home </a>
                <a class="nav-item nav-link" href="#">About</a>

                <?php

                if (isset($_SESSION['id'])) {
                    echo '<a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>
                          <a class="nav-item nav-link " href="#">Logged in as ' .$_SESSION['username'].'</a>';  
                        
                } else {
                    echo 
                         '<a class="nav-item nav-link " href="includes/login.inc.php">Login</a>  
                         <a class="nav-item nav-link " href="includes/signup.inc.php">Sign up</a>';
                }

                ?>


            </div>
        </div>
    </nav>


</div>