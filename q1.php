<?php
session_start();
?>

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
</body>