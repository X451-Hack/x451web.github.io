<?php 
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
$judul =" Disclaimer Generator Bahasa Indonesia ";
include 'head.php';
?>

</div>

<p>
<div class="container">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<h4><center><i class="fas fa-sign-in-alt"></i> Enter Url</center></h4>
  		</div>
  		  <div class="panel-body">
  		  	<center>

<form name="myForm" id="myForm"  onsubmit="return validateForm('myForm');" method="post">

<input class="form-control" type="text" pattern="https?://.+" name="situs" placeholder="URL Situs Mu" />


<select class="form-control" id="tipe" name="tipe">
    <option value='phone'>Mobile</option>
    <option value='desktop'>Desktop</option>
</select>
<select class="form-control" id="ukuran" name="ukuran">
    <option value='1024xfull'>1024xfull</option>
    <option value='1024x768'>1024x768</option>
</select>


</br>


<input class="btn btn-info" type="submit" value="Take A Pict!" onclick="javascript:showImage()" name="submit" />

</form>

</div>
  		  
  	</div>
  </div>

<script>
        function validateForm(formId)
        {
            var inputs, index;
            var form=document.getElementById(formId);
            inputs = form.getElementsByTagName('input');
            for (index = 0; index < inputs.length; ++index) {
                // deal with inputs[index] element.
                if (inputs[index].value==null || inputs[index].value=="")
                {
                    alert("TIDAK BOLEH KOSONG AJG!1!");
                    return false;
                }
            }
        }
</script>
<script>
window.onload=function(){
  document.getElementById("image").style.display='none';

}
function showButton(){
  document.getElementById("image").style.display='block';
}
</script>

<div class="container">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<h4><center><i class="fas fa-sign-in-alt"></i> Result</center></h4>
  		</div>
  		  <div class="panel-body">
  		  	<center>
<?
  if(isset($_GET['submit']))
           {
$url = $_POST['situs'];
$tipe = $_POST['tipe'];
$ukuran = $_POST['ukuran'];
echo ' <img class="img-responsive" src="http://api.screenshotmachine.com/?key=55c451&device='.$tipe.'&url='.$url.'&format=jpg&dimension='.$ukuran.'"/>';
}
</div>
  		  
  	</div>
  </div>

