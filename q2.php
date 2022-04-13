<body>
    <?php include 'header.php';
    
    $_SESSION['q1']=$_POST['q1'];

    // JUST TO TEST IF IT WAS TAKING THE INFO  echo "This is the answer : 
    echo $_SESSION['q1']."HOLA";
    echo $valora1;

    if(isset($_POST['submit'])){

    $q2=$_POST['q2'];

    $_SESSION['q2']=$q2;
    }
    
    
    ?>
    <div class="bg-image background-image2" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $secondQuestion['Text'] . '</h1>' ?>
            <form action="q3.php" method="post">
                <input type="checkbox" name="q2" id="q2">
                <label for="q1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer21 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q2" id="q2">
                <label for="q2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer22 ['text'] . '</h4>' ?></label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
