<!-- retrieving user input on TESTs -->
<?php


require('connection.php');
require('testInput.inc.php');
$questionFormNumber = 0;
$tempStatment = $db->prepare("SELECT Test_Id FROM `newtests` ORDER BY Test_Id DESC LIMIT 1");
try{
    $tempStatment->execute();
    $test_id= $tempStatment->fetchAll();
}
catch(PDOException $e) {
    echo "Error1: " . $e->getMessage();
  }

 print_r($test_id[0][0]);

//if the question text was written it means everything below it has been writtem also
while (isset($_POST['questionName'][$questionFormNumber])) {
    //initilize all the variables
    $question_name = "";
    $question_select_type = null;
    $num = 0;
    for ($i = 0; $i < 4; $i++) {
        ${'mcq_option' . $i} = null;
    }
    $question_select_type = null;
    $question_answer = null;




    //retrieve user input and put it in vars
    $question_name = $_POST['questionName'][$questionFormNumber];
    for ($i = 0; $i < 4; $i++) {
        // check if the text field i got any input
        if (isset($_POST['txt'][$questionFormNumber][$i])) {
            //if the user has writter anything
            ${'mcq_option' . $i} = $_POST['txt'][$questionFormNumber][$i];
        }
        else{
            //put an empty string in the array as a placeholder
            //$html['txt'.$i."[]"] = "empty";
        }
    }
    if (isset($_POST['selectType'])) {
        $question_select_type = $_POST['selectType'];
    }

    //if there the answer was choosen (it is a radio)
    if (isset($_POST['num' . $questionFormNumber])) {
        //retrieve what radio was it? (0,1,2,3)
        $num = $_POST['num' . $questionFormNumber];

        //retrieve the text field for that radio
        if (isset(${'mcq_option' . $num})) {
            $question_answer =  ${'mcq_option' . $num};
            //echo ("THE ANSWER ".$question_answer);
        }
    }


    echo nl2br("\n".$question_name . "\n" . $question_select_type . "\n");

    for ($i = 0; $i < 4; $i++) {
        if (isset(${'mcq_option' . $i})) {
            echo nl2br(${'mcq_option' . $i} . "\n");
        }
    }
    echo nl2br("The Answer: " . $question_answer . "\n");
    echo ("<hr> </br>");
    $questionFormNumber++;


//statment below puts the retrieved data into the database
$statment = $db->prepare("INSERT INTO 
newquestions(Test_Id,
Question_text,
type,
MCQ1,
MCQ2,
MCQ3,
MCQ4,
Answer)
VALUES(:Test_Id,
:question_name,
:question_type,
:mcq_option0,
:mcq_option1,
:mcq_option2,
:mcq_option3,
:question_answer)");
try{
    $statment->execute( [
     'Test_Id'=>$test_id[0][0],   
    'question_name'=> $question_name, 
    'question_type' => $question_select_type,
    'mcq_option0' => $mcq_option0,
    'mcq_option1' => $mcq_option1,
    'mcq_option2' => $mcq_option2,
    'mcq_option3' => $mcq_option3,
    'question_answer'=> $question_answer]);
}
catch(PDOException $e) {
    echo "Error1: " . $e->getMessage();
  }

}
?>