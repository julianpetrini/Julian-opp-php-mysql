<?php 
session_start();
include 'php/data-collector.php';
include 'php/header2.php';
include 'php/db.php';


// Evaluate data in $_POST variable.

$currentQuestionIndex = 0;


if (isset($_POST['lastQuestionIndex'])) {
    $lastQuestionIndex = $_POST['lastQuestionIndex'];

    if (isset($_POST['nextQuestionIndex'])) {
        $currentQuestionIndex = $_POST['nextQuestionIndex'];
    }
}


if (isset($_SESSION['questions'])){
//echo 'questions do NOT exist in session. <br>';
    $questions = $_SESSION['questions'];
}
else {
//echo 'questions data EXIST in session. <br>';
    $questions = getQuestions();
    $_SESSION['questions'] = $questions;
}

//echo '<pre>';
//print_r($_SESSION['questions']);
//echo '<pre>';
//echo '<pre>';
//print_r($questions[$currentQuestionIndex]);
?>
<div class="bg-image background-image" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="color-texto text-center">
            <h3>Question <?php echo $currentQuestionIndex +1 ; ?></h3>
            <?php echo $questions[$currentQuestionIndex]['Text']; ?>
            <form <?php if ($currentQuestionIndex + 1 >= count($questions)) echo 'action="result2.php" '; ?> method="post" onsubmit="return validation();">
                <?php
                $answers = $questions[$currentQuestionIndex]['Answers'];
                $isMultipleChoice = $questions[$currentQuestionIndex]['IsMultipleChoice'];
                $maxPoints=0;


                for ($i = 0; $i < count($answers); $i++){
                    echo  '<div class="form-check">';
                    $isCorrect = $answers[$i]['IsCorrectAnswer'];

                    if ($isMultipleChoice == 1) {
                                //multiple choice(checkbox)
                        echo '<input class="form-check-input" type="checkbox" name="a-' . $i . '"  value="'. $isCorrect . '"id="i-' . $i . '">';
                    }
                    else {
                        //single choice (radio) 
                        echo '<input class="form-check-input" type="radio" name="a-0" value="'. $isCorrect . '"id="i-' . $i . '">';
                    }

                    $maxPoints += $isCorrect; //same as : $maxpoints = $maxpoints + $isCorrect;

                    echo '<label class="form-check-label" for="i-' . $i . '">';
                    echo $answers[$i]['text'];
                    echo '</label>';
                    echo '</div>';
                    }
                
                    //echo '<pre>';
                    //print_r($questions);
                    //echo '<pre>';
                
                
                ?>

                <!--Hidden Fields -->
                
                <div class="text-centerd-grid gap-2 d-md-flex justify-content-md">
                    
                    <input type="hidden" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
                    <input type="hidden" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex + 1; ?>">
                    <input type="hidden" name="maxPoints" value="<?php echo $maxPoints; ?>">

                <p id="validation-warning"></p>
                <!--End Hidden Fields -->  
                <input type="submit" value="Continue">
                </div>
            </form>

            <button onclick="validation();">Next</button>
        </div>
    </div>

    

<?php include 'footer.php'?>
    