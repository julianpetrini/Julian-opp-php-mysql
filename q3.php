<?php
session_start();
?>


<?php include 'header.php'; 

    $_SESSION['question2']=$_POST['question2'];
        
    //JUST TO CHECK IF IT WORKED 
    //echo $_SESSION['question2'] ."Valor de session ['question2']";
    //echo $_SESSION['question1']."Valor de session ['question1']";

    // JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : 
    //echo $_SESSION['question2']."HOLA";
    

    if(isset($_POST['submit'])){

    $question2=$_POST['question3'];

    $_SESSION['question3']=$question2;

 
    }

?>
<body>
    <div class="bg-image background-image3" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $thirdQuestion['Text'] . '</h1>' ?>
            <form action="result.php" method="post">
                <input type="checkbox" name="question3" id="question3" value="<?php echo $answer31['IsCorrectAnswer']?>">
                <label for="q1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer31 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="question3" id="question3" value="<?php echo $answer32['IsCorrectAnswer']?>">
                <label for="question2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer32 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="question3" id="question3" value="<?php echo $answer33['IsCorrectAnswer']?>">
                <label for="question3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer33 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="question3" id="question3" value="<?php echo $answer34['IsCorrectAnswer']?>">
                <label for="question3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer34 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="question3" id="question3" value="<?php echo $answer35['IsCorrectAnswer']?>">
                <label for="question3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer35 ['text'] . '</h4>' ?></label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>