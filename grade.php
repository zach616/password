
<?php
    
    $answer1 = $_POST['question-1-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "wow") { $totalCorrect++; }
    
    
    echo "<div id='results'>$totalCorrect / 1 correct</div>";
    
?>
