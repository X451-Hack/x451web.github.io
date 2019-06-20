<?php
$judul =" Fresh Proxy ";
include 'head.php';
$pages = 30; // # of pages to scrape (max 30)

$proxies = array();
for ($page = 1; $page <= $pages; $page++) {
	
	
	$url = "http://nntime.com/proxy-list-" . sprintf("%02d", $page) . ".htm";
	
	$ch = curl_init();
	curl_setopt_array($ch, array(
		CURLOPT_URL => $url,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 15
	));
	$data = curl_exec($ch);
	curl_close($ch);
	
	if (!empty($data)) {
		$getVars = get_between($data, '</script><script type="text/javascript">', "</script>");
		$getVars = trim(substr($getVars, 0, -1));
		$getVars = explode(";", $getVars);
		
		$variables = array();
		foreach ($getVars as $var) {
			$var = explode("=", $var);
			$variables[$var[0]] = $var[1];
		}
		
		preg_match_all('/onclick="choice\(\)" \/><\/td>(.*?)<\/script><\/td>/si', $data, $getProxies);
		foreach ($getProxies[1] as $proxyRaw) {
			$proxyIP = get_between($proxyRaw, "<td>", "<script type");
			$proxyPort = str_replace("+", "", get_between($proxyRaw, 'document.write(":"+' , ")"));
			$proxyPort = strtr($proxyPort, $variables);
			
			$proxies[] = $proxyIP . ":" . $proxyPort;
		}
	}
	
	
}


$saveFile = "proxies.txt";
file_put_contents($saveFile, implode("\n", $proxies));


function get_between($content, $start, $end){
    $r = explode($start, $content);
    if (isset($r[1])) {
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return "";
}
echo '<textarea class="form-control" rows="9" cols="90">';
echo file_get_contents('proxies.txt');
echo '
</textarea>';


?>