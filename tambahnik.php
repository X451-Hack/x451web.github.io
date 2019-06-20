<? include 'head.php'; ?>

<html>
<head><title>Tambah NIK & KK</title>
</head>
<body>
<form method="post">
<table border="1" background="red" align="center">
<tr>
<td>NAMA</td>
<td><input type="text" name="nama" /></td>
</tr>
<br>
<td>NIK</td>
<td><input type="number" name="txtname" /></td>
</tr>
<br>
<tr>
<td>KK</td>
<td><input type="number" name="txtpwd" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input class="btn btn-info" type="submit" name="txtbutton" value="SUBMIT" /></td>
</tr>
</table>
<?php include 'insert.php'; ?>
<?php
$name=$pwd="";
    if(isset($_POST['txtbutton']))
        { 
            $nama = $_POST['nama'];
            $name = $_POST['txtname'];
            $pwd = $_POST['txtpwd'];
            $mysqli->query("insert into kknik(nama,nik,kk) values('$nama','$name', '$pwd')");
        if(!$mysqli) 
        { echo mysqli_error(); }
    else
    {
        echo "Successfully Inserted <br />";
        
    }

         }  

    ?>