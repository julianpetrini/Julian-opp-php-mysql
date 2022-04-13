<body>
    <?php include 'header.php'?>
    <div class="bg-image background-image" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <?php echo '<h1 class="mb-3 text-center color-texto">' . $thirdQuestion['Text'] . '</h1>' ?>
            <form action="result.php" method="post">
                <input type="checkbox" name="" id="q1">
                <label for="q1">a1</label>
                <input type="checkbox" name="" id="q2">
                <label for="q2">a2</label>
                <input type="checkbox" name="" id="q3">
                <label for="q3">a3</label>
                <br>
                <button type="submit" class="btn btn-outline-light btn-danger">Submit</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>