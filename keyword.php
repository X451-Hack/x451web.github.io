<? 
$judul = " Keyword Research Tool ";
include 'head.php';
?>
<center> <h2> Keyword Research Tools </h2>
<img src="https://cdn.searchenginejournal.com/wp-content/uploads/2018/10/keyword-research-tools-1-760x400.png" class="img-responsive"/>
<form method="post">


<input class="form-control"type="text" name="key" placeholder="Masukan Keyword" />



</br>


<input class="btn btn-info btn-hover"type="submit" value="Mulai" name="submit" />


</form>


<?php

$search = $_POST['key'];

$json_data = file_get_contents('http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=id-ID&q='.urlencode($search));
    
$data = json_decode($json_data, true);

$items = $data[1];

echo 'Silahkan Copy Result Dibawah Ini :<br><textarea class="form-control"  rows="4" cols="60">';
foreach($items as $item){
    

echo $item.",";
}
?>
</textarea>
<br>
<br>
<? include 'footer.php'; ?>