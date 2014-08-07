<html>
<body>

<?php
// if the form was filled out and submitted, mail it
if ( isset($_REQUEST['subButton']) )
{
    $email = $_REQUEST['email'] ;
    $subject = "Contact Us request from site";
    $message = $_REQUEST['message'] ;
    mail( "secretEmailAddress@email.com", "Subject: $subject", $message, "From: $email" );
    header("location: contact.html");
}
else
{
    echo "<form method='post' action='Contact.php'>
    Email: <input name='email' type='text'/><br/>
    Message:<br/>
    <textarea name='message' rows='10' cols='30'>
    </textarea><br/>
    <input type='submit' name='subButton' value='Contact Us'/>
    </form>";
}
?>

</body>
</html> 