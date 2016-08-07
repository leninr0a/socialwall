<?php 

$tag = 'night';
$token = "243593455.e0a337b.5c0f9dc9a51048c39f21ce50409d8e8f";
$url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?access_token='.$token;


function processURL($url)
{
    $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => 2
    ));
 
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}


$all_result = processURL($url);

$result = json_decode($all_result);

echo "<pre>";
print_r($result);

foreach ($result->data as $post){
    echo "<img src='".$post->images->standard_resolution->url."'>";
    
}



?>