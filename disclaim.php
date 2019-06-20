<?php 
$judul =" Disclaimer Generator Bahasa Indonesia ";
include 'head.php';
?>
<style>
.form-control {
background:none;
}
</style>
<center> <h2> DISCLAIMER GENERATOR BAHASA INDONESIA</h2>
<img src="https://www.psira.co.za/psira/images/disclaimer.png" class="img-responsive"/>
<form name="myForm" id="myForm" action="disclaimer.php" onsubmit="return validateForm('myForm');" method="get">

<input widht="150" class="form-control" type="text" pattern="https?://.+" name="situs" placeholder="URL Situs Mu" />


<input class="form-control input-sm"type="text" name="nama" placeholder="Nama Situs Mu" /><input class="form-control" type="text" name="email" placeholder="Email Situs Mu" />



</br>


<input class="btn btn-info btn-hover"type="submit" name="submit" />


</form>



<? include 'footer.php'; ?>
