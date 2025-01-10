<html>
    <body>
        <?php
        //This is Single Line Comment
        //echo "Hello World!";

        echo "Hello World!";
        echo "<br>This is Comment example";

        $name="Vaishnavi";
        $age=18;
        $time=2.46;
        $class=true;
        
        //Compound Types
        $student_arr = array("Sneha", "Mansvi", "Tanishka");

        class Student{
            public $marks;
        }
        $stud = new Student();
        $stud->marks =90;

        //Special Types
        $null_var = null;

        echo "<br>String : ", $name;
        echo "<br>Integer : ", $age;
        echo "<br>Float : ", $time;
        echo "<br>Boolean : ", $class;

        //echo "Object" + $Stud;
        echo "<br>Null : ", $null_var;
        echo "<br>Array : ", $student_arr[0];

        /* This is multiline comments
        Devloped for php session*/
        ?>
    </body>
</html>