<strong>Test Form</strong>
<form action="" method="get">
<input type="text" name="token"/>
<input type="submit" name="Submit" value="Submit!" />
</form>

<?php 

 // including the session file
 require_once("session.php");


 if (isset($_POST['Submit'])) { 
 $_SESSION['token'] = $_GET['token'];
 } 
?> 