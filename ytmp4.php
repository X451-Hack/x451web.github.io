<? $judul = " Youtube Thumbnail Downloader ";
   include 'head.php';
?>


<div class="container">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<h4><center><i class="fas fa-sign-in-alt"></i> Enter Youtube Url </center></h4>
  		</div>
  		  <div class="panel-body">
  		  	<center>

<form methode="get">
<input type="text" class="form-control" name="q"/>
<input type="submit"  class="btn btn-info"/>
</form>
</center>
  		  </div>
  		  
  	</div>
  </div>
<?
  if(isset($_GET['q']))
           {
  $api_key = 'AIzaSyBZ7OeWhMoqnLly8xYJ1SA6z2yBIvRz8ew';
  
  $url = $_GET['q'];
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

    $youtube_id = $match[1];

  $api_url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.($youtube_id) . '&key=' .$api_key;
        
  $data = json_decode(file_get_contents($api_url));
  
  // Accessing Video Info
echo ' 
<div class="container">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<center><i class="fas fa-sign-in-alt"></i> Result</center></h4>
  		</div>
  		  <div class="panel-body">
  		 ';
 echo '<img src="https://i.ytimg.com/vi/'.$youtube_id.'/maxresdefault.jpg" class="img-responsive"/><br>';
  echo '<strong>Title: </strong>' . $data->items[0]->snippet->title . '<br>';
  echo '<strong>Publish: </strong>' . $data->items[0]->snippet->publishedAt . '<br>';
  echo '<strong>Duration: </strong>' . $data->items[0]->contentDetails->duration . '<br>';
  echo '<strong>Jumlah Penayangan: </strong>' . $data->items[0]->statistics->viewCount . '<br>';
  
echo '<strong>Liked: </strong>' . $data->items[0]->statistics->likeCount . '<br>';
echo '<strong>Tags: </strong>' . $data->items[0]->tags . '<br>';
echo '<center>
 <a class="btn btn-info" href="http://api.youtube6download.top/fetch/link.php?i='.$youtube_id.'">Download Link</a> 
';
}
?>