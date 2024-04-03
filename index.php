 <html>
 <head>
 <title>Conditional Statements</title>
 </head>
 <body>
 <h4><u>CONDITIONAL STATEMENTS</h4></u>
    <h5>1.SIMPLE IF </h5>
    <?php
    $a = 14;
    if ($a >= 10) {
        echo "The Number is :" . $a;
    }
    ?>

    <h5>2.IF ELSE</h5>
    <?php
    $a = 15;
    if ($a >= 18) {
        echo "The person is eligible to vote";
    } else {
        echo "The person is not eligible to vote";
    }
    ?>

    <h5>3.ELSE IF </h5>
    <?php
    $day = 2;
    if ($day == 1) {
        echo "The day is Monday";
    } elseif ($day == 2) {
        echo "The day is Tuesday";
    } elseif ($day == 3) {
        echo "The day is Wednesday";
    } elseif ($day == 4) {
        echo "The day is Thursday";
    } else {
        echo "day not found";
    }
    ?>

    <h5>4.SWITCH CASE</h5>
    <?php
    $a = 99;
    switch ($a) {
        case ($a >= 90):
            echo "A Grade";
            break;
        case ($a >= 80):
            echo "B Grade";
            break;
        case ($a >= 70):
            echo "C Grade";
            break;
        case ($a >= 60):
            echo "D Grade";
            break;
        case ($a >= 35):
            echo "E Grade";
            break;
        default:
            echo "Fail";
            break;
    }
    echo "<br><br>";
    ?>

    <?php
    $ch = 3;
    switch ($ch) {
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "three";
            break;
        default:
            echo "none";
            break;
    }
    ?>

    <h5>5.NESTED IF</h5>
    <?php
    $math = 87;
    $sci = 23;
    if ($math >= 35 && $math <= 100) {
        echo "Maths Pass <br><br>";
        if ($sci >= 35 && $sci <= 100) {
            echo "Science Pass<br><br>";
        } else {
            echo "invalid";
        }

    }
    ?>
	 <h4><u>CONCATENATION ASSIGNMENT OPERATOR</u></h4>
    <?php
    $t = "Welcome";
    $t .= " Dad & Mom";
    echo $t . "<br><br>";
    ?>

    <?php
    $t = "I am";
    $t .= " a SQL";
    $t .= " Developer";
    echo $t;
    ?>

    <h4><u>STRING OPERATION</u></h4>
    <?php
    $word = "Aruna";
    echo "<i>Iam {$word} Sankari!</i>";
    echo "<br><br>";
    ?>

    <?php
    $a = 50;
    echo "<b>The value of {$a}s </b>";
    ?>

    <?php
    echo "<p>Variables are:$a=67 $b=90</p>";
    echo '<p>Variables are:$a=67 $b=90</p>';
    ?>

    <h4><u>ESCAPE STATEMENT</u></h4>
    <?php
    //Single Quotes
    echo '<p>Joes once said:"I\'ll be back"</p>';
    ?>

    <?php
    //Double Quotes
    echo "<p>Joes once said:\"I'll be back\"</p>";
    ?>
	</body>
	</html>