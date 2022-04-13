<body>
    <?php include 'header.php';
    print "<pre>";
    print_r($answers);
    print_r($respuestas1);
    print "</pre>";
    echo '<h1 class="mb-3 text-center color-texto">' . $firstQuestion['Text'] . '</h1>' ?>
    <div class="bg-image background-image1" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $firstQuestion['Text'] . '</h1>' ?>
            <form action="q2.php" method="post">
                <input type="checkbox" name="" id="q1">
                <label for="q1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer1 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="" id="q2">
                <label for="q2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a2['text'] . '</h4>' ?></label>
                <input type="checkbox" name="" id="q3">
                <label for="q3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $a3['text'] . '</h4>' ?></label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>