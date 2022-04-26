<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="icon" type="imagen/png" href="img/logo.png">

    <!--FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>

<!--Conection with database-->

<?php 


$dbHOST= getenv('DB_HOST');
$dbName= getenv('DB_NAME');
$dbUser= getenv('DB_USER');
$dbPassword= getenv('DB_PASSWORD');

$dbConnection = new PDO ("mysql:host=$dbHOST;dbname=$dbName;charset=utf8",$dbUser,$dbPassword);
?>

<!--CREATING VARIABLES FROM DATABASE-->

<?php

//QUESTIONS
$query=$dbConnection->query("SELECT ID, Text FROM Questions");
$questions=$query->fetchAll(PDO::FETCH_ASSOC);

$firstQuestion = $questions[0];
$secondQuestion= $questions[1];
$thirdQuestion= $questions[2];

//ANSWERS FROM QUESTION 1 
$query=$dbConnection->query("SELECT * FROM Answers");
$answers=$query->fetchAll(PDO::FETCH_ASSOC);

//Text For options (of answers) in question 1
$a1=$answers[0];
$a2=$answers[1];
$a3=$answers[2];

// HERE I TRANSFORMED INTO "INT"  // // // // $valora1=intval($a1 ['IsCorrectAnswer']);
//For options (of answers) question 2
$query=$dbConnection->query("SELECT * FROM Answers WHERE QuestionID = 2");
$respuestas2=$query->fetchAll(PDO::FETCH_ASSOC);
$answer21=$respuestas2[0];
$answer22=$respuestas2[1];
//For options (of answers) question 3
$query=$dbConnection->query("SELECT * FROM Answers WHERE QuestionID = 3");
$respuestas3=$query->fetchAll(PDO::FETCH_ASSOC);
$answer31=$respuestas3[0];
$answer32=$respuestas3[1];
$answer33=$respuestas3[2];
$answer34=$respuestas3[3];
$answer35=$respuestas3[4];



?>
<!--NAVBAR-->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e8ac19; font-family: 'Fredoka One'">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
      <img src="/img/logo.png" alt="" width="30" height="24">
    </a>
    <a class="navbar-brand" href="q1.php">Aks the Zebra</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
