<?php
if (isset($_POST['questions'])) {
   
    // print_r ($_POST['questions']);
   
   $questions = $_POST['questions'];
   echo '<pre>'; print_r($questions); echo '</pre>';
    // foreach($questions as $question_iter => $question) {
       
    //     // echo '<pre>'; print_r($question); echo '</pre>';
    //     echo $question[0];




    //   }
   
}