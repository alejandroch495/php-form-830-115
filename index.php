<?php
//echo 'This is PHP!';
//echo 'you are such a big fart looozer';
if(isset($_GET["FirstName"])){//show feedback
echo $_GET["FirstName"];
echo '<pre>';
var_dump($_GET);
echo '</pre>';

}
else{//show form
    echo '<p>This is a form yay?</p><form action=""> 
    <p><input type="text" name="FirstName" placeholder="First Name" />First Name:</p>
    <p><input type="text" name="LastName" placeholder="Last Name" />Last Name</p>
    <p><input type="text" name="Email" placeholder="Email" /></p>
    
    <br />


    <input type="submit"  /></form>
    
    ';
}



?>