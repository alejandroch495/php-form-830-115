<?php
//echo 'This is PHP!';
//echo 'you are such a big fart looozer';
if(isset($_GET["FirstName"])){//show feedback
echo $_GET["FirstName"];
}
else{//show form
    echo '<p>This is a form yay?</p><form action="">First Name: <input type="text" name="FirstName" placeholder="First Name" /><br />
    <input type="submit"  /></form>
    
    ';
}



?>