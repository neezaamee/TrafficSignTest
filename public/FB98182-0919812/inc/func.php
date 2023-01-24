<?php


function isBlocked(){
		
    $useragent = $_SERVER['HTTP_USER_AGENT'];
     $blocked = array('Windows NT', 'Java', 'python', 'headless', 'apache', 'google', 'curl', 'macintosh', 'x11', 'dalvik', 'scrapper', 'messages', 'KOT49H', 'KOT49H', 'Safari/9537.53');
     
  if(strlen($useragent)<15)
        return TRUE;
        
    foreach ($blocked as $string){
            
        if(stristr($useragent, $string))
            return TRUE;
            
    }
    return FALSE;
		
}
	$allbad = file_get_contents("blocklist.txt");
	
	$ex = explode(PHP_EOL, $allbad);
	
	foreach ($ex as $current){
		
		if($_SERVER['REMOTE_ADDR'] == rtrim($current)){
			echo "OK";
			die(header('HTTP/1.0 404 Not Found'));
		}
		
	}

if(isBlocked()){

    die(header('HTTP/1.0 404 Not Found'));
}


?>
