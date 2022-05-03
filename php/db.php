<?php



function getQuestions() {
    // COPY INTO HERE ...

    $dbHOST= getenv('DB_HOST');
    $dbName= getenv('DB_NAME');
    $dbUser= getenv('DB_USER');
    $dbPassword= getenv('DB_PASSWORD');
    
    $dbConnection = new PDO ("mysql:host=$dbHOST;dbname=$dbName;charset=utf8",$dbUser,$dbPassword);
    //QUESTIONS
    $query=$dbConnection->query("SELECT * FROM Questions");
    $questions=$query->fetchAll(PDO::FETCH_ASSOC);

    // Tell PDO to throw Exceptions for every error.
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //if ($questions)
    // Get all question and answers - together.
     $query = $dbConnection->query("SELECT * FROM Questions");
     $questions = $query->fetchAll(PDO::FETCH_ASSOC);
 
     for ($q = 0; $q < count($questions); $q++) {
         $question = $questions[$q];
         $subQuery = $dbConnection->prepare("SELECT * from Answers where Answers.QuestionID = ?");
         $subQuery->bindValue(1, $question['ID']);
         $subQuery->execute(); 
         $answers = $subQuery->fetchAll(PDO::FETCH_ASSOC);
 
         $questions[$q]['Answers'] = $answers;
     }
 
     return $questions;
 }
?>