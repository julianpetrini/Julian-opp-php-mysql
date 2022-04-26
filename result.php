<?php
session_start();
?>

<body>
    <?php include 'header.php';
    $_SESSION['question3']=$_POST['question3'];
       
    //echo $_SESSION['question1'];
    //echo $_SESSION['question2'];
    //echo $_SESSION['question3'];

    ?>
    <div class="bg-image background-image" alt="">
        <div class="text-white text-center">
            <div class="text-white text-center">
            <h1 class="mb-3 text-center color-texto">RESULT'S</h1>
            <?php       

                        //$points1=intval($_SESSION['question1']);
                        //$points2=intval($_SESSION['question2']);
                        //$points3=intval($_SESSION['question3']);

                       // $result=($valorquestion1+$valorquestion2+$valorquestion3);



                       $a=array($_SESSION['question1'],$_SESSION['question2'],$_SESSION['question3']);


                                                                                      
                    
                        if (array_sum($a)==0)
                        {
                            echo "<h1 class='mb-3 text-center texto-up color-texto'>Please try again, what happened?</h1>";
                            
                        }
                        else if (array_sum($a)<=2){
                            echo "<h1 class='mb-3 text-center texto-up color-texto'>You should improve a little</h1>";
                        }

                        else if (array_sum($a)==3){
                            echo "<h1 class='mb-3 text-center texto-up color-texto'>You are amazing</h1>";
                        }

                        $total=array_sum($a);

                                    
                        echo "<h1 class='mb-3 text-center texto-up color-texto'>This is your total points: $total/3</h1>
                                <div class='final'>
                                    <img class=' rounded mx-auto d-block ' src='img/logo.png'>
                                </div>"


                        ?>
       </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>