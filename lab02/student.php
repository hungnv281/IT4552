<html>
<head>
    <title>
        stuednt information
    </title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h2>student information</h2>
    <?php
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        $study_process = $_POST["process"];
        $hobbies = $_POST["hobby"];
        print "<br> name : $name";
        print "<br> gender: $gender";
        print "<br> class: $class";
        print "<br> university: $university";
        print "<br> study process: $study_process";
        print "<br> hobbies:";
        foreach ($hobbies as $selected) {
            print "<br> $selected";
        }
    ?>
</body>
</html>