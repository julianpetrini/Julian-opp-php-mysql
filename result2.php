<?php
session_start();
?>

<?php
include 'php/data-collector.php';
include 'php/header2.php';

// Get the list with the achieved and maximum points (listed per question) .
if (isset($_SESSION['achievedPointsList'])){
    $achievedPointsList = $_SESSION['achievedPointsList'];
}
else{
    // Lands here if result2.php is opened in the brownser before visiting any question.
    $achievedPointsList = array();
}
if(isset($_SESSION['maxPointsList'])){
    $maxPointsList = $_SESSION['maxPointsList'];
}
else{
    // Lands here if result2.php is opened in the browser before visiting any question.
    $maxPointsList = array();

}

// Get total achieved points .

$total = 0;

foreach ($achievedPointsList as $key => $value){
        $total += $value; // same as $total = $total + $value;
}

// Get total of maximum points.

$maxTotal = 0;

foreach ($maxPointsList as $key => $value){
    $maxTotal += $value; 
}

// Depending on the achieved points, set a feedback exclamation.

if ($total / $maxTotal >= 0.8){
    $exclamation = "Great";
}
else if ($total / $maxTotal >=0.4){
    $exclamation = "Good";
}
else{
    $exclamation = "Ouch";
}
?>

    <div class="bg-image background-image" alt="">
        
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <h1 class="mb-3 text-cente786r color-texto">Result Page</h1>
            <h4 class="mb-3 text-center color-texto"><?php echo $exclamation; ?>, you got <?php echo  $total; ?> of <?php echo $maxTotal; ?> points !</h4>
            <a class="btn btn-outline-light btn-danger" href="question.php" role="button">START</a>
        </div>
    </div>

<?php include 'footer.php'?>