
<?php


//opening the table

$host = 'localhost:3306';
$user = 'root';
$pwd = '';
$dbname = 'test';
$conn = mysqli_connect($host, $user, $pwd,$dbname);



        $sql3 = 'SELECT * FROM emp14';
        $view = mysqli_query($conn, $sql3);
        
        echo"<html><head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
        </head><body><center>";

        echo"<center><h1>Your elgiable for loan</h1></center>";
        
        if(mysqli_num_rows($view) > 0){
             while($row = mysqli_fetch_assoc($view)){
                echo"<table>";
                echo"<tr><td>First Name</td> <td>{$row['first']}</td></tr> ";
                echo"<tr><td>Last Name</td> <td>{$row['last']} </td> </tr>";
                echo"<tr><td>Pincode</td> <td>{$row['pin']} </td> </tr>";
                echo"<tr><td>City</td> <td>{$row['city']}  </td></tr>";
                echo"<tr><td>State</td> <td>{$row['state']}  </td></tr>";
                echo"<tr><td>Date of Birth</td> <td>{$row['dob']} </td></tr> ";
                echo"<tr><td>Mobile Number</td> <td>{$row['mnum']} </td></tr> ";
                echo"<tr><td>Email</td> <td>{$row['email']}  </td></tr>";
                echo"</table>";
             }
        }
        
        echo"</center></body></html>";
        //mysqli_num_rows($view) > 0
                //$row = mysqli_fetch_assoc($view)
?>