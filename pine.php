<?php
    echo"<center><form name=\"form\" action=\"welcome.php\" method=\"post\" target=\"_blank\">
        <h1>Registration form</h1>
        
        <a>First Name</a>
        <input type=\"text\" name=\"first\"><br/><br/>
        <a>Last Name</a>
        <input type=\"text\" name=\"last\"><br/><br/>
        <a>Pincode</a>
        <input type=\"text\" name=\"pin\"><br/><br/>
        <a>city</a>
        <input type=\"text\" name=\"city\"><br/><br/>
        <a>state</a>
        <input type=\"text\" name=\"state\"><br/><br/>
        <a>Date of Birth</a>
        <input type=\"text\" name=\"dob\" placeholder=\"DD\MM\YYYY\"><br/><br/>
        <a>Mobile Number</a>
        <input type=\"text\" name=\"mnum\"><br/><br/>
        <a>Email</a>
        <input type=\"text\" name=\"email\"><br/><br/>
        
        <input type=\"radio\" value=\"True\" name=\"sal\">
        <a>above 40k</a>
    
        <input type=\"radio\" value=\"False\" name=\"sal\">
        <a>below 40K</a><br/><br/>
        <input type=\"submit\" value=\"Done\">
    </form></center>";
    
    
?>
