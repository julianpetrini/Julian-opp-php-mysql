<body>
    <?php include 'header.php';

    if(isset($_POST['submit'])){

        $q1=$_POST['q1'];   
    
        $_SESSION['q1']=$q1;
    }
    
    ?>
    <div class="bg-image background-image1" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $firstQuestion['Text'] . '</h1>' ?>
            <form action="q2.php" method="post">
                <input type="checkbox" name="q1" id="" value="<?php $valora1 ?>">
                <label for="q1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a1 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q1" id="" value="<?php $a2['IsCorrectAnswer']?>">
                <label for="q2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a2['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q1" id="" value="3">
                <label for="q3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a3['text'] . '</h4>' ?></label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>