<?php
//Variables
$user_email = $_REQUEST['email_address'];
$user_name = $_REQUEST['full_name'];
$user_found = $_REQUEST['wordOfMouth'];
$user_comment = $_REQUEST['feedback_area'];
$newsletter = $_POST['newsletter'];
if($newsletter != 'Yes') {
   $newsletter = 'No';
}

$user_check = stripos("$user_email","@");
//Body of the email to be sent.
$body_mail = "Hello Mechanical Associates, someone wants to contact you. Details:
Name: $user_name
Email: $user_email
Found the website by way of: $user_found
Do they want to subscribe to our monthly newsletter?: $newsletter
Comment: $user_comment";
//Body of the Email for the user requesting a copy.
$body_email = "
Thank you for contacting us, we'll reply as soon as possible.
- Mechanical Associates";
//Check if the user submmited the data require.
//If the @ is missing from the email address stop the user for continuing.
if ($user_check) {
echo "";
}
else {
echo "You can't continue with out a email address, Please enter a email address.";
   exit ($user_check);
}
if (empty($user_name)) {
echo "<center><h2><font color='ff0000'>ERROR</font></h2></center>You didn't enter your name.<br>";
   exit();
}
if ($_POST['wordOfMouth'] === 'pleaseSelect') {
echo "<center><h2><font color='ff0000'>ERROR</font></h2></center>How exactly did you find us?<br>";
   exit();
}
if (empty($user_comment)) {
echo "<center><h2><font color='ff0000'>ERROR</h2></center></font>Please enter a comment.";
   die();
}
//Everything okay? send the e-mail.
else {
mail("sales@mechanical-associates.net",'Mechanical Associate Feedback',"$body_mail","from:Mechanical Associates");
    echo "Your email was sent! Thank you.";
}
?>
