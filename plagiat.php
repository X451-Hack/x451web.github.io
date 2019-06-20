<head>
<link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
</head>
<style>
html, body,h3{
       background:#000000;
       color:#00FF00;
       font-family: 'Orbitron';
       height: 100%;
       text-decoration:  none;
}
 
textarea {
       background:#000000;
       resize:none;
       color: #00FF00 ;
       border:1px solid red ;
       border: 4px solid red ;
}
input {
        color: ##33CCFF;
        border:1px solid #33CCFF;
	background:white;
	font-family: 'Orbitron'; color:red;
}
</style>
<br>
<center><img src="http://i.imgur.com/ZbxbsGE.gif"></center>
</br>
<center>
<form action="" method="POST">
<textarea name="text" style="margin: 0px; width: 787px; height: 223px;" placeholder="Enter Text 2 Convert" >This news is about a penguin. He is from New Zealand. People find him on a beach. He is hungry. He is in a bad condition.People take him to a zoo. The penguin gets better.Penguins must change their feathers. First, they let the old feathers go. Then, new feathers can grow. They are without feathers for 2-3 weeks. This is a problem for penguins. They cannot fish without feathers. They must prepare for the moulting season. They must eat a lot of food before it.The penguin in New Zealand is 3.3 kilograms heavy. Every day, he eats 1.2 kilograms of fish. He must be 5.5 kilograms heavy.</textarea>
<br></br>
<input type="submit" name="spin" value="Let's The Magic Happen !!!">
</form>
</center>
<?php
error_reporting(0);
set_time_limit(0);
function spin($text){

$text_to_convert= explode(" ",$text);

foreach($text_to_convert as $word){

if($homepage=file_get_contents('http://words.bighugelabs.com/api/2/c50fd6225076405857968073d23ebc00/'.$word.'/json'))
{
	
	$wod = json_decode($homepage);
	//print_r($wod->{'adjective'}->{'syn'});
	
	
	if($wod->{'noun'}){
           echo " ".$word." ";
				}
	$oneword=$wod->{'adjective'}->{'syn'};
	echo " ".$oneword[0]." ";
	
	$onewordss=$wod->{'verb'}->{'syn'};
	echo " ".$onewordss[0]." ";	

	flush();
    	ob_flush();

					}

else {

	echo " ".$word." ";
	flush();
    	ob_flush();

	}





					}//end of for each word


}//end of function spin


if(isset($_POST['spin'])){

$text=$_POST['text'];

echo "<br></br><h3>Converted : </h3><center>";
spin($text);
echo"</center>";

}

?>
<center><h3>GIFT TO All Students By H4T3D</h3></center>