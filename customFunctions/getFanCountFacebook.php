<?php
	
	$ch = @file_get_contents("https://graph.facebook.com/bka.org?access_token=EAACEdEose0cBAHxnKK2ilUEN8fHbkogg9aACljFbgQJSjUB8J7EBSmLHA78p0xQlQ3VjqqVMZBlAzH0bThwRhM4ZAJvYCqDJHHne0LTUp3ii8rzYALjsDggkIofRNQNhzv8EcZBLgZAJE3Je0VbCY9Wk5V22bHBCqBKbR2kmhAZDZD");
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	var_dump($ch);
	$raw = curl_exec($ch);
	curl_close($ch);

	$data = json_decode($raw);
	var_dump($data);
	//echo $data->likes . " people like Coca-Cola";


/*function getPageFanCount($page) {
    $pageData = file_get_contents('https://graph.facebook.com/'.$page);
    var_dump($pageData);
    if($pageData) { // if valid json object
        $pageData = json_decode($pageData); // decode json object
        if(isset($pageData->likes)) { // get likes from the json object
           return $pageData->likes;
        }
    } else {
        echo 'page is not a valid FB Page';
    }
}*/
//- See more at: https://arjunphp.com/how-to-get-facebook-page-fan-count-using-php/#sthash.M9IWyYVv.dpuf
?>