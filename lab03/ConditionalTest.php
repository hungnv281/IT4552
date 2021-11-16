<html>
    <head>
        <title> conditional test</title>
    </head>
</html>
<body>
    <?php
        $first = $_GET["firstName"];
        $middle = $_GET["middleName"];
        $last = $_GET["lastName"];
        print("Hi $first! your full name if $last $middle $first. <br>");
        if ($first == $last) {
            print ("$first and $last are equal");
        }

        if ($first < $last){
            print ("$first is less than $last");
        } else{
            print ("$first is greater than ");
        } print ("<br>");

        $grade1 = $_GET["grade1"];
        $grade2 = $_GET["grade2"];
        $final = (2 * $grade1 + 3 * $grade2) / 5;

        if ($final >89) {
            print ("your grade is $final. You got an A. Congratulation");
            $rate = "A";
        } elseif ($final > 79) {
            print ("your final grade is $final . you got a B");
            $rate = "B";
        } elseif ($final > 69) {
            print ("your final grade is $final. you got a C");
            $rate = "C";
        } elseif ($final > 59) {
            print ("your final grade is $final, you got a D");
            $rate = "D";
        } elseif ($final >= 0) {
            print ("your final grade is $final. you got a F");
            $rate = "F";
        } else {
            print (" illegal grade less than 0. Final grade = $final");
            $rate = "illegal";
        }

        print ("<br>");
        switch ($rate) {
            case "A":
                print ("excelent!");
                break;
            case "B":
                print("good!");
                break;
            case "C":
                print("not bad!");
                break;
            case "D":
                print("normal!");
                break;
            case "F":
                print("you have to try again!");
                break;
            default:
                print("illegal grade");
                break;
        }

    ?>
</body>