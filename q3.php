<body>
    <?php include 'header.php'?>
    <div class="bg-image background-image3" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $thirdQuestion['Text'] . '</h1>' ?>
            <form action="result.php" method="post">
                <input type="checkbox" name="q3" id="q3">
                <label for="q1"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer31 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q3" id="q3">
                <label for="q2"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer32 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q3" id="q3">
                <label for="q3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer33 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q3" id="q3">
                <label for="q3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer34 ['text'] . '</h4>' ?></label>
                <input type="checkbox" name="q3" id="q3">
                <label for="q3"><?php echo '<h4 class="mb-3 text-center color-texto">' . $answer35 ['text'] . '</h4>' ?></label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>