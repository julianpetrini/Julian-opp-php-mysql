<body>
    <?php include 'header.php';
    $_SESSION['q3']=$_POST['q3'];
    ?>
    <div class="bg-image background-image" alt="">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center">
            <h1 class="mb-3 text-center color-texto">RESULT'S</h1>
            <?php       
                        $a=array($_SESSION['q1'],$_SESSION['q2'],$_SESSION['q3']);
                        //echo "esta es la suma de todo " .array_sum($a);

                        if (array_sum($a)==0)
                        {
                            echo "<h1 class='mb-3 text-center texto-up'>Please try again, what happened?</h1>";
                            
                        }
                        else if (array_sum($a)<5){
                            echo "<h1 class='mb-3 text-center texto-up'>You should improve your Geo knowledge</h1>";
                        }

                        $total=array_sum($a);
                    
                        echo "<h1 class='mb-3 text-center texto-up'>This is your total points: $total/8</h1>
                                <div class='img-responsive'>
                                    <img src='/img/logo.png'>
                                </div>"


                        ?>
       </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>