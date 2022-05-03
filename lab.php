<!--HERE IS THE PROCESS OF HOW I WENT TO UNDERSTAND THINGS-->

<!--Conection with database-->

<?php 
//$dbHOST= getenv('DB_HOST');
//$dbName= getenv('DB_NAME');
//$dbUser= getenv('DB_USER');
//$dbPassword= getenv('DB_PASSWORD');

//$dbConnection = new PDO ("mysql:host=$dbHOST;dbname=$dbName;charset=utf8",$dbUser,$dbPassword);
?>

<!--CREATING VARIABLES FROM DATABASE-->

<?php

//QUESTIONS.
//First steps understanding where it takes the info, then gather all the info creating an array
//and later creating variables from especific parts of the array

//$query=$dbConnection->query("SELECT ID, Text FROM Questions");
//$questions=$query->fetchAll(PDO::FETCH_ASSOC);

//$firstQuestion = $questions[0];
//$secondQuestion= $questions[1];
//$thirdQuestion= $questions[2];

//ANSWERS
//same process as Questions first steps

//$query=$dbConnection->query("SELECT * FROM Answers");
//$answers=$query->fetchAll(PDO::FETCH_ASSOC);

//For question 1

//$a1=$answers[0];
//$a2=$answers[1];
//$a3=$answers[2];

//JUST TO UNDERSTAND CREATING AN ARRAY OF ONLY THE QUESTIONS I NEED
//and later i can create a variable only for ID of question 1

//$query=$dbConnection->query("SELECT text FROM Answers WHERE QuestionID = 1");
//$respuestas1=$query->fetchAll(PDO::FETCH_ASSOC);

//BUT IF YOU CREATE A CONNECTION WITH THE DATABASE THAT IS LINKED (QUESTIONS & ANSWERS) YOU JUST CREATE FROM THE
//ONE TABLE CONNECTED ALL THE VARIABLES

/////////////////////


<!----------------------------------BEFORE CODE
    <?php include 'header.php';

    if(isset($_POST['submit'])){

        $question1=$_POST['question1'];   
    
        $_SESSION['question1']=$question1;
    }


   //THIS WERE TEST's I've done in order to understand and checking if it works
   // echo "funciona->". $a2['IsCorrectAnswer']. "<-funciona?";
   //print_r($a1);
   //print_r($a2);
   //print_r($a3);
?>
<body>
    <div class="bg-image background-image1" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $firstQuestion['Text'] . '</h1>' ?>

            <form action="q2.php" name="" method="post">

                <input type="radio" name="question1" id="" value="<?php echo $a1['IsCorrectAnswer']?>"> 
                <label for="question1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a1 ['text'] . '</h4>'?></label>

                <input type="radio" name="question1" id="" value="<?php echo $a2['IsCorrectAnswer']?>">
                <label for="q2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a2['text'] . '</h4>' ?></label>

                <input type="radio" name="question1" id="" value="<?php echo $a3['IsCorrectAnswer']?>">
                <label for="q3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a3['text'] . '</h4>' ?></label>
                
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>

    
    <?php include 'footer.php'?>
</body>------------------------------------------------>