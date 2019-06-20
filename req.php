<!DOCTYPE html>
<? 
include 'head.php';
?>

<?php 
if(isset($_POST['submit'])){
    $to = "abdulmuttaqin456@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Request Tools Katanya";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Succes</strong> I will reply your message later <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<div class="container">
<form action="" method="post">
Nama Depan : <input class="form-control" type="text" name="first_name"><br>
Nama Belakang: <input class="form-control" type="text" name="last_name"><br>
Email: <input class="form-control" type="text" name="email"><br>
Request Apa?  :<br><textarea class="form-control" rows="5" name="message" cols="30" placeholder="What do you want ?"></textarea><br>
<input class="btn btn-info" type="submit" name="submit" value="Submit">
</form>
<br><br><br>

<? include 'footer.php'; ?>