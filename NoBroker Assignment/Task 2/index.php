<?php

if(empty($_POST['name']))
{
    $name_error = "Please enter the name";
}
if(empty($_POST['email']))
{
    $email_error = "Please enter the email";
}
if(empty($_POST['phone']))
{
    $phone_error = "Please enter the phone";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Validation Page</title>
    </head>
    <body>
        <form action="" method="post" auto_complete="off">
            <span><?php echo $name_error; ?></span>
            <input type="text" name="Name" id="">
            <br>
            <span><?php echo $email_error; ?></span>
            <input type="text" name="Email" id="">
            <br>
            <span><?php echo $phone_error; ?></span>
            <input type="tel" name="Phone" id="">
            <br>
            <input type="Submit" value="Register">
        </form></form>
    </body>
</html>