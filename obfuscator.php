<?php
$judul =" PHP Obfuscator ";
include 'head.php';
?>

	<body>
		
		</div>
		<div class="input">
			<form action="" method="POST">
				<textarea class="form-control" rows="9" cols="85" type="text" name="php" placeholder="Input PHP Code"></textarea>

				<select class="form-control" name="option">
					<option>Encode Lemah</option>
					<option>Encode Sedang</option>
					<option>Encode Kuat</option>
				</select>
				<input class="btn btn-info " type="submit" name="submit" value="Submit" /><br>
				<?php
					if (isset($_POST['submit'])) {
					$phpcode = $_POST['php'];
						if (!empty($phpcode)) {
							$option = htmlspecialchars($_POST['option']);
							$website = "http://".$_SERVER['HTTP_HOST'];
							$file_location = htmlspecialchars($_SERVER['REQUEST_URI']);
							$all_in_one = $website.$file_location;
							$final = strrev(base64_encode(gzdeflate(gzcompress($phpcode))));
							$obfuscated_code = $final;

							switch ($option) {
								case 'Weak Obfuscation':
									echo '
<textarea rows="9" cols="85" class="form-control" rows="9" cols="50">
<?php
/*
		The Given Code Was Successfully Obfuscated By InsideHeartz Obfuscator :-)
						From : '.$all_in_one.'
								Terimakasih Atas Partisipasinya 
*/
$UeXploiT = "ZXZhbCUyOCUyNyUzRiUyNmd0JTNCJTI3Lmd6dW5jb21wcmVzcyUyOGd6aW5mbGF0ZSUyOGJhc2U2NF9kZWNvZGUlMjhzdHJyZXYlMjglMjRBbjBuXzN4UGxvaVRlUiUyOSUyOSUyOSUyOSUyOSUzQg==";
$An0n_3xPloiTeR = "'.$obfuscated_code.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($UeXploiT))));
exit;
?></textarea>
';
								break;

								case 'Medium Level Obfuscation':
									$obfuscate_medium_level = strrev(base64_encode(gzdeflate(gzdeflate(gzcompress($phpcode)))));
									echo '<textarea rows="9" cols="85" class="form-control" rows="9" cols="50">
<?php
/*
		The Given Code Was Successfully Obfuscated By InsideHeartz Obfuscator :-)
						From : '.$all_in_one.'
								Terimakasih Atas Partisipasinya 
*/
$UeXploiT = "ZXZhbCUyOCUyNyUzRiUyNmd0JTNCJTI3Lmd6dW5jb21wcmVzcyUyOGd6aW5mbGF0ZSUyOGd6aW5mbGF0ZSUyOGJhc2U2NF9kZWNvZGUlMjhzdHJyZXYlMjglMjRBbjBuXzN4UGxvaVRlUiUyOSUyOSUyOSUyOSUyOSUyOSUzQg==";
$An0n_3xPloiTeR = "'.$obfuscate_medium_level.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($UeXploiT))));
exit;
?></textarea>
';

								break;

								case 'Strong Obfuscation':
								$obfuscate_high_level = strrev(base64_encode(gzdeflate(gzdeflate(gzdeflate(gzcompress(gzcompress($phpcode)))))));
									echo '<textarea class="form-control" rows="9" cols="50">
<?php
/*
The Given Code Was Successfully Obfuscated By InsideHeartz Obfuscator :-)
						From : '.$all_in_one.'
								Terimakasih Atas Partisipasinya 
*/
$UeXploiT = "ZXZhbCUyOCUyNnF1b3QlM0IlM0YlMjZndCUzQiUyNnF1b3QlM0IuZ3p1bmNvbXByZXNzJTI4Z3p1bmNvbXByZXNzJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4YmFzZTY0X2RlY29kZSUyOHN0cnJldiUyOCUyNEFuMG5fM3hQbG9pVGVSJTI5JTI5JTI5JTI5JTI5JTI5JTI5JTI5JTNC";
$An0n_3xPloiTeR = "'.$obfuscate_high_level.'";
eval(htmlspecialchars_decode(urldecode(base64_decode($UeXploiT))));
exit;
?></textarea>
';
								break;
							} 
						}
					}
				?>
			</form>
		</div>
<br>
<br>
	<?
include 'footer.php';
?>