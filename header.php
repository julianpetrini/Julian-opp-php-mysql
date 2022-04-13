<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

//ANSWERS
$query=$dbConnection->query("SELECT * FROM Answers");
$answers=$query->fetchAll(PDO::FETCH_ASSOC);

//For question 1
$a1=$answers[0];
$a2=$answers[1];
$a3=$answers[2];
//For question 2

$query=$dbConnection->query("SELECT text FROM Answers WHERE QuestionID = 1");
$respuestas1=$query->fetchAll(PDO::FETCH_ASSOC);
$answer1=$respuestas1[0];
$answer1=$respuestas1[1];
$answer1=$respuestas1[2];



//For question 3

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
