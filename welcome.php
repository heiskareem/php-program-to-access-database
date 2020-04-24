<?php
    function insert($a, $b, $c, $d, $e, $f, $g, $h){
        $host = 'localhost:3306';
        $user = 'root';
        $pwd = '';
        $dbname = 'test';
        $conn = mysqli_connect($host, $user, $pwd,$dbname);

        //to delete older table
        $sql = "DROP TABLE emp14";
        mysqli_query($conn, $sql);

        //to create same table
        $sql1 = "create table emp14(first CHAR(20), last CHAR(20), pin INT, city CHAR(20), state CHAR(20), dob CHAR(20), mnum INT, email CHAR(20))";
        mysqli_query($conn, $sql1);
      
        //inserting values in the table
        $sql2 = 'INSERT INTO emp14(first, last, pin, city, state, dob, mnum, email) VALUES("'.$a.'","'.$b.'",'.$c.',"'.$d.'","'.$e.'","'.$f.'",'.$g.',"'.$h.'")';
        mysqli_query($conn, $sql2);

        echo"<center><a href=\"display.php\" target=\"_self\">view detials</a> </center>";

        //this is for button
        /*echo"<center><form action=\"display.php\">
            <input type=\"submit\" value=\"Go to Google\" />
        </form> </center>"; */

        mysqli_close($conn);
    }
        $a = $_POST["first"];
        $b = $_POST["last"];
        $c = $_POST["pin"];
        $d = $_POST["city"];
        $e = $_POST["state"];
        $f = $_POST["dob"];
        $g = $_POST["mnum"];
        $h = $_POST["email"];

        if("True" == $_POST["sal"]){
            echo"<center><h1>Your elgiable for loan</h1></center>";
            insert($a, $b, $c, $d, $e, $f, $g, $h);
        }else{
            echo"<center><h1>Your not elgiable for loan</h1></center>";
        }

        

    //"'.$a.'","'.$b.'",'.$c.',"'.$d.'","'.$e.'","'.$f.'",'.$g.',"'.$h.'"

    /* */
    
?>

