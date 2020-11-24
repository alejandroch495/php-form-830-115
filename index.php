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
    <p>First Name:<input type="text" name="FirstName" placeholder="First Name" /></p>
    <p>Last Name:<input type="text" name="LastName" placeholder="Last Name" /></p>
    <p>E-mail:<input type="text" name="Email" placeholder="Email" /></p>
    <p>you like cheese?<input type="radio" name="yes" placeholder="yes" />yes <input type="radio" name="no" placeholder="no" />no </p>
    
    <br />


    <input type="submit"  /></form>
    
    ';
}



?>