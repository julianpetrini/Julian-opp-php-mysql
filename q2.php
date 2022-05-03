<?php
session_start();
?>
    
    <?php include 'header.php';
    
    
    $_SESSION['question1']=$_POST['question1'];

    // JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : 
    //echo $_SESSION['question1']."this is value of SESSION [question1]";
    

    if(isset($_POST['submit'])){

    $question2=$_POST['question2'];

    $_SESSION['question2']=$question2;


    }
    
    
    ?>
<body>
    <div class="bg-image background-image2" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $secondQuestion['Text'] . '</h1>' ?>
            <form action="q3.php" method="post">
                <input type="radio" name="question2" id="question2" value="<?php echo $answer21['IsCorrectAnswer']?>">
                <label for="question1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer21 ['text'] . '</h4>' ?></label>
                <input type="radio" name="question2" id="question2" value="<?php echo $answer22['IsCorrectAnswer']?>">
                <label for="question2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer22 ['text'] . '</h4>' ?></label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
